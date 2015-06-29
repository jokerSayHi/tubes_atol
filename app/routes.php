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
if (!Session::has('userType')) {
	Session::put('userType', 'user');
}

if (Session::get('userType') == 'admin') {
	Config::set('auth.model', 'Admin');
} elseif((Session::get('userType') == 'user')) {
	Config::set('auth.model', 'User');
}

$auth = Auth::createEloquentDriver();
Auth::setProvider($auth->getProvider());

Route::get('/', function()
{
	return View::make('index');
});

// Login Admin Handler
Route::get('dashboard', array('uses' => 'LoginAdminController@showLogin'));
Route::post('dashboard', array('uses' => 'LoginAdminController@doLogin'));
Route::get('dashboard/logout', array('uses' => 'LoginAdminController@doLogout'));

// Login User Handler
Route::get('login', array('uses' => 'LoginUserController@showLogin'));
Route::post('login', array('uses' => 'LoginUserController@doLogin'));
Route::get('logout', array('uses' => 'LoginUserController@doLogout'));

//Admin Routes
Route::group(array('prefix' => 'dashboard', 'before' => 'authAdmin'), function()
{
	Route::resource('kelurahan', 'KelurahanController');
	Route::resource('kecamatan', 'KecamatanController');
	Route::resource('sektor', 'SektorController');
	Route::resource('user', 'UserController');
	Route::resource('admin', 'AdminController');
	Route::resource('usaha', 'UsahaController');
});

Route::group(array('before' => 'authUser'), function()
{
	Route::resource('usaha', 'UserUsahaController');
});

//API Routes
Route::group(array('prefix' => 'api'), function()
{
	Route::get('usaha', array('uses' => 'ApiUsaha@index'));
});

Route::get('test', function()
{
	return View::make('test');
});

Route::get('signup', array('uses' => 'RegisterController@showRegister'));
Route::post('signup', array('uses' => 'RegisterController@doRegister'));

