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
	return View::make('index');
});

Route::get('/login', function()
{
  return View::make('login');
});

Route::get('/dashboard', function ()
{
  return View::make('admin.admin.table');
});

Route::get('/form', function ()
{
  return View::make('admin.form');
});

Route::get('/table', function ()
{
  return View::make('admin.table');
});