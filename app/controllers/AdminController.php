<?php

class AdminController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$admin = Admin::all();

		return View::make('admin.admin.table')->with('admin', $admin);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.admin.form');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$admin = Admin::find($id);

		return View::make('admin.admin.edit')->with('admin', $admin);
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
			'nama'	=>	'required',
			'user'	=>	'required',
			'email'	=>	'required',
			'telp'	=>	'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::intended('/dashboard/admin/'.$id.'/edit');
		} else {
			$admin = Admin::find($id);
			$admin->nama = Input::get('nama');
			$admin->user = Input::get('user');
			$admin->email = Input::get('email');
			$admin->no_telp = Input::get('telp');
			$admin->save();

			return Redirect::intended('/dashboard/admin');
		}
	}

}
