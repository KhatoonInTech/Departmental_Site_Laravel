<?php

namespace App\Http\Controllers;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyMembers extends Controller
{
    public function showFacultyInfo()
    {
        $facultyMembers = Faculty::all(); // or however you retrieve faculty members
        return view('visitorOnly.department.facultyinfo', compact('facultyMembers'));
    }

    public function showAdminInfo()
    {
        $facultyMembers = Faculty::all(); // or however you retrieve faculty members
        return view('visitorOnly.department.adminInfo', compact('facultyMembers'));
    }
}
