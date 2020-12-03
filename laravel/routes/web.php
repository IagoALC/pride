<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'Website\WebsiteController@home')->name('website.home');

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
    Route::get('/', 'DashboardController@consultas')->name('consultas.index');

    // serviços
    Route::get('/servicos', 'DashboardController@servicos')->name('servicos.index');

    // usuários
    Route::resource('usuarios', 'UsuariosController');

    // perfil
    Route::put('perfil/{perfil}/desativar', 'PerfilController@desativarConta')->name('perfil.desativar');
    Route::put('perfil/{perfil}/reativar', 'PerfilController@reativarConta')->name('perfil.reativar');
    Route::resource('perfil', 'PerfilController');
});

/*
|--------------------------------------------------------------------------
| Protected Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => ['auth'], 'namespace' => 'Dashboard'], function () {
    //Dashboard Home
    Route::get('', 'DashboardController@home')->name('home');
    
    // My Profile
    Route::get('/minhaconta', 'UserController@myProfile')->name('myProfile');
    Route::put('/minhaconta/{user}', 'UserController@myProfileUpdate')->name('myProfile.update');

    // Appointment
    Route::get('/consultas/historico', 'AppointmentController@historic')->name('consultas.historic');
    Route::post('/consultas/{consulta}/realizada', 'AppointmentController@done')->name('consultas.done');
    Route::resource('consultas', 'AppointmentController');

    // Blog
    Route::get('/blog/lixeira', 'PostController@trashed')->name('blog.trashed');
    Route::resource('blog', 'PostController');
});

/*
|--------------------------------------------------------------------------
| Logout Routes
|--------------------------------------------------------------------------
*/
Route::get('/logout', 'Auth\AuthController@logout')->name('logout')->middleware('auth');