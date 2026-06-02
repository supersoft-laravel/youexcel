<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerConnectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_connects', function (Blueprint $table) {
            $table->id();
            $table->enum('form_type', ['student_alumni', 'career_guidance', 'employer_partnership']);

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('linkedin_profile')->nullable();
            $table->string('github_profile')->nullable();
            $table->string('portfolio_link')->nullable();
            $table->string('resume_path')->nullable();
            $table->string('experience')->nullable();

            $table->json('preferred_opportunities')->nullable();
            $table->enum('association_with_youexcel', ['student', 'alumni', 'other'])->nullable();
            $table->json('expertise_areas')->nullable();

            $table->string('area_of_guidance')->nullable();
            $table->string('experience_level')->nullable();
            $table->string('preferred_mode')->nullable();
            $table->dateTime('preferred_datetime')->nullable();
            $table->text('additional_message')->nullable();

            $table->string('company_name')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('website_link')->nullable();
            $table->string('job_title')->nullable();
            $table->string('department')->nullable();
            $table->string('job_type')->nullable();
            $table->text('skills_required')->nullable();
            $table->string('stipend_range')->nullable();
            $table->string('location')->nullable();
            $table->text('job_description')->nullable();
            $table->date('application_deadline')->nullable();
            $table->string('job_details_upload')->nullable();
            $table->text('interested_jobs')->nullable();

            $table->enum('confirmation_agreement',['0', '1'])->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_connects');
    }
}
