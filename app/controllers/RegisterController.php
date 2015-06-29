<?php

class RegisterController extends BaseController {
	
	public function showRegister()
	{
		if (Auth::check()) {
			return Redirect::intended('/');
		} else {
			return View::make('signup');
		}
	}

	public function doRegister()
	{
		$destinationPath 	= "";
		$filename					= "";

		if (Input::hasFile('foto_ktp')) {
			$file 						= Input::file('foto_ktp');
			$destinationPath 	= public_path().'/images/';
			$filename					= str_random(6) . '_' . $file->getClientOriginalName();
			$uploadSuccess		= $file->move($destinationPath, $filename);
		}

		$user = new User;
		$user->nik 					= Input::get('nik');
		$user->nama 				= Input::get('nama');
		$user->email 				= Input::get('email');
		$user->password 		= Hash::make(Input::get('pass'));
		$user->alamat 			= Input::get('alamat');
		$user->tempat_lahir = Input::get('tempat_lahir');
		$user->tgl_lahir 		= Input::get('tgl_lahir');
		$user->no_telp			= Input::get('no_telp');
		$user->foto_ktp			= $filename;
		$user->save();

		return Redirect::intended('/');
	}

}