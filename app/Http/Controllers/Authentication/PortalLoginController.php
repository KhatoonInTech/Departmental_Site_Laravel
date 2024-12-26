<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Auth;

class PortalLoginController extends Controller
{

    public function login(Request $request)
    {
      
        // Custom validation
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'Role' => 'required|in:student,faculty,community,admin',
            'ID' => [
                'required',
                'regex:/^CPE-\d{2}-\d{2}$/',
            ],
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

        // Debugging - log the credentials for troubleshooting
        Log::info('Login Attempt with Validator: ', $validated);

        // Store the validated form data in the session
        session()->flash('formData', $validated);

        // Redirect to the appropriate portal login route based on the Role
        switch ($validated['Role']) {
            case 'student':
                return $this->studentLogin($validated);
            case 'faculty':
                return $this->facultyLogin($validated);
            // case 'community':
            //     return $this->communityLogin($validated);
            case 'admin':
                return $this->adminLogin($validated);
            default:
                return back()->withErrors(['Role' => 'Invalid role selected.']);
        }
    }


    protected function facultyLogin(array $credentials)
    {
        try {
            session(['faculty_credentials' => $credentials]);

            $request = Request::create(route('faculty.login'), 'POST', $credentials);
            $request->headers->set('X-CSRF-TOKEN', csrf_token());
            $request->setSession(app(Session::class));

            return app()->handle($request);

        } catch (\Exception $e) {
            Log::error('Faculty Login Error: ' . $e->getMessage());
            return redirect()->back()->withErrors(['message' => 'Login failed']);
        }
    }

    protected function studentLogin(array $credentials)
    {
        try {
            session(['student_credentials' => $credentials]);

            $request = Request::create(route('student.login'), 'POST', $credentials);
            $request->headers->set('X-CSRF-TOKEN', csrf_token());
            $request->setSession(app(Session::class));

            return app()->handle($request);

        } catch (\Exception $e) {
            Log::error('Student Login Error: ' . $e->getMessage());
            return redirect()->back()->withErrors(['message' => 'Login failed']);
        }
    }


    protected function adminLogin(array $credentials)
    {
        try {
            session(['admin_credentials' => $credentials]);

            $request = Request::create(route('admin.login'), 'POST', $credentials);
            $request->headers->set('X-CSRF-TOKEN', csrf_token());
            $request->setSession(app(Session::class));

            return app()->handle($request);

        } catch (\Exception $e) {
            Log::error('Admin Login Error: ' . $e->getMessage());
            return redirect()->back()->withErrors(['message' => 'Login failed']);
        }
    }

    // protected function communityLogin(array $credentials)
    // {

    // }
}