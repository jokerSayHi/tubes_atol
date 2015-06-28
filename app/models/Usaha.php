<?php

class Usaha extends Eloquent {

	protected $table = 'usaha';

	public $timestamps = false;

	protected $fillable = array('nama_usaha', 'produk_utama', 'alamat_usaha', 'deskripsi', 'telp_usaha', 'skala_usaha', 'latitude', 'longitude', 'gambar_satu', 'gambar_dua', 'gambar_tiga', 'gambar_empat', 'gambar_lima', 'status_aktif', 'id_kelurahan', 'id_sektor', 'nik');
}