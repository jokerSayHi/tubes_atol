<?php

class UserController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = User::all();

		return View::make('admin.user.table')->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		return View::make('admin.user.edit')->with('user', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'nama'					=>	'required',
			'email'					=>	'required',
			'alamat'				=>	'required',
			'tempat_lahir'	=>	'required',
			'tgl_lahir'			=>	'required',
			'telp'					=>	'required',
			'status'				=>	'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::intended('/dashboard/user/'.$id.'/edit');
		} else {
			$user = User::find($id);
			$user->nama = Input::get('nama');
			$user->email = Input::get('email');
			$user->alamat = Input::get('alamat');
			$user->tempat_lahir = Input::get('tempat_lahir');
			$user->tgl_lahir = Input::get('tgl_lahir');
			$user->no_telp = Input::get('telp');
			$user->status_aktif = Input::get('status');
			$user->save();

			return Redirect::intended('/dashboard/user');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();

		return Redirect::intended('/dashboard/user');
	}

}
