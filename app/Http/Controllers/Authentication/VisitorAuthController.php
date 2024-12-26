<?php

namespace App\Http\Controllers\Authentication;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Google\Client;
use Google\Service\Oauth2;
use App\Models\Visitors;
class VisitorAuthController extends Controller
{
    private $googleClient;

    public function __construct()
    {
        $this->googleClient = new Client();
        $this->googleClient->setClientId(config('services.google.client_id'));
        $this->googleClient->setClientSecret(config('services.google.client_secret'));
        $this->googleClient->setRedirectUri(config('services.google.redirect'));
        $this->googleClient->addScope("email");
        $this->googleClient->addScope("profile");
    }
    public function LinkedIn_authorize()
    {
        $url = "https://linkedin.com/oauth/v2/authorization";
        $params = http_build_query([
            'client_id' => env('LINKEDIN_CLIENT_ID'),
            'response_type' => 'code',
            'scope' => env('LINKEDIN_SCOPE'),
            'redirect_uri' => env('LINKEDIN_REDIRECT_URI')
        ]);

        return redirect($url . '?' . $params);
    }

    public function LinkedIn_handleCallback(Request $request)
    {
        $code = $request->query('code');
        $signedup = false; // Default value
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('LINKEDIN_ACCESS_TOKEN'),
                'X-Restli-Protocol-Version' => '2.0.0'
            ])->get('https://api.linkedin.com/v2/userinfo');


            if ($response->successful()) {
                $userInfo = $response->json();
                $signedup = true; // Set to true if user info is fetched successfully

                $visitor = $this->storeVisitorData($userInfo['email'], $userInfo['name'], 'linkedin');


                return redirect('/welcome');
            } else {
                //return view('visitorOnly.welcome', ['signedup' => False]);

                return response()->json(['error' => 'Failed to fetch user info'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    //Google Authentication
    public function Google_authorize()
    {
        return redirect($this->googleClient->createAuthUrl());
    }

    public function Google_handleCallback(Request $request)
    {
        $code = $request->get('code');
        $signedup = false;

        try {
            $token = $this->googleClient->fetchAccessTokenWithAuthCode($code);
            $this->googleClient->setAccessToken($token);

            $oauth2 = new Oauth2($this->googleClient);
            $userInfo = $oauth2->userinfo->get();

            if ($userInfo) {
                $signedup = true;
                $visitor = $this->storeVisitorData($userInfo->email, $userInfo->name, 'google');


                return redirect('/welcome');
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function storeVisitorData($email, $name, $source)
    {
        try {
            // Check if a visitor with the same email already exists
            $visitor = Visitors::where('email', $email)->first();

            if (!$visitor) {
                // Create a new visitor record if none exists
                $visitor = Visitors::create([
                    'email' => $email,
                    'name' => $name,
                    'auth_source' => $source // 'google' or 'linkedin'
                ]);
            }

            return $visitor;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function editProfile(Request $request, $email)
    {
        $validated = $request->validate([
            'field_name' => 'required|string|in:name,email,auth_source',
            'value' => 'required|string',
            'email' => 'required|email'
        ]);

        $visitor = Visitors::where('email', $email)->firstOrFail();
        $fieldName = $request->input('field_name');
        $value = $request->input('value');

        // If updating email, check if new email is already taken
        if ($fieldName === 'email' && $value !== $email) {
            if (Visitors::where('email', $value)->exists()) {
                return redirect()->back()->with('error', 'Email already in use');
            }
        }

        $visitor->update([$fieldName => $value]);

        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    
}
