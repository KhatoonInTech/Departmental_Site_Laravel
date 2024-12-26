<?php

namespace App\Http\Controllers\Admin;
use App\Models\Admin;
use App\Models\Faculty;
use App\Models\Student;
use App\Models\Visitors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function viewData($ID)
    {
        $faculty = Faculty::where('Faculty_ID', $ID)->firstOrFail();
        $visitor = Visitors::count();
        $student = Student::count();
        $FAC = Faculty::count();
        $admin = Admin::where("ROLE", "admin")->count();
        return view('admin.viewData', compact('visitor', 'student', 'faculty', 'admin', 'FAC'));

    }

    public function STD_viewData($ID)
    {
        $faculty = Faculty::where('Faculty_ID', $ID)->firstOrFail();
        $student = Student::all();
        return view('admin.STD_viewData', compact('student', 'faculty'));

    }


    public function ADM_viewData($ID)
    {
        $faculty = Faculty::where('Faculty_ID', $ID)->firstOrFail();
        $admin = Faculty::where("ROLE", "admin")->get();
        return view('admin.ADM_viewData', compact('faculty', 'admin'));

    }
    public function FAC_viewData($ID)
    {
        $faculty = Faculty::where('Faculty_ID', $ID)->firstOrFail();
        $FAC = Faculty::all();
        return view('admin.FAC_viewData', compact('faculty', 'FAC'));

    }

    public function VIS_viewData($ID)
    {
        $faculty = Faculty::where('Faculty_ID', $ID)->firstOrFail();
        $visitor = Visitors::all();
        return view('admin.VIS_viewData', compact('visitor', 'faculty'));

    }

}
