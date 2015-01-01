	<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
// Confide routes
Route::get( 'users/create',                 'UserController@create');
Route::post('users',                        'UserController@store');
Route::get( 'users/login',                  'UserController@login');
Route::post('users/login',                  'UserController@do_login');
Route::get( 'users/confirm/{code}',         'UserController@confirm');
Route::get( 'users/forgot_password',        'UserController@forgot_password');
Route::post('users/forgot_password',        'UserController@do_forgot_password');
Route::get( 'users/reset_password/{token}', 'UserController@reset_password');
Route::post('users/reset_password',         'UserController@do_reset_password');
Route::get( 'users/logout',                 'UserController@logout');
