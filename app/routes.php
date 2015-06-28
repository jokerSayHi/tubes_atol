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

Route::get('/signup', function()
{
  return View::make('signup');
});

Route::get('/dashboard', function()
{
  return View::make('admin.admin.form');
});

Route::get('/form', function()
{
  return View::make('admin.form');
});

Route::get('/table', function()
{
  return View::make('admin.admin.table');
});

Route::get('/edit', function()
{
  return View::make('admin.admin.edit');
});
