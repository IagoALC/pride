<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');

            $table->string('code');
            $table->unsignedInteger('patient_id');
            $table->unsignedInteger('doctor_id');

            $table->string('service_id');

            $table->date('day')->nullable();
            $table->string('time')->nullable();

            $table->string('status')->default('agendado'); // agendado, remarcado, realizado, cancelado
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
        Schema::dropIfExists('appointments');
    }
}
