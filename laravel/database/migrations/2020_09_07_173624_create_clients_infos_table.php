<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user');
            $table->string('cpf')->unique();
            $table->string('birth')->nullable();
            $table->string('phone');
            $table->string('alternate_phone')->nullable();
            $table->string('came_from')->default('site');
            $table->string('newsletter')->default('não');

            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients_infos');
    }
}
