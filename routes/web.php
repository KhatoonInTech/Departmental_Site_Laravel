<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyMembers;
use App\Http\Controllers\Authentication\PortalLoginController;
use App\Http\Controllers\Authentication\VisitorAuthController;
use App\Http\Controllers\Authentication\FacultyAuthController;
use App\Http\Controllers\Authentication\StudentAuthController;
use App\Http\Controllers\Student\ResultController;
use App\Http\Controllers\Faculty\FacultyResultController;
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Authentication\AdminAuthController;
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\FeeChallanController;

Route::middleware(['web'])->group(function () {

    Route::get('/challan', function () {
        return view('challan_template');
    });
    Route::get('/', function () {
        return view('welcome');
    })->name('index');

    // Routes For Visitor Authentication
    Route::get('/linkedin/authorize', [VisitorAuthController::class, 'LinkedIn_authorize'])->name('linkedin.authorize');
    Route::get('/linkedin/redirect', [VisitorAuthController::class, 'LinkedIn_handleCallback'])->name('/linkedin/redirect');
    Route::get('/google/authorize', [VisitorAuthController::class, 'Google_authorize'])->name('google.authorize');
    Route::get('/google/redirect', [VisitorAuthController::class, 'Google_handleCallback'])->name('/');
    Route::get('/welcome', function () {
        $signedup = session('signedup', false); // Retrieve $signedup from the session
        return view('welcome', ['signedup' => $signedup]);
    });
    Route::post('/visitor/edit/{email}', [VisitorAuthController::class, 'editProfile'])->name('visitor.data.edit');
    // PORTAL ROUTES

    Route::get('/TERMS', function () {
        return view('TERMS');
    })->name('Terms & Conditions');
    Route::get('/PRIVACY_POLICY', function () {
        return view('PRIVACY_POLICY');
    })->name('PRIVACY_POLICY');
    Route::get('/portalLogin', function () {
        return view('portalLogin');
    })->name('portalLogin');
    Route::post('/portalLogin/redirecting', [PortalLoginController::class, 'login'])->name('PortalLogin.post');

    // FACULTY ROUTES

    Route::prefix('faculty')->group(function () {
        Route::get('/{faculty_ID}', [FacultyAuthController::class, 'showProfile'])->name('faculty.profile');
        // Route::get('/{ID}/recover-account', [FacultyAuthController::class, 'resetCredentials'])->name('faculty.recover');
        Route::post('/{faculty_ID}/edit', [FacultyAuthController::class, 'editProfile'])->name('faculty.profile.edit');
        Route::post('/login', [FacultyAuthController::class, 'login'])->name('faculty.login');
        Route::redirect('/logout', '/')->name('faculty.logout');
        Route::get('/{faculty_ID}/result', [FacultyResultController::class, 'showResult'])->name('faculty.result');
        Route::post('/result/upload', [FacultyResultController::class, 'uploadResult'])->name('faculty.result.post');
        Route::get('/{ID}/live-announcements', [AnnouncementController::class, 'FAC_liveAnnouncements'])->name('FAC.liveannouncements');
        Route::delete('/{ID}/delete', [FacultyAuthController::class, 'destroy'])->name('faculty.delete');
        Route::get('/{ID}/pending-announcements', [AnnouncementController::class, 'FAC_pendingAnnouncements'])->name('FAC.pendingannouncements');

    });

    //ADMIN ROUTES

    Route::prefix('admin')->group(function () {
        Route::get('/{faculty_ID}', [AdminAuthController::class, 'showProfile'])->name('admin.profile');
        Route::post('/{faculty_ID}/edit', [AdminAuthController::class, 'editProfile'])->name('admin.profile.edit');
        Route::get('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
        Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login');
        Route::delete('/{ID}/delete', [AdminAuthController::class, 'destroy'])->name('admin.delete');

        Route::get('/{ID}/pending-announcements', [AnnouncementController::class, 'pendingAnnouncements'])->name('admin.pendingannouncements');
        Route::post('/post-announcement/{id}', [AnnouncementController::class, 'postAnnouncement'])->name('admin.postannouncement');
        Route::get('/{ID}/live-announcements', [AnnouncementController::class, 'ADM_liveAnnouncements'])->name('ADM.liveannouncements');
        Route::post('/create-announcement', [AnnouncementController::class, 'createAnnouncement'])->name('admin.createannouncement');
        Route::put('/update-announcement', [AnnouncementController::class, 'updateAnnouncement'])->name('admin.updateannouncement');
        Route::delete('/delete-announcement/{id}', [AnnouncementController::class, 'deleteAnnouncement'])->name('admin.deleteannouncement');
        Route::get('/{ID}/view-data', [DataController::class, 'viewData'])->name('admin.viewData');
        Route::get('/{ID}/student-data', [DataController::class, 'STD_viewData'])->name('std.viewData');
        Route::get('/{ID}/faculty-data', [DataController::class, 'FAC_viewData'])->name('fac.viewData');
        Route::get('/{ID}/admin-data', [DataController::class, 'ADM_viewData'])->name('adm.viewData');
        Route::get('/{ID}/visitor-data', [DataController::class, 'VIS_viewData'])->name('vis.viewData');
        Route::post('/add/admin', [AdminAuthController::class, 'addData'])->name('admin.addData');
        Route::post('/add/faculty', [FacultyAuthController::class, 'addData'])->name('faculty.addData');
        Route::post('/add/student/', [StudentAuthController::class, 'addData'])->name('student.addData');

        Route::get('/{ID}/content/edit', [ContentController::class, 'edit'])->name('admin.contentEdit');
        Route::get('/content/get', [ContentController::class, 'getContent'])->name('admin.content.get');
        Route::put('content/update', [ContentController::class, 'update'])->name('admin.content.update');

        Route::get('{ID}/fee-management', [FeeChallanController::class, 'index'])->name('fee.management');
        Route::post('/challan/generate', [FeeChallanController::class, 'generate'])->name('challan.generate');
        Route::get('/challan/view/{filename}', [FeeChallanController::class, 'view'])->name('challan.view');
        Route::post('/challan/verify', [FeeChallanController::class, 'verifyChallan'])->name('challan.verify');
    });

    Route::delete('/challan/delete', [FeeChallanController::class, 'delete'])->name('challan.delete');


    // In Student Routes
    Route::prefix('student')->group(function () {
        Route::post('/login', [StudentAuthController::class, 'login'])->name('student.login');
        Route::get('/logout', [StudentAuthController::class, 'logout'])->name('student.logout');
        Route::get('/{Roll_No}', [StudentAuthController::class, 'showProfile'])->name('student.profile');
        Route::post('/{Roll_No}/edit', [StudentAuthController::class, 'editProfile'])->name('student.profile.edit');
        Route::get('/{ID}/live-announcements', [AnnouncementController::class, 'STD_liveAnnouncements'])->name('STD.liveannouncements');
        Route::get('{Roll_No}/result/{Semester}', [ResultController::class, 'showResult'])->name('student.result');
        Route::delete('/{ID}/delete', [StudentAuthController::class, 'destroy'])->name('student.delete');
        Route::get('/{ID}/fee-record', [ FeeChallanController::class, 'show'])->name('fee.record');
    
     
        // Receipt Upload
        Route::post('/upload-receipt', [ FeeChallanController::class, 'uploadReceipt'])
            ->name('upload.receipt');
        

    });



    // Routes for visitorOnly views
    Route::get(
        '/about-university',
        [ContentController::class, 'aboutUni']
    )->name('uni-vision-mission');
    Route::get('/about-cpe', [ContentController::class, 'aboutCPE'])->name('about-cpe');
    Route::get('/dep-vision', function () {
        return view('visitorOnly.department.depVision');
    })->name('dep-vision-mission');
    Route::get('/admin-info', [FacultyMembers::class, 'showAdminInfo'])->name('administration');
    Route::get('/faculty-info', [FacultyMembers::class, 'showFacultyInfo'])->name('faculty');
    Route::get('/admission-schedule', function () {
        return view('visitorOnly.department.admSchedule');
    })->name('admSchedule');
    Route::get('/semester-schedule', function () {
        return view('visitorOnly.department.semschedule');
    })->name('semSchedule');
    Route::get('/Programs', [ContentController::class, 'showPrograms'])->name('programs-offered');
    Route::get('/logout', function () {
        return view('logout');
    })->name('logout');


});