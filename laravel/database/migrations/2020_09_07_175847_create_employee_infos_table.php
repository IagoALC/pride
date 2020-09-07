<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user');
            $table->string('perfil');

            $table->string('cpf')->unique();
            $table->string('crm')->nullable()->unique();

            $table->string('birth');
            $table->string('gender');

            $table->string('phone');
            $table->string('alternate_phone')->nullable();

            $table->boolean('is_active')->default(0);
            $table->timestamps();

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
        Schema::dropIfExists('employee_infos');
    }
}
