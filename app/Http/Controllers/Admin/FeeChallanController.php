<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeeChallan;
use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
class FeeChallanController extends Controller
{


    public function __construct()
    {

        if (!Storage::exists('public/challans')) {
            Storage::makeDirectory('public/challans');
        }
    }

    /**
     * Display the fee management page with student data
     */
    public function index($ID)
    {
        $faculty = Faculty::where('Faculty_ID', $ID)->firstOrFail();
        $student = FeeChallan::all();
        return view('admin.feeManagement', compact('student', 'faculty'));
    }
    /**
     * Generate a new challan
     */
    public function generate(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'cnic' => 'required',
            'name' => 'required',
            'father_name' => 'nullable',
            'roll_no' => 'required',
            'reg_no' => 'required',
            'session' => 'required',
            'semester' => 'required',
            'fee_amount' => 'required|numeric',
            'fee_words' => 'required|string',
            'issue_date' => 'required|date',
            'deadline' => 'required|date|after:issue_date',
        ]);

        try {
            $student = FeeChallan::findOrFail($request->student_id);

            // Generate PDF using the provided data
            $pdf = Pdf::loadView('challan_template', [
                'name' => $request->name,
                'father_name' => $request->father_name,
                'cnic' => $request->cnic,
                'roll_no' => $request->roll_no,
                'reg_no' => $request->reg_no,
                'session' => $request->session,
                'semester' => $request->semester,
                'fee_amount' => $request->fee_amount,
                'fee_words' => $request->fee_words,
                'issue_date' => $request->issue_date,
                'deadline' => $request->deadline,
            ])->setOption('page-size', 'A4')
                ->setOption('orientation', 'landscape')
                ->setOption('margin-top', '10')
                ->setOption('margin-right', '10')
                ->setOption('margin-bottom', '10')
                ->setOption('margin-left', '10')
                ->setOption('viewport-size', '1280x1024');
            $filename = 'challans/' . $request->roll_no . '_' .
                ($request->semester === 'admission' ? 'admission' : 'semester_' . $request->semester) .
                '_' . time() . '.pdf';

            $filePath = storage_path('app/public/' . $filename);
            $pdf->save($filePath);
            Log::info("Attempted to save PDF at: $filePath");

            if (file_exists($filePath)) {
                Log::info("File successfully created at: $filePath");
            } else {
                Log::error("Failed to create file at: $filePath");
            }
            if ($request->semester === 'admission') {
                $student->Admission_Challan_Draft = Storage::url($filename);
            } else {
                $fieldName = 'Semester_' . $request->semester . '_Draft';
                $student->$fieldName = Storage::url($filename);
            }

            $student->save();

            return redirect()->back()->with('success', 'Challan generated successfully');
        } catch (\Exception $e) {
            Log::error('Challan generation error: ' . $e->getMessage());
            return dd('Error:', $e->getMessage(), $e->getTraceAsString());
        }

    }
    /**
     * Delete a challan
     */
    public function delete(Request $request)
    {

        $request->validate([
            'student_id' => 'required',
            'semester' => 'required'
        ]);

        try {
            $student = FeeChallan::findOrFail($request->student_id);

            // Determine which challan field to clear
            if ($request->semester === 'admission') {
                $draftField = 'Admission_Challan_Draft';
            } else {
                $draftField = 'Semester_' . $request->semester . '_Draft';
            }

            // Get the file paths
            $draftPath = $student->$draftField;

            // Delete the files if they exist
            if (Storage::exists('public/' . $draftPath)) {
                Storage::delete('public/' . $draftPath);
            }


            // Clear the database fields
            $student->$draftField = null;
            $student->save();

            return redirect()->back()->with('success', 'Challan deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete challan: ' . $e->getMessage());
        }
    }

    /**
     * View stored challan
     */
    public function view($filename)
    {
        $path = storage_path('app/public/challans/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }
    public function verifyChallan(Request $request)
{
    $request->validate([
        'student_id' => 'required',
        'field_name' => 'required',
        'status' => 'required|in:Approved,Rejected'
    ]);

    try {
        $student = FeeChallan::findOrFail($request->student_id);
        
        // Construct the status field name
        $statusField = $request->field_name;
        
        // Update the status
        $student->$statusField = $request->status;
        $student->save();

        return redirect()->back()->with('success', 'Challan has been ' . strtolower($request->status));
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Failed to verify challan: ' . $e->getMessage());
    }
}



//for Student Side
public function show($ID)
{
    $student = Student::where('Roll_No', $ID)->firstOrFail();

    $std = FeeChallan::where('Roll_No', $ID)->firstOrFail();
    return view('student.feeRecord', compact('student','std'));
}


/**
 * Upload fee receipt
 */

 public function uploadReceipt(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:jpeg,png,pdf|max:2048',
            'Roll_No' => 'required|string',
            'type' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Find student by Roll No
        $student = FeeChallan::where('Roll_No', $request->Roll_No)->firstOrFail();
        
      

        $type = $request->type;
        
        // Check if challan exists and isn't already paid
        $draftField = "{$type}_Draft";
        $paidField = "{$type}_Paid";

        if (!$student->$draftField || $student->$paidField) {
            return redirect()->back()->withErrors(
                 'Invalid request or payment already processed'
            );
        }

        try {
            // Store the file
            $path = $request->file('file')->store("receipts/{$student->Roll_No}", 'public');
            
            // Update the record
            $student->$paidField = Storage::url($path); // Store the public URL
            $student->save();

            return redirect()->back()->with(
                'success' , 'Receipt uploaded successfully',
              
            );
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'status' => 'error',
                'message' => 'Failed to upload receipt'
            ], 500);
        }
    }
/**
 * Helper method to validate fee type
 */
private function validateFeeType($type)
{
    $validTypes = [
        'Admission',
        'Semester_1',
        'Semester_2',
        'Semester_3',
        'Semester_4',
        'Semester_5',
        'Semester_6',
        'Semester_7',
        'Semester_8'
    ];

    return in_array($type, $validTypes);
}
}