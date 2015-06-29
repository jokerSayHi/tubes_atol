<?php

class KelurahanController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$kel = Kelurahan::paginate(15);

		return View::make('admin.kelurahan.table')->with('kel', $kel);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$kec = Kecamatan::all();

		return View::make('admin.kelurahan.form')->with('kec', $kec);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'kelurahan'	=>	'required',
			'id'				=>	'required|numeric'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::intended('/dashboard/kelurahan/'.$id);
		} else {
			$kel = new Kelurahan;
			$kel->nama_kelurahan = Input::get('kelurahan');
			$kel->id_kecamatan = Input::get('id_kecamatan');
			$kel->save();

			return Redirect::intended('/dashboard/kelurahan');
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
		$kel = Kelurahan::find($id);
		$kec = Kecamatan::all();

		return View::make('admin.kelurahan.edit')->with(array('kel'	=> $kel, 'kec' => $kec));
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
			'kelurahan'			=>	'required',
			'id_kecamatan'	=>	'required|numeric'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::intended('dashboard/kelurahan/create');
		} else {
			$kel = Kelurahan::find($id);
			$kel->nama_kelurahan = Input::get('kelurahan');
			$kel->id_kecamatan = Input::get('id_kecamatan');
			$kel->save();

			return View::make('admin.kelurahan.table');
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
		$kel = Kelurahan::find($id);
		$kel->delete();

		return Redirect::intended('/dashboard/kelurahan');
	}

}
