<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'Website\WebsiteController@home')->name('website.home');
Route::post('/consulta/reserva', 'Website\WebsiteController@consultaStore')->name('website.consultas.store');
Route::get('/consulta/confirmar', 'Website\WebsiteController@consultasConfirmar')->name('website.consultas.confirmar');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::group(['as' => 'auth.', 'namespace' => 'Auth', 'middleware' => 'guest', ], function () {
    Route::get('/entrar', 'AuthController@entrar')->name('entrar');
    Route::post('/entrar', 'AuthController@entrarPost')->name('entrarPost');

    Route::get('/cadastrar', 'AuthController@cadastrar')->name('cadastrar');
    Route::post('/cadastrar', 'AuthController@cadastrarPost')->name('cadastrar.post');
    Route::get('/cadastrar/sucesso', 'AuthController@cadastrarSucesso')->name('cadastrar.sucesso');
});

/*
|--------------------------------------------------------------------------
| Protected Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => '/dashboard', 'as' => 'dashboard.', 'namespace' => 'Dashboard', 'middleware' => ['auth']], function () {
    // consultas
    Route::put('consultas/{consulta}/cancelar', 'ConsultasController@cancelar')->name('consultas.cancelar');
    Route::put('consultas/{consulta}/realizada', 'ConsultasController@realizada')->name('consultas.realizada');
    Route::resource('consultas', 'ConsultasController');

    // usuários
    Route::resource('usuarios', 'UsuariosController');

    // perfil
    Route::put('perfil/{perfil}/desativar', 'PerfilController@desativarConta')->name('perfil.desativar');
    Route::put('perfil/{perfil}/reativar', 'PerfilController@reativarConta')->name('perfil.reativar');
    Route::resource('perfil', 'PerfilController');
});

/*
|--------------------------------------------------------------------------
| Logout Routes
|--------------------------------------------------------------------------
*/
Route::get('/logout', 'Auth\AuthController@logout')->name('logout')->middleware('auth');