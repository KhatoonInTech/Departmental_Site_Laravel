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
        Schema::create('faculty', function (Blueprint $table) {
            $table->id();
           
            $table->string('Name');
            $table->string('ROLE');
            $table->string('Faculty_ID')->unique();

            $table->string('Position');
            $table->string('Qualification');
            $table->string('Research Interests');
            $table->string('Other_Information');

            // Picture
            $table->string('picture_url')->nullable();

            // CV/Resume
            $table->string('cv_resume_url')->nullable();

            // Socials
            $table->string('email')->unique();
            $table->string('linkedin_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('google_scholar_url')->nullable();
            $table->string('researchgate_url')->nullable();
            $table->string('orcid_url')->nullable();

            $table->timestamps(); // This will add both 'created_at' and 'updated_at'
            $table->text('Announcement')->nullable();

    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculty');
    }
};
