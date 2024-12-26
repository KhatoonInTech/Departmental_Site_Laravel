<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $table = 'student'; // Specify the table name

    protected $fillable = [
       'Name',
        'Roll_No',
        'Session',
        'Current_Semester',
        'CGPA',
        'Interests',
        'Roles',
        'Work_Experience',
        'picture_url',
        'cv_resume_url',
        'email',
        'linkedin_url',
        'github_url',
        'medium_url',
        'portfolio_url',
        'whatsapp_url',
        'GPA_1',
        'Fail_1',
        'GPA_2',
        'Fail_2',
        'GPA_3',
        'Fail_3',
        'GPA_4',
        'Fail_4',
        'GPA_5',
        'Fail_5',
        'GPA_6',
        'Fail_6',
        'GPA_7',
        'Fail_7',
        'GPA_8',
        'Fail_8',
    ];
}
