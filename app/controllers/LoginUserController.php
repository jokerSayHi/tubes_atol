<?php

class LoginUserController extends BaseController {

	public function showLogin()
	{		
		if (Auth::check()) {
			return Redirect::intended('/');
		} else {
			return View::make('login'); 
		}
	}

	public function doLogin()
	{
		$rules = array(
			'nik'	=>	'required',
			'password'	=>	'required|min:3'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('login');
		} else {
			$credentials = array(
				'nik'	=>	Input::get('nik'),
				'password'	=>	Input::get('password')
			);

			Config::set('auth.model', 'User');
			$auth = Auth::createEloquentDriver();
			Auth::setProvider($auth->getProvider());

			if(Auth::attempt($credentials)) {
				Session::put('userType', 'user');
				return Redirect::intended('/');
			} else {
				return Redirect::intended('login');
			}
		}
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::intended('login');
	}

}