<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOneMinuteFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('one_minute_feedback', function (Blueprint $table) {
            $table->id();
            $table->string('training_name');
            $table->string('email');
            $table->string('batch_no');
            $table->string('name')->nullable();
            $table->date('date_of_session')->nullable();

            $table->enum('session_on_time', ['Agree', 'Neutral', 'Disagree'])->nullable();
            $table->enum('topics_relevant_sequence', ['Agree', 'Neutral', 'Disagree'])->nullable();
            $table->enum('clarity_of_content', ['Agree', 'Neutral', 'Disagree'])->nullable();
            $table->enum('facilities_provided', ['Agree', 'Neutral', 'Disagree'])->nullable();
            $table->enum('training_successful', ['Agree', 'Neutral', 'Disagree'])->nullable();

            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('one_minute_feedback');
    }
}
