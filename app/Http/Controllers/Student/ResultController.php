<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
class ResultController extends Controller
{
    public function showResult($Roll_No,$Semester)
    {
        $student = Student::where('Roll_No', $Roll_No)->firstOrFail();

        if($Semester==1){
           return view('student.result1', compact('student'));
        }
        elseif($Semester==2) {
           return view('student.result2', compact('student'));
        }

        else{
            return view('student.profile', compact('student'))
            ->with('Still Pending');

        }   

    }
}
