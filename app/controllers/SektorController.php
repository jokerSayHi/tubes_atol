<?php

class SektorController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sektor = Sektor::all();

		return View::make('admin.sektor.table')->with('sektor', $sektor);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.sektor.form');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'sektor'	=>	'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::intended('/dashboard/sektor/create');
		} else {
			$sektor = new Sektor;
			$sektor->nama_sektor = Input::get('sektor');
			$sektor->save();

			return Redirect::intended('/dashboard/sektor');
		}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sektor = Sektor::find($id);

		return View::make('admin.sektor.edit')->with('sektor', $sektor);
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
			'sektor'	=>	'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::intended('/dashboard/sektor/'.$id.'/edit');
		} else {
			$sektor = Sektor::find($id);
			$sektor->nama_sektor = Input::get('sektor');
			$sektor->save();

			return Redirect::intended('/dashboard/sektor');
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
		$sektor = Sektor::find($id);
		$sektor->delete();

		return Redirect::intended('/dashboard/sektor');
	}

}
