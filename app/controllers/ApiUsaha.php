<?php

class ApiUsaha extends BaseController {
	
	public function index()
	{
		$result = DB::table('usaha')
			->select('id_usaha', 'nama_usaha', 'produk_utama', 'alamat_usaha', 'deskripsi', 'telp_usaha', 'skala_usaha', 'latitude', 'longitude', 'nama', 'email', 'nama_kelurahan', 'nama_kecamatan', 'nama_sektor')
			->join('kelurahan', function($join)
				{
					$join->on('usaha.id_kelurahan', '=', 'kelurahan.id_kelurahan');
				})
			->join('kecamatan', function($join)
				{
					$join->on('kelurahan.id_kecamatan', '=', 'kecamatan.id_kecamatan');
				})
			->join('sektor', function($join)
				{
					$join->on('usaha.id_sektor', '=', 'sektor.id_sektor');
				})
			->join('users', function($join)
				{
					$join->on('usaha.nik', '=', 'users.nik');
				})
			->get();

		return Response::json(array('result' => $result));
	}
}