<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware('auth')->get('/verify/fj/{username}', 'VerificationController@sendPM');
Route::middleware('auth')->get('/verify2/fj/{token}', 'VerificationController@verify');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@view')->name('home');
    Route::get('/test', 'VerificationController@test');
    Route::get('/join/{name}', 'GroupController@join');
});

Route::get('login', 'AuthController@redirect')->name('login');
Route::get('login/callback', 'AuthController@handleCallback');
Route::get('logout', 'AuthController@logout');