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
			'password'	=>	'required|alphaNum|min:3'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return View::make('admin.login');
		} else {
			$userdata = array(
				'user'	=>	Input::get('user'),
				'password'	=>	Input::get('password')
			);

			Config::set('auth.model', 'Admin');
			$auth = Auth::createEloquentDriver();
			Auth::setProvider($auth->getProvider());

			if(Auth::attempt($userdata)) {
				Session::put('isAdmin', true);
				return View::make('admin.dashboard');
			} else {
				return View::make('admin.login');
			}
		}
	}

	public function doLogout()
	{
		Auth::logout();
		Session::flush();
		return Redirect::intended('dashboard');
	}

}