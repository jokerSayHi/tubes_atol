<?php

class Kelurahan extends Eloquent {

	protected $table = 'kelurahan';

	public $timestamps = false;

	protected $fillable = array('nama_kelurahan', 'id_kecamatan');

	protected $primaryKey = 'id_kelurahan';
	
}