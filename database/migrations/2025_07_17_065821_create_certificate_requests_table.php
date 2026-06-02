<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_requests', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('course_name');
            $table->string('batch_number');

            $table->enum('delivery_mode', ['On-campus', 'Courier']);
            $table->string('delivery_option')->nullable(); // Only if Courier

            $table->string('payment_screenshot')->nullable(); // Path to uploaded screenshot

            $table->string('zc_gad')->nullable();
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
        Schema::dropIfExists('certificate_requests');
    }
}
