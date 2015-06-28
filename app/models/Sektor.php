<?php

class Sektor extends Eloquent {

	protected $table = 'sektor';

	public $timestamps = false;

	protected $fillable = array('nama_sektor');

	protected $primaryKey = 'id_sektor';
	
}