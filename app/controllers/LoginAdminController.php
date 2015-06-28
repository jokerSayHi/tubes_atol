<?php

class LoginAdminController extends BaseController {

	public function showLogin()
	{
		if (Auth::check()) {
			return Redirect::intended('/');
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
			return Redirect::to('login');
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
				return Redirect::intended('/');
			} else {
				return Redirect::intended('admin');
			}
		}
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::intended('admin');
	}

}