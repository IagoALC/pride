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
            $table->string('role')->nullable()->default('client');
            
            /** data */
            $table->string('first_name');
            $table->string('last_name');
            $table->string('genre')->nullable()->default('unknow');
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('document')->unique();
            $table->string('document_secondary', 20)->nullable();
            $table->string('document_secondary_complement')->nullable();
            $table->string('cover')->nullable()->default('user/cover/default.png');
            $table->string('came_from')->nullable();
            $table->boolean('newsletter')->nullable();

            /** address */ /** OK */
            $table->string('zipcode')->nullable();
            $table->string('street')->nullable();
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();

            /** contact */ /** OK */
            $table->string('telephone')->nullable();
            $table->string('cell')->nullable();

            /** access */
            $table->boolean('appointment')->default(1);
            $table->boolean('blog')->default(0);
            $table->boolean('store')->default(0);

            /** email and password */ /** OK */
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            /** status */ /** OK */
            $table->boolean('status')->default(1);

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
