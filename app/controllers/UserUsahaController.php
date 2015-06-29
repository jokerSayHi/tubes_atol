<?php

class UserUsahaController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$usaha = Usaha::all();

		return View::make('users.usaha.view')->with('usaha', $usaha);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$kel = Kelurahan::all();
		$sektor = Sektor::all();

		return View::make('users.usaha.form')->with(array('kel' => $kel, 'sektor' => $sektor));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$usaha = new Usaha;
		$usaha->nama_usaha = Input::get('nama_usaha');
		$usaha->produk_utama = Input::get('produk_utama');
		$usaha->alamat_usaha = Input::get('alamat_usaha');
		$usaha->deskripsi = Input::get('deskripsi');
		$usaha->telp_usaha = Input::get('telp_usaha');
		$usaha->skala_usaha = Input::get('skala');
		$usaha->latitude = Input::get('lat');
		$usaha->longitude = Input::get('long');

		$destinationPath = "";
		$filename = array("", "", "", "", "");

		if (Input::hasFile('gambar_satu')) {
			$file 						= Input::file('gambar_satu');
			$destinationPath 	= public_path().'/images/usaha/';
			$filename[0]			= str_random(6) . '_' . $id . '_' . $file->getClientOriginalName() . '1';
			$uploadSuccess		= $file->move($destinationPath, $filename[0]);
			$usaha->gambar_satu = $filename[0];
		}

		if (Input::hasFile('gambar_dua')) {
			$file 						= Input::file('gambar_dua');
			$destinationPath 	= public_path().'/images/usaha/';
			$filename[1]			= str_random(6) . '_' . $id . '_' . $file->getClientOriginalName() . '2';
			$uploadSuccess		= $file->move($destinationPath, $filename[1]);
			$usaha->gambar_dua = $filename[1];
		}

		if (Input::hasFile('gambar_tiga')) {
			$file 						= Input::file('gambar_tiga');
			$destinationPath 	= public_path().'/images/usaha/';
			$filename[2]			= str_random(6) . '_' . $id . '_' . $file->getClientOriginalName() . '3';
			$uploadSuccess		= $file->move($destinationPath, $filename[2]);
			$usaha->gambar_tiga = $filename[2];
		}

		if (Input::hasFile('gambar_empat')) {
			$file 						= Input::file('gambar_empat');
			$destinationPath 	= public_path().'/images/usaha/';
			$filename[3]			= str_random(6) . '_' . $id . '_' . $file->getClientOriginalName() . '4';
			$uploadSuccess		= $file->move($destinationPath, $filename[3]);
			$usaha->gambar_empat = $filename[3];
		}

		if (Input::hasFile('gambar_lima')) {
			$file 						= Input::file('gambar_lima');
			$destinationPath 	= public_path().'/images/usaha/';
			$filename[4]			= str_random(6) . '_' . $id . '_' . $file->getClientOriginalName() . '5';
			$uploadSuccess		= $file->move($destinationPath, $filename[4]);
			$usaha->gambar_lima = $filename[4];
		}

		$usaha->status_aktif = Input::get('status_aktif');
		$usaha->id_kelurahan = Input::get('id_kelurahan');
		$usaha->id_sektor = Input::get('id_sektor');
		
		$usaha->save();

		return Redirect::intended('/usaha');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usaha = Usaha::find($id);

		return View::make('users.usaha.edit')->with('usaha', $usaha);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usaha = Usaha::find($id);
		$usaha->nama_usaha = Input::get('nama_usaha');
		$usaha->produk_utama = Input::get('produk_utama');
		$usaha->alamat_usaha = Input::get('alamat_usaha');
		$usaha->deskripsi = Input::get('deskripsi');
		$usaha->telp_usaha = Input::get('telp_usaha');
		$usaha->skala_usaha = Input::get('skala');
		$usaha->latitude = Input::get('lat');
		$usaha->longitude = Input::get('long');

		$destinationPath = "";
		$filename = array("", "", "", "", "");

		if (Input::hasFile('gambar_satu')) {
			$file 						= Input::file('gambar_satu');
			$destinationPath 	= public_path().'/images/usaha/';
			$filename[0]			= str_random(6) . '_' . $id . '_' . $file->getClientOriginalName() . '1';
			$uploadSuccess		= $file->move($destinationPath, $filename[0]);
			$usaha->gambar_satu = $filename[0];
		}

		if (Input::hasFile('gambar_dua')) {
			$file 						= Input::file('gambar_dua');
			$destinationPath 	= public_path().'/images/usaha/';
			$filename[1]			= str_random(6) . '_' . $id . '_' . $file->getClientOriginalName() . '2';
			$uploadSuccess		= $file->move($destinationPath, $filename[1]);
			$usaha->gambar_dua = $filename[1];
		}

		if (Input::hasFile('gambar_tiga')) {
			$file 						= Input::file('gambar_tiga');
			$destinationPath 	= public_path().'/images/usaha/';
			$filename[2]			= str_random(6) . '_' . $id . '_' . $file->getClientOriginalName() . '3';
			$uploadSuccess		= $file->move($destinationPath, $filename[2]);
			$usaha->gambar_tiga = $filename[2];
		}

		if (Input::hasFile('gambar_empat')) {
			$file 						= Input::file('gambar_empat');
			$destinationPath 	= public_path().'/images/usaha/';
			$filename[3]			= str_random(6) . '_' . $id . '_' . $file->getClientOriginalName() . '4';
			$uploadSuccess		= $file->move($destinationPath, $filename[3]);
			$usaha->gambar_empat = $filename[3];
		}

		if (Input::hasFile('gambar_lima')) {
			$file 						= Input::file('gambar_lima');
			$destinationPath 	= public_path().'/images/usaha/';
			$filename[4]			= str_random(6) . '_' . $id . '_' . $file->getClientOriginalName() . '5';
			$uploadSuccess		= $file->move($destinationPath, $filename[4]);
			$usaha->gambar_lima = $filename[4];
		}

		$usaha->status_aktif = Input::get('status_aktif');
		$usaha->id_kelurahan = Input::get('id_kelurahan');
		$usaha->id_sektor = Input::get('id_sektor');
		
		$usaha->save();

		return Redirect::intended('/usaha');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$usaha = Usaha::find($id);
		$usaha->delete();

		return Redirect::intended('/usaha');
	}

}
