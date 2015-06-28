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

if (Session::has('isAdmin')) {
	Config::set('auth.model', 'Admin');
} else {
	Config::set('auth.model', 'User');
}

// Login Admin Handler
Route::get('dashboard', array('uses' => 'LoginAdminController@showLogin'));
Route::post('dashboard', array('uses' => 'LoginAdminController@doLogin'));
Route::get('dashboard/logout', array('uses' => 'LoginAdminController@doLogout'));

// Login User Handler
Route::get('login', array('uses' => 'LoginUserController@showLogin'));
Route::post('login', array('uses' => 'LoginUserController@doLogin'));
Route::get('logout', array('uses' => 'LoginUserController@doLogout'));

Route::get('/', function()
{
	return View::make('index');
});

Route::get('test', function()
{
	return View::make('test');
});

Route::get('user', array('before' => 'auth'), function()
{
	return View::make('test');
});

Route::group(array('prefix' => 'dashboard', 'before' => 'auth'), function()
{
	Route::resource('kelurahan', 'KelurahanController');
});
