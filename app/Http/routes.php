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
Route::get('/about', 'GuestController@get_about');
Route::get('/home_main', 'GuestController@get_home');
Route::get('/detail_profile', 'GuestController@get_detail_profile');
Route::get('/events', 'GuestController@get_events');
Route::get('/detail_event', 'GuestController@get_detail_event');
Route::get('/projects', 'GuestController@get_projects');
Route::get('/detail_project', 'GuestController@get_detail_project');
Route::get('/projects_depan', 'GuestController@get_projects_depan');
Route::get('/profile', 'GuestController@get_profile');

// api url

Route::get('/test_api', 'ApiController@test_api');

Route::post('/post_test_api', 'ApiController@test_post_api');