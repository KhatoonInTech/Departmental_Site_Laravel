<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResultAnnoucement extends Model
{
   protected $table = "result_annoucement";
   protected $fillable = [
    'Faculty_Name',
    'Faculty_ID',
    'Course_Title',
    'Course_Code',
    'Semester',
    'Session',
    'Total_Marks',
    'assignment_Type',
    'Remarks',
    'ResultFile_url',
    'PostContent',
    'Status',
   ];

   
   public function faculty()
   {
       return $this->belongsTo(Faculty::class);
   }
}
