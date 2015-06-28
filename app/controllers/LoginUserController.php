<?php

class LoginUserController extends BaseController {

	public function showLogin()
	{
		Config::set('auth.model', 'User');
		$auth = Auth::createEloquentDriver();
		Auth::setProvider($auth->getProvider());
		
		if (Auth::check()) {
			return Redirect::intended('/');
		} else {
			return View::make('login'); 
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
				'nik'	=>	Input::get('user'),
				'password'	=>	Input::get('password')
			);

			Config::set('auth.model', 'User');
			$auth = Auth::createEloquentDriver();
			Auth::setProvider($auth->getProvider());

			if(Auth::attempt($userdata)) {
				Session::put('isUser', true);
				return Redirect::intended('/');
			} else {
				return Redirect::intended('admin');
			}
		}
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::intended('login');
	}

}