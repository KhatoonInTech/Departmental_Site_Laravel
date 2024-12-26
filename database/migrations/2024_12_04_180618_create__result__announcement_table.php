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
        Schema::create('result_annoucement', function (Blueprint $table) {
            $table->id();
            $table->string('Faculty_Name');
            $table->string('Faculty_ID');
            $table->string('Course_Title');
            $table->string('Course_Code');
            $table->integer('Semester');
            $table->string('Session');
            $table->integer('Total_Marks');
            $table->string('assignment_Type');
            $table->string('Remarks');
            $table->string('ResultFile_url');
            $table->text('PostContent');
            $table->string('Status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_annoucement');
    }
};
