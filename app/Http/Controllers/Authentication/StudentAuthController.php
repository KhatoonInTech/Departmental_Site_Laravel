<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class StudentAuthController extends Controller
{
    public function showProfile($Roll_No)
    {
        $student = Student::where('Roll_No', $Roll_No)->firstOrFail();
        return view('student.profile', compact('student'));
    }
    public function login(Request $request)
    {
        try {
            // Access the submitted form data from the request directly
            $credentials = session('student_credentials', $request->all());

            // Validate credentials
            if (empty($credentials['email']) || empty($credentials['fullname']) || empty($credentials['ID'])) {
                Log::info('Login Attempt Failed: ');

                return redirect()->back()
                    ->withInput()
                    ->withErrors(['message' => 'All fields are required.']);


            }

            // // Debugging - log the credentials for troubleshooting
            Log::info('Login Attempt with credentials: ', $credentials);

            // Find student using the email, ID, and fullname
            $student = Student::where('email', $credentials['email'])
                ->where('Roll_No', $credentials['ID'])
                ->where('Name', $credentials['fullname'])
                ->first();

            // Check if the student exists
            if (!$student) {
                Log::info('Student Not Found ');

                return redirect()->back()
                    ->withInput()
                    ->withErrors(['message' => 'No student member found with these credentials.']);
            }

            // Manually attempt login using the student's data
            Auth::guard('student')->login($student);

            // Store student data in session
            session(['student_data' => $student]);


            // Redirect to student profile view
            return redirect()->route('student.profile', ['Roll_No' => $student->Roll_No]);

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
        // Log out the student and clear the session
        Auth::guard('student')->logout();
        session()->forget('student_data');

        // Redirect to home with a success message
        return redirect('/')->withErrors('message', 'Successfully logged out');
    }



    public function editProfile(Request $request, $Roll_No)
    {
        try {
            $student = Student::where('Roll_No', $Roll_No)->first();
            $field = $request->input('field_name');

            // Handle file uploads
            if ($request->hasFile('file')) {
                $file = $request->file('file');

                // Validate file based on field type
                if ($field === 'picture_url') {
                    $request->validate([
                        'file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
                    ]);
                    $path = $file->store('student/pictures', 'public');
                    $student->$field = 'storage/' . $path;
                } else if ($field === 'cv_resume_url') {
                    $request->validate([
                        'file' => 'required|mimes:pdf,doc,docx|max:5120'
                    ]);
                    $path = $file->store('student/documents', 'public');
                    $student->$field = 'storage/' . $path;
                }
            } else {
                // Handle text/textarea inputs
                $value = $request->input('value');
                $student->$field = $value;
            }

            $student->save();

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
        $student = Student::where('Roll_No', $ID)->firstOrFail();
        $student->delete();

        return redirect()->back()->with('success', 'Student deleted successfully');
    }


    public function addData(Request $request)
    {
        // Custom validation for all fields
        $validator = Validator::make($request->all(), [
            'Name' => 'required|string|max:255',
            'Roll_No' => [
                'required',
                'string',
                'regex:/^CPE-\d{2}-\d{2}$/',
                'unique:student,Roll_No'
            ],
            'email' => 'required|email|max:255',
            'Session' => 'required|string|max:7', // Format: 2020-24
            'Current_Semester' => 'required|integer|between:1,8',
            'CGPA' => 'nullable|numeric|between:0,4.00',
            'Interests' => 'nullable|string|max:1000',
            'Roles' => 'nullable|string|max:1000',
            'Work_Experience' => 'nullable|string|max:1000',
            'picture_url' => 'nullable|string|max:255|url',
            'cv_resume_url' => 'nullable|string|max:255|url',
            'linkedin_url' => 'nullable|string|max:255|url',
            'github_url' => 'nullable|string|max:255|url',
            'medium_url' => 'nullable|string|max:255|url',
            'portfolio_url' => 'nullable|string|max:255|url',
            'whatsapp_url' => 'nullable|string|max:255|url',
            'GPA_1' => 'nullable|numeric|between:0,4.00',
            'Fail_1' => 'nullable|integer|min:0',
            'GPA_2' => 'nullable|numeric|between:0,4.00',
            'Fail_2' => 'nullable|integer|min:0',
            'GPA_3' => 'nullable|numeric|between:0,4.00',
            'Fail_3' => 'nullable|integer|min:0',
            'GPA_4' => 'nullable|numeric|between:0,4.00',
            'Fail_4' => 'nullable|integer|min:0',
            'GPA_5' => 'nullable|numeric|between:0,4.00',
            'Fail_5' => 'nullable|integer|min:0',
            'GPA_6' => 'nullable|numeric|between:0,4.00',
            'Fail_6' => 'nullable|integer|min:0',
            'GPA_7' => 'nullable|numeric|between:0,4.00',
            'Fail_7' => 'nullable|integer|min:0',
            'GPA_8' => 'nullable|numeric|between:0,4.00',
            'Fail_8' => 'nullable|integer|min:0',
        ], [
            'Roll_No.regex' => 'Roll number must be in the format ;CPE-XX-XX',
            'Roll_No.unique' => 'This Roll Number is already registered',
            'email.email' => 'Please provide a valid email address',
            '*.url' => 'Please provide a valid URL',
            'Current_Semester.between' => 'Semester must be between 1 and 8',
            'CGPA.between' => 'CGPA must be between 0 and 4.00',
            '*.between' => 'GPA must be between 0 and 4.00',
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

        // Check if Roll_No already exists
        $existingStudent = Student::where('Roll_No', $validated['Roll_No'])->first();

        if ($existingStudent) {
            // If Roll_No exists, call editProfile function
            return $this->editProfile($request, Roll_No: $existingStudent->Roll_No);
        }

        // If Roll_No doesn't exist, create new student
        Student::create([
            'Name' => $validated['Name'],
            'Roll_No' => $validated['Roll_No'],
            'Session' => $validated['Session'],
            'Current_Semester' => $validated['Current_Semester'],
            'CGPA' => $request->CGPA ? $validated['CGPA'] : NULL,
            'Interests' => $request->Interests ? $validated['Interests'] : "",
            'Roles' => $request->Roles ? $validated['Roles'] : "",
            'Work_Experience' => $request->Work_Experience ? $validated['Work_Experience'] : "",
            'picture_url' => $request->picture_url ? $validated['picture_url'] : "",
            'cv_resume_url' => $request->cv_resume_url ? $validated['cv_resume_url'] : "",
            'email' => $validated['email'],
            'linkedin_url' => $request->linkedin_url ? $validated['linkedin_url'] : "",
            'github_url' => $request->github_url ? $validated['github_url'] : "",
            'medium_url' => $request->medium_url ? $validated['medium_url'] : "",
            'portfolio_url' => $request->portfolio_url ? $validated['portfolio_url'] : "",
            'whatsapp_url' => $request->whatsapp_url ? $validated['whatsapp_url'] : "",
            'GPA_1' => $request->GPA_1 ? $validated['GPA_1'] : NULL,
            'Fail_1' => $request->Fail_1 ? $validated['Fail_1'] : "",
            'GPA_2' => $request->GPA_2 ? $validated['GPA_2'] : NULL,
            'Fail_2' => $request->Fail_2 ? $validated['Fail_2'] : "",
            'GPA_3' => $request->GPA_3 ? $validated['GPA_3'] : NULL,
            'Fail_3' => $request->Fail_3 ? $validated['Fail_3'] : "",
            'GPA_4' => $request->GPA_4 ? $validated['GPA_4'] : NULL,
            'Fail_4' => $request->Fail_4 ? $validated['Fail_4'] : "",
            'GPA_5' => $request->GPA_5 ? $validated['GPA_5'] : NULL,
            'Fail_5' => $request->Fail_5 ? $validated['Fail_5'] : "",
            'GPA_6' => $request->GPA_6 ? $validated['GPA_6'] : NULL,
            'Fail_6' => $request->Fail_6 ? $validated['Fail_6'] : "",
            'GPA_7' => $request->GPA_7 ? $validated['GPA_7'] :NULL,
            'Fail_7' => $request->Fail_7 ? $validated['Fail_7'] : "",
            'GPA_8' => $request->GPA_8 ? $validated['GPA_8'] : NULL,
            'Fail_8' => $request->Fail_8 ? $validated['Fail_8'] : "",
        ]);

        return redirect()->back()
            ->with('success', 'Student added successfully!');
    }
}
