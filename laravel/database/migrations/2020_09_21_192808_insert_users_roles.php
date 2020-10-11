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
        // Admin
        DB::table('users')->insert([
            'first_name' => 'Administrador',
            'last_name' => 'Geral',
            'role' => 'Administrador',
            'appointment' => true,
            'store' => true,
            'blog' => true,
            'document' => '12345678900',
            'email' => 'admin@pride.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'cell' => '21999889944'
        ]);

        // Sem acesso
        DB::table('users')->insert([
            'first_name' => 'Sem',
            'last_name' => 'Acesso',
            'role' => 'Não Importa',
            'appointment' => false,
            'store' => false,
            'blog' => false,
            'document' => '12345678901',
            'email' => 'noaccess@pride.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'cell' => '21999889945'
        ]);

        // Consultas: cliente
        DB::table('users')->insert([
            'first_name' => 'Consultas',
            'last_name' => 'Cliente',
            'role' => 'Cliente',
            'appointment' => true,
            'store' => false,
            'blog' => false,
            'document' => '12345678902',
            'email' => 'cliente@pride.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'cell' => '21999889946'
        ]);

        // Consultas: médico
        DB::table('users')->insert([
            'first_name' => 'Consultas',
            'last_name' => 'Médico',
            'role' => 'Médico',
            'appointment' => true,
            'store' => false,
            'blog' => false,
            'document' => '12345678903',
            'email' => 'medico@pride.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'cell' => '21999889947'
        ]);

        // Consultas: atendente
        DB::table('users')->insert([
            'first_name' => 'Consultas',
            'last_name' => 'Atendente',
            'role' => 'Atendente',
            'appointment' => true,
            'store' => false,
            'blog' => false,
            'document' => '12345678904',
            'email' => 'atendente@pride.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'cell' => '21999889948'
        ]);

        // Blog: geral
        DB::table('users')->insert([
            'first_name' => 'Blog',
            'last_name' => 'Geral',
            'role' => 'Não Importa',
            'appointment' => false,
            'store' => false,
            'blog' => true,
            'document' => '12345678905',
            'email' => 'blog@pride.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'cell' => '21999889949'
        ]);

        // Store: geral
        DB::table('users')->insert([
            'first_name' => 'Store',
            'last_name' => 'Geral',
            'role' => 'Não Importa',
            'appointment' => false,
            'store' => true,
            'blog' => false,
            'document' => '12345678906',
            'email' => 'store@pride.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'cell' => '21999889950'
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
