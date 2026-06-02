<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('cnic')->nullable();
            $table->string('gender')->nullable();
            $table->string('present_address')->nullable();
            $table->string('domicile')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('whatsapp_no')->nullable();
            $table->string('email')->nullable();
            $table->string('age')->nullable();
            $table->string('present_district')->nullable();
            $table->string('city')->nullable();
            $table->text('trade_preference')->nullable();
            $table->string('last_education')->nullable();
            $table->enum('status', ['employed','unemployed'])->default('unemployed');
            $table->string('preferred_timing')->nullable();
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('project_registrations');
    }
}
