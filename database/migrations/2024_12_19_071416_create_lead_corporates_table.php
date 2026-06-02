<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadCorporatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_corporates', function (Blueprint $table) {
            $table->id();
            $table->string('training_program_name')->nullable();
            $table->string('organization_name')->nullable();
            $table->integer('approx_nominations')->nullable();
            $table->string('focal_contact_name')->nullable();
            $table->string('focal_contact_number')->nullable();
            $table->string('focal_contact_email')->nullable();
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
        Schema::dropIfExists('lead_corporates');
    }
}
