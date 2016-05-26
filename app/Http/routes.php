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

Route::group(['middleware' => ['web']], function () {
    // Put all your routes inside here.


});


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

Route::post('ad', 'AdController@store');

Route::get('editProfile', 'UserController@getAccount');
Route::post('editProfile', 'UserController@postSaveAccount');

Route::get('account/edit', function() {
	return view('auth/editAccount');
});


//Dab Easter Egg
Route::get('/dab', function () {
    return view('dab');
});

Route::get('account', function () {
    return view('account');
});

Route::get('ad', function(){
    return view('ad');
});




Route::auth();

Route::get('/myAd', 'HomeController@index');