<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeeChallan extends Model
{
    protected $table = 'challan'; // Specify the table name

    protected $fillable = [
       'Name',
       'fatherName',
       'CNIC',
        'ID',
        'Roll_No',
        'Reg_No',
        'Session',
       
        'Admission_Challan_Draft',
        'Admission_Challan_Paid',
        'Admission_Challan_Status',
        'Semester_1_Draft',
        'Semester_1_Paid',
        'Semester_1_Status',
        'Semester_2_Draft',
        'Semester_2_Paid',
        'Semester_2_Status',

        'Semester_3_Draft',
        'Semester_3_Paid',
        'Semester_3_Status',

        'Semester_4_Draft',
        'Semester_4_Paid',
        'Semester_4_Status',

        'Semester_5_Draft',
        'Semester_5_Paid',
        'Semester_5_Status',

        'Semester_6_Draft',
        'Semester_6_Paid',
        'Semester_6_Status',

        'Semester_7_Draft',
        'Semester_7_Paid',
        'Semester_7_Status',

        'Semester_8_Draft',
        'Semester_8_Paid',
        'Semester_8_Status',



    ];
}
