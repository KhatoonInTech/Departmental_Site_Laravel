<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('challan', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('fatherName');
            $table->string('CNIC')->unique(); // Assuming CNIC should be unique
            $table->string('Roll_No')->unique();
            $table->string('Reg_No')->unique();
            $table->string('Session')->nullable();

            // PDF links for admission and semesters
            $table->string('Admission_Challan_Draft')->nullable();
            $table->string('Admission_Challan_Paid')->nullable();
            $table->string('Admission_Challan_Status')->default('Pending');

            $table->string('Semester_1_Draft')->nullable();
            $table->string('Semester_1_Paid')->nullable();
            $table->string('Semester_1_Status')->default('Pending');

            $table->string('Semester_2_Draft')->nullable();
            $table->string('Semester_2_Paid')->nullable();
            $table->string('Semester_2_Status')->default('Pending');

            $table->string('Semester_3_Draft')->nullable();
            $table->string('Semester_3_Paid')->nullable();
            $table->string('Semester_3_Status')->default('Pending');

            $table->string('Semester_4_Draft')->nullable();
            $table->string('Semester_4_Paid')->nullable();
            $table->string('Semester_4_Status')->default('Pending');

            $table->string('Semester_5_Draft')->nullable();
            $table->string('Semester_5_Paid')->nullable();
            $table->string('Semester_5_Status')->default('Pending');

            $table->string('Semester_6_Draft')->nullable();
            $table->string('Semester_6_Paid')->nullable();
            $table->string('Semester_6_Status')->default('Pending');

            $table->string('Semester_7_Draft')->nullable();
            $table->string('Semester_7_Paid')->nullable();
            $table->string('Semester_7_Status')->default('Pending');

            $table->string('Semester_8_Draft')->nullable();
            $table->string('Semester_8_Paid')->nullable();
            $table->string('Semester_8_Status')->default('Pending');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('challan');
    }
};
