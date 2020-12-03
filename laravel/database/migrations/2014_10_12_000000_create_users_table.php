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

            /** role */
            $table->string('role')->nullable()->default('cliente');
            
            /** data */
            $table->string('first_name');
            $table->string('last_name');
            $table->string('document')->unique();

            $table->string('cover')->nullable()->default('user/cover/default.png');

            $table->boolean('newsletter')->nullable();

            /** contact */ /** OK */
            $table->string('telephone')->nullable();
            $table->string('cell')->unique();

            /** access */
            $table->boolean('appointment')->default(1);

            /** email and password */ /** OK */
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            /** status */ /** OK */
            $table->boolean('status')->nullable();

            /** date */ /** OK */
            $table->timestamps();
            $table->softDeletes();

            /** ip */ /** OK */
            $table->dateTime('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
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
