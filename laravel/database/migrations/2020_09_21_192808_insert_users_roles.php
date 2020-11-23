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
            'role' => 'administrator',
            'first_name' => 'João',
            'last_name' => 'da Silva',
            'genre' => 'male',
            'came_from' => 'employee',
            'newsletter' => 1,
            'appointment' => true,
            'store' => true,
            'blog' => true,
            'document' => '12345678900',
            'email' => 'admin@pride.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'cell' => '21999889944',
            'status' => 1
        ]);

        // Perfil de médico
        DB::table('users')->insert([
            'role' => 'doctor',
            'first_name' => 'Ana Maria',
            'last_name' => 'Ferrari',
            'genre' => 'female',
            'came_from' => 'employee',
            'newsletter' => 1,
            'appointment' => true,
            'blog' => true,
            'document' => '12345678901',
            'email' => 'medico@pride.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'cell' => '21999889945',
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
