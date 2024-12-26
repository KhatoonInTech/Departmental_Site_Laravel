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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Roll_No')->unique();
            $table->string('Session');
            $table->integer('Current_Semester');
            $table->float(column: 'CGPA')->nullable();
            $table->string('Interests')->nullable();
            $table->string('Roles')->nullable();
            $table->string('Work_Experience')->nullable();
             // Picture
             $table->string('picture_url')->nullable();

             // CV/Resume
             $table->string('cv_resume_url')->nullable();
 
             // Socials
             $table->string('email')->unique();
             $table->string('linkedin_url')->nullable();
             $table->string('github_url')->nullable();
             $table->string('medium_url')->nullable();
             $table->string('portfolio_url')->nullable();
             $table->string('whatsapp_url')->nullable();
          

            //Results
            $table->float('GPA_1')->nullable();           
            $table->string('Fail_1')->nullable();
            $table->float('GPA_2')->nullable();
            $table->string('Fail_2')->nullable();
            $table->float('GPA_3')->nullable();
            $table->string('Fail_3')->nullable();
            $table->float('GPA_4')->nullable();
            $table->string('Fail_4')->nullable();
            $table->float('GPA_5')->nullable();
            $table->string('Fail_5')->nullable();
            $table->float('GPA_6')->nullable();
            $table->string('Fail_6')->nullable();
            $table->float('GPA_7')->nullable();
            $table->string('Fail_7')->nullable();
            $table->float('GPA_8')->nullable();
            $table->string('Fail_8')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
