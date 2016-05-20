<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/', function () {
    return view('home');
});

Route::get('auth/login', function () {
    return view('login');
});

Route::get('auth/register', function () {
    return view('register');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');





//Dab Easter Egg
Route::get('/dab', function () {
    return view('dab');
});

Route::get('account', function () {
    return view('account');
});

Route::auth();

Route::get('/home', 'HomeController@index');
