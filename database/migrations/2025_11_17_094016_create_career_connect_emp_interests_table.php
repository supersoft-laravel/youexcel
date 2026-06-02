<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerConnectEmpInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_connect_emp_interests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_connect_id')
              ->constrained('career_connects')
              ->cascadeOnDelete();
            $table->foreignId('candidate_id')
              ->constrained('career_connect_candidates')
              ->cascadeOnDelete();
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
        Schema::dropIfExists('career_connect_emp_interests');
    }
}
