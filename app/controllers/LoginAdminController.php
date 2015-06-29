<?php

class LoginAdminController extends BaseController {

	public function showLogin()
	{
		if (Auth::check()) {
			return View::make('admin.dashboard');
		} else {
			return View::make('admin.login');
		}
	}

	public function doLogin()
	{
		$rules = array(
			'user'	=>	'required',
			'password'	=>	'required|min:3'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return View::make('admin.login');
		} else {
			$credentials = array(
				'user'	=>	Input::get('user'),
				'password'	=>	Input::get('password')
			);

			Config::set('auth.model', 'Admin');
			$auth = Auth::createEloquentDriver();
			Auth::setProvider($auth->getProvider());

			if(Auth::attempt($credentials)) {
				Session::put('userType', 'admin');
				return Redirect::intended('dashboard');
			} else {
				return Redirect::intended('dashboard');
			}
		}
	}

	public function doLogout()
	{
		Auth::logout();
		Session::put('userType', 'user');
		return Redirect::intended('dashboard');
	}

}