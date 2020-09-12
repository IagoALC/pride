<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::group(['prefix' => '/auth', 'as' => 'auth.', 'middleware' => 'guest'], function(){
    Route::get('/login', 'Dashboard\DashboardController@loginForm')->name('login');

    Route::get('/signup', 'Dashboard\DashboardController@registerForm')->name('register');
    Route::get('/checkmail', 'Dashboard\DashboardController@checkMail')->name('checkMail');
    Route::get('/verification', 'Dashboard\DashboardController@verification')->name('verification');

    Route::get('/forgot', 'Dashboard\DashboardController@forgotForm')->name('forgot');
    Route::get('/reset/{token}', 'Dashboard\DashboardController@resetForm')->name('reset');
});

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/painel', function(){
    return view('admin.index');
});
