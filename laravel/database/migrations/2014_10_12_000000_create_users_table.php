<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('perfil');
            $table->string('is_active')->default('sim');

            $table->string('cpf')->unique();
            $table->string('crm')->nullable()->unique();

            $table->string('first_name');
            $table->string('last_name');

            $table->string('phone');
            $table->string('alternate_phone')->nullable();
            
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            
            $table->string('birth')->nullable();
            $table->string('gender')->nullable();
            
            $table->string('came_from')->nullable();
            $table->string('newsletter')->nullable();

            $table->text('obs')->nullable();
            
            $table->string('password');

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
