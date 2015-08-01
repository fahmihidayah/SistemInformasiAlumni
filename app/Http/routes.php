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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// test url
Route::get('/test_login', 'TestController@test_login');

Route::get('/test_register', 'TestController@test_register');

// guest url

Route::get('/login', 'GuestController@get_login');

Route::get('/register', 'GuestController@get_register');
Route::post('/post_register', 'GuestController@post_register');


// api url

Route::get('/test_api', 'ApiController@test_api');

Route::post('/post_test_api', 'ApiController@test_post_api');