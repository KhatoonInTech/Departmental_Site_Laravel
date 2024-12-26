<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Faculty
{
    protected $table = 'faculty'; // Specify the table name

    protected $fillable = [
        'Name', 
        'ROLE',
        'Faculty_ID',
        'Position', 
        'Qualification', 
        'Research Interests', 
        'Other_Information', 
        'picture_url', 
        'cv_resume_url', 
        'email', 
        'linkedin_url', 
        'facebook_url', 
        'twitter_url', 
        'google_scholar_url', 
        'researchgate_url', 
        'orcid_url'
    ];
}
