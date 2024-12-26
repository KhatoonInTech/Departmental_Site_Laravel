<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Faculty;
use App\Models\ResultAnnoucement;
use Illuminate\Support\Facades\Log;

class AnnouncementController extends Controller
{
    // Show Pending Announcements
    public function pendingAnnouncements($ID)
    {
        $Role = 'admin';
        $faculty = Faculty::where('Faculty_ID', $ID)->firstOrFail();
        $pendingAnnouncements = ResultAnnoucement::where('Status', 'Pending')->get();
        return view('admin.pendingannoucements', compact('Role','pendingAnnouncements','faculty'));
    }

    // Update Status to Live
    public function postAnnouncement($id)
    {
        $announcement = ResultAnnoucement::findOrFail($id);
        $announcement->Status = 'Live';
        $announcement->save();

        return redirect()->back()->with('success', 'Announcement has been posted live!');
    }
    public function FAC_pendingAnnouncements( $ID)
    {
        $Role = 'FACULTY';
        $pendingAnnouncements = ResultAnnoucement::where('Status', 'Pending')
        ->where('Faculty_ID', $ID)
        ->get();
        $faculty = Faculty::where('Faculty_ID', $ID)->firstOrFail();
        return view('admin.pendingannoucements', compact('pendingAnnouncements', 'Role', 'faculty'));
    }
    // Show Live Announcements
    public function ADM_liveAnnouncements($ID)
    {
        $Role = 'admin';
        $liveAnnouncements = ResultAnnoucement::where('Status', 'Live')->get();
        $faculty = Faculty::where('Faculty_ID', $ID)->firstOrFail();
        return view('admin.liveannoucements', compact('liveAnnouncements', 'Role', 'faculty'));
    }

    public function FAC_liveAnnouncements( $ID)
    {
        $Role = 'FACULTY';
        $liveAnnouncements = ResultAnnoucement::where('Status', 'Live')->get();
        $faculty = Faculty::where('Faculty_ID', $ID)->firstOrFail();
        return view('admin.liveannoucements', compact('liveAnnouncements', 'Role', 'faculty'));
    }
    public function STD_liveAnnouncements($ID)
    {
        $Role = 'student';
        $liveAnnouncements = ResultAnnoucement::where('Status', 'Live')->get();
        $student = Student::where('Roll_No', $ID)->firstOrFail();
        return view('admin.liveannoucements', compact('liveAnnouncements', 'Role', 'student'));
    }


    public function createAnnouncement(Request $request)
    {
        $request->validate([
            'announcement_content' => 'required|string',
        ]);

        // Create a new announcement
        ResultAnnoucement::create([
            'Faculty_Name' => '',
            'Faculty_ID' => '',
            'Course_Title' => '',
            'Course_Code' => '',
            'Semester' => 0,
            'Session' => '',
            'Total_Marks' => 0,
            'assignment_Type' => '',
            'Remarks' => '',
            'ResultFile_url' => '',
            'PostContent' => $request->announcement_content,
            'Status' => 'Live',
        ]);

        return redirect()->back()->with('success', 'Announcement created and posted live!');
    }


    public function updateAnnouncement(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:result_annoucement,id',
            'content' => 'required|string',
        ]);

        $announcement = ResultAnnoucement::findOrFail($request->id);
        if(!$announcement){
            Log::info('announcement id not found: ');
            return redirect()->back()->with('error', 'Announcement not found.');
        }
        $announcement->PostContent = $request->content;
        $announcement->save();

        return redirect()->back()->with('success', 'Announcement updated successfully.');
    }

    public function deleteAnnouncement($id)
    {
        $announcement = ResultAnnoucement::findOrFail($id);
        $announcement->delete();

        return redirect()->back()->with('success', 'Announcement deleted successfully.');
    }

}
