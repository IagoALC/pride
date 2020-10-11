<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'guest', 'prefix' => '/auth'], function () {
    Route::get('/login', 'AuthController@showLoginForm')->name('login');
    Route::post('/login', 'AuthController@loginDo')->name('login.do');
});

/*
|--------------------------------------------------------------------------
| Protected Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    //Dashboard Home
    Route::get('', 'Dashboard\DashboardController@home')->name('home');
    
    // My Profile
    Route::get('/minhaconta', 'Dashboard\UserController@myProfile')->name('myProfile');
    Route::put('/minhaconta/{user}', 'Dashboard\UserController@myProfileUpdate')->name('myProfile.update');

});

/*
|--------------------------------------------------------------------------
| Logout Routes
|--------------------------------------------------------------------------
*/
Route::get('/logout', 'AuthController@logout')->name('logout')->middleware('auth');