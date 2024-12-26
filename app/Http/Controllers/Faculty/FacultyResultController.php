<?php

namespace App\Http\Controllers\Faculty;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Faculty;
use App\Models\ResultAnnoucement;

class FacultyResultController extends Controller
{
    public function showResult($faculty_ID)
    {
        $faculty = Faculty::where('Faculty_ID', $faculty_ID)->firstOrFail();
        if($faculty){
            Log::info('Result Upload Initiated for Faculty: ' . $faculty->Name);
            return view('faculty.results', ['faculty' => $faculty]);
        }
        Log::error('Result Upload Failed: Unauthorized Attempt');
        return redirect()->route('index')->with('error', 'Unauthorized Attempt');
    }

    public function uploadResult(Request $request)
    {
        $faculty = Faculty::where('Faculty_ID', $request->faculty_id)->firstOrFail();

        $validator = Validator::make($request->all(), [
            'courseName' => 'required|string|max:255',
            'courseCode' => 'required|string|max:20',
            'Semester'=>'required|numeric',
            'Session' => [
                'required', 
                'regex:/^\d{4}-\d{2}$/',
            ],
            'assessmentType' => 'required|in:Mid,Final,Quiz',
            'totalMarks' => 'required|numeric',
            'remarks' => 'required|string',
            'resultFile' => 'required|file|mimes:pdf,doc,docx|max:5120',
            'declaration' => 'required|accepted'
        ]);

        if ($validator->fails()) {
            Log::error('Result Upload Failed: Validation Errors - ' . json_encode($validator->errors()));
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }

        try {
            $file = $request->file('resultFile');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('results', $fileName, 'public');

            $result = ResultAnnoucement::create([
                'Faculty_Name' => $faculty->Name,
                'Faculty_ID' => $faculty->Faculty_ID,
                'Course_Title' => $request->courseName,
                'Course_Code' => $request->courseCode,
                'Semester' => $request->Semester,
                'Session' => $request->Session,
                'Total_Marks' => $request->totalMarks,
                'assignment_Type' => $request->assessmentType,
                'Remarks' => $request->remarks,
                'ResultFile_url' => 'storage/'.$filePath,
                'PostContent' => "<p><strong>Hey Students of Session: {$request->Session}, Attention Please!</strong>
                                    <br> We are pleased to announce that your results for {$request->assessmentType} of
                                    <strong>{$request->courseName} ({$request->courseCode})</strong>
                                    have been evaluated by <strong>{$faculty->Name}</strong>. <br><br>
                                    The grades have been finalized and are now available for your review. The Overall
                                    Result was <strong> {$request->remarks}</strong> as per evaluated and
                                    assessed by Our Respected Sir <strong>{$faculty->Name}</strong>
                                    " . ($filePath ? "
                                        <br>
                                        <hr> You can download your results here:
                                        <a class='text-info' style='margin-left:15px'
                                            href='http://127.0.0.1:8000/storage/{$filePath}' target='_blank'><strong>Download Here </strong></a>.
                                    " : "") . "
                                </p>",
                'Status' => 'Pending', // Added missing comma here
            ]);

            Log::info('Result Upload Succeeded. Result ID: ' . $result->id);
            return redirect()->back()->with('success', 'Result uploaded successfully');

        } catch (\Exception $e) {
            Log::error('Result Upload Error: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to upload result: ' . $e->getMessage());
        }
    }
}