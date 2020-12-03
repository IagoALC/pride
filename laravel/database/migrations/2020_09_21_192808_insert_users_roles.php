<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertUsersRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Administrador (acessa todas as funções)
        DB::table('users')->insert([
            'role' => 'admin',
            'first_name' => 'Alex',
            'last_name' => 'Carvalho',

            'newsletter' => 1,
            'appointment' => true,

            'document' => '12345678900',
            'email' => 'admin@pride.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'telephone' => '2122440900',
            'cell' => '21999889944',
            'status' => 1
        ]);

        // Perfil de médico
        DB::table('users')->insert([
            'role' => 'médico',
            'first_name' => 'Eliza',
            'last_name' => 'Maria',

            'newsletter' => 1,
            'appointment' => true,

            'document' => '12345678901',
            'email' => 'eliza.maria@pride.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'telephone' => '2122440901',
            'cell' => '21999889945',
            'status' => 1
        ]);

        DB::table('users')->insert([
            'role' => 'médico',
            'first_name' => 'Ricardo',
            'last_name' => 'Welch',

            'newsletter' => 1,
            'appointment' => true,

            'document' => '12345678902',
            'email' => 'ricardo.welch@pride.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'telephone' => '2122440902',
            'cell' => '21999889946',
            'status' => 1
        ]);

        DB::table('users')->insert([
            'role' => 'médico',
            'first_name' => 'Jessica',
            'last_name' => 'Leite',

            'newsletter' => 1,
            'appointment' => true,

            'document' => '12345678903',
            'email' => 'jessica.leite@pride.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'telephone' => '2122440903',
            'cell' => '21999889947',
            'status' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete('DELETE FROM users');
    }
}
