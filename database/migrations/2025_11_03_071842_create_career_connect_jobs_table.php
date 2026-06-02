<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerConnectJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_connect_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('ref_no');
            $table->string('job_title')->nullable();
            $table->string('company_name')->nullable();
            $table->string('minimum_experience')->nullable();
            $table->text('expertise')->nullable();
            $table->date('deadline')->nullable();
            $table->enum('status', ['pending', 'approved', 'disapproved'])->default('pending');
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
        Schema::dropIfExists('career_connect_jobs');
    }
}
