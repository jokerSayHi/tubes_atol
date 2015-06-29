<?php

class KecamatanController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$kec = Kecamatan::all();

		return View::make('admin.kecamatan.table')->with('kec', $kec);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.kecamatan.form');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'kecamatan'	=>	'required',
			'kode_pos'	=>	'required|numeric'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::intended('/dashboard/kecamatan/create');
		} else {
			$kel = new Kecamatan;
			$kel->nama_kecamatan = Input::get('kecamatan');
			$kel->kode_pos = Input::get('kode_pos');
			$kel->save();

			return Redirect::intended('/dashboard/kecamatan');
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
		$kec = Kecamatan::find($id);

		return View::make('admin.kecamatan.edit')->with('kec', $kec);
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
			'kecamatan'	=>	'required',
			'kode_pos'	=>	'required|numeric'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::intended('/dashboard/kecamatan/'.$id.'/edit');
		} else {
			$kel = Kecamatan::find($id);
			$kel->nama_kecamatan = Input::get('kecamatan');
			$kel->kode_pos = Input::get('kode_pos');
			$kel->save();

			return Redirect::intended('/dashboard/kecamatan');
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
		$kec = Kecamatan::find($id);
		$kec->delete();

		return Redirect::intended('/dashboard/kecamatan');
	}

}
