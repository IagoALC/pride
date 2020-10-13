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
Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => ['auth'], 'namespace' => 'Dashboard'], function () {
    //Dashboard Home
    Route::get('', 'DashboardController@home')->name('home');
    
    // My Profile
    Route::get('/minhaconta', 'UserController@myProfile')->name('myProfile');
    Route::put('/minhaconta/{user}', 'UserController@myProfileUpdate')->name('myProfile.update');

    // Blog
    Route::get('/blog/lixeira', 'PostController@trashed')->name('blog.trashed');
    Route::resource('blog', 'PostController');
});

/*
|--------------------------------------------------------------------------
| Logout Routes
|--------------------------------------------------------------------------
*/
Route::get('/logout', 'AuthController@logout')->name('logout')->middleware('auth');