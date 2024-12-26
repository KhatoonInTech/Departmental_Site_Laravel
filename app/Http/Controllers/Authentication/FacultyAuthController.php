<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faculty;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class FacultyAuthController extends Controller
{
    public function showProfile($faculty_ID)
    {
        $faculty = Faculty::where('Faculty_ID', $faculty_ID)->firstOrFail();
        return view('faculty.profile', compact('faculty'));
    }
    public function login(Request $request)
    {
        try {
            // Access the submitted form data from the request directly
            $credentials = session('faculty_credentials', $request->all());

            // Validate credentials
            if (empty($credentials['email']) || empty($credentials['fullname']) || empty($credentials['ID'])) {
                Log::info('Login Attempt Failed: ');

                return redirect()->back()
                    ->withInput()
                    ->withErrors(['message' => 'All fields are required.']);


            }

            // // Debugging - log the credentials for troubleshooting
            Log::info('Login Attempt with credentials: ', $credentials);

            // Find faculty using the email, ID, and fullname
            $faculty = Faculty::where('email', $credentials['email'])
                ->where('Faculty_ID', $credentials['ID'])
                ->where('Name', $credentials['fullname'])
                ->first();

            // Check if the faculty exists
            if (!$faculty) {
                Log::info('Facculty Not Found ');

                return redirect()->back()
                    ->withInput()
                    ->withErrors(['message' => 'No faculty member found with these credentials.']);
            }

            // Manually attempt login using the faculty's data
            Auth::guard('faculty')->login($faculty);

            // Store faculty data in session
            session(['faculty_data' => $faculty]);


            // Redirect to faculty profile view
            return redirect()->route('faculty.profile', ['faculty_ID' => $faculty->Faculty_ID]);

        } catch (\Exception $e) {
            // Log the error with full trace for debugging
            Log::error('Login Error: ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
            return redirect()->back()
                ->withInput()
                ->withErrors(['message' => 'An error occurred while processing your request. Please try again.']);
        }
    }

    public function logout()
    {
        // Log out the faculty and clear the session
        Auth::guard('faculty')->logout();
        session()->forget('faculty_data');

        // Redirect to home with a success message
        return redirect()->route('index')->with('message', 'Logged out successfully');
    }



    public function editProfile(Request $request, $faculty_ID)
    {
        try {
            // First find the faculty
            $faculty = Faculty::where('faculty_ID', $faculty_ID)->first();
            $field = $request->input('field_name');

            // Handle file uploads
            if ($request->hasFile('file')) {
                $file = $request->file('file');

                // Validate file based on field type
                if ($field === 'picture_url') {
                    $request->validate([
                        'file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
                    ]);
                    $path = $file->store('faculty/pictures', 'public');
                    $faculty->$field = 'storage/' . $path;
                } else if ($field === 'cv_resume_url') {
                    $request->validate([
                        'file' => 'required|mimes:pdf,doc,docx|max:5120'
                    ]);
                    $path = $file->store('faculty/documents', 'public');
                    $faculty->$field = 'storage/' . $path;
                }
            } else {
                // Handle text/textarea inputs
                $value = $request->input('value');
                $faculty->$field = $value;
            }

            $faculty->save();

            return redirect()
                ->back()
                ->with('success', 'Profile updated successfully');

        } catch (\Exception $e) {
            Log::error('Profile Update Error: ' . $e->getMessage());
            return redirect()
                ->back()
                ->withErrors(['message' => 'Failed to update profile. Please try again.']);
        }
    }
    public function destroy($ID)
    {
        $faculty = Faculty::where('Faculty_ID', $ID)->firstOrFail();
        $faculty->delete();

        return redirect()->back()->with('success', 'Faculty member deleted successfully');
    }

    public function addData(Request $request)
    {
        // Custom validation for all fields
        $validator = Validator::make($request->all(), [
            'Name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'Position' => 'nullable|string|max:255',
            'Faculty_ID' => [
                'required',
                'string',
                'regex:/^CPE-01-\d{2}$/',
                'unique:faculty,Faculty_ID'
            ],
            'Qualification' => 'nullable|string|max:1000',
            'Research_Interests' => 'nullable|string|max:1000',
            'Other_Information' => 'nullable|string|max:1000',
            'picture_url' => 'nullable|string|max:255|url',
            'cv_resume_url' => 'nullable|string|max:255|url',
            'linkedin_url' => 'nullable|string|max:255|url',
            'facebook_url' => 'nullable|string|max:255|url',
            'twitter_url' => 'nullable|string|max:255|url',
            'google_scholar_url' => 'nullable|string|max:255|url',
            'researchgate_url' => 'nullable|string|max:255|url',
            'orcid_url' => 'nullable|string|max:255|url',
        ], [
            // Custom error messages
            'Faculty_ID.regex' => 'Faculty ID must be in the format CPE-01-XX where XX are numbers',
            'email.email' => 'Please provide a valid email address',
            '*.url' => 'Please provide a valid URL',
        ]);
    
        // Check if validation fails
        if ($validator->fails()) {
            Log::error($validator->errors()->first());
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }
    
        // Get the validated data
        $validated = $validator->validated();
    
        // Check if Faculty_ID already exists
        $existingFaculty = Faculty::where('Faculty_ID', $validated['Faculty_ID'])->first();
    
        if ($existingFaculty) {
            // If ID exists, call editProfile function
            return $this->editProfile($request, $existingFaculty->Faculty_ID);
        }
    
        // If ID doesn't exist, create new faculty member
        Faculty::create([
            'Name' => $validated['Name'],
            'ROLE' => 'faculty',
            'Faculty_ID' => $validated['Faculty_ID'],
            'Position' => $request->Position?$validated['Position']:"",
            'Qualification' =>  $request->Qualification ?$validated['Qualification']:"",
            'Research_Interests' => $request->Research_Interests ?$validated['Research_Interests']:"",
            'Other_Information' => $request->Other_Information ?$validated['Other_Information']:"",
            'picture_url' => $request->picture_url ?$validated['picture_url']:"",
            'cv_resume_url' => $request->cv_resume_url ?$validated['cv_resume_url']:"",
            'email' => $validated['email'],
            'linkedin_url' => $request->linkedin_url?$validated['linkedin_url']:"",
            'facebook_url' => $request->facebook_url ?$validated['facebook_url']:"",
            'twitter_url' => $request->twitter_url ?$validated['twitter_url']:"",
            'google_scholar_url' =>$request->google_scholar_url ? $validated['google_scholar_url']:"",
            'researchgate_url' => $request->researchgate_url ?$validated['researchgate_url']:"",
            'orcid_url' => $request->orcid_url ?$validated['orcid_url']:"",
        ]);
    
        return redirect()
        ->back()
            ->with('success', 'Faculty member added successfully!');
    }

}