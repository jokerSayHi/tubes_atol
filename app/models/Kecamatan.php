<?php

class Kecamatan extends Eloquent {

	protected $table = 'kecamatan';

	public $timestamps = false;

	protected $fillable = array('nama_kecamatan', 'kode_pos');

	protected $primaryKey = 'id_kecamatan';

	public function kelurahan()
	{
		return $this->hasMany('Kelurahan');
	}
	
}