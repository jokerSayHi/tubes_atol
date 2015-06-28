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
} elseif (Session::has('isUser')) {
	Config::set('auth.model', 'User');
}

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/test', function()
{
	return View::make('test');
});

Route::get('login', array('uses'	=>	'LoginUserController@showLogin'));
Route::post('login', array('uses'	=>	'LoginUserController@doLogin'));
Route::get('logout', array('uses'	=>	'LoginUserController@doLogout'));

Route::get('admin', array('uses'	=>	'LoginAdminController@showLogin'));
Route::post('admin', array('uses'	=>	'LoginAdminController@doLogin'));
Route::get('admin/logout', array('uses'	=>	'LoginAdminController@doLogout'));


Route::get('/signup', function()
{
  return View::make('signup');
});

Route::get('/dashboard', function ()
{
  return View::make('admin.kelurahan.form');
});
Route::get('/table', function ()
{
  return View::make('admin.kelurahan.table');
});

Route::get('/edit', function ()
{
  return View::make('admin.kelurahan.edit');
});

Route::get('/form', function ()
{
  return View::make('admin.form');
});

Route::get('/admin', function ()
{
  return View::make('loginadmin');
});


