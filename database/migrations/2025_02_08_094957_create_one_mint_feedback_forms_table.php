<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOneMintFeedbackFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('one_mint_feedback_forms', function (Blueprint $table) {
            $table->id();
            $table->string('course');
            $table->string('batch_no');
            $table->string('name')->nullable();
            $table->date('session_date');
            $table->string('email');
            $table->string('session_time');
            $table->string('topics_relevance');
            $table->string('content_clarity');
            $table->string('facilities_provided');
            $table->string('training_success');
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
        Schema::dropIfExists('one_mint_feedback_forms');
    }
}
