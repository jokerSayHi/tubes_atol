<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';

	public $timestamps = false;

	protected $fillable = array('nik', 'nama', 'email', 'password', 'alamat', 'tempat_lahir', 'tgl_lahir', 'no_telp', 'foto_ktp', 'status_aktif', 'nip');

	protected $primaryKey = 'nik';

	protected $hidden = array('password');

	public function getRememberToken()
 	{
  	return null; // not supported
 	}

	public function setRememberToken($value)
 	{
  	// not supported
 	}

 	public function getRememberTokenName()
 	{
  	return null; // not supported
 	}

 	/**
  	* Overrides the method to ignore the remember token.
  	*/
 	public function setAttribute($key, $value)
 	{
   	$isRememberTokenAttribute = $key == $this->getRememberTokenName();
   	if (!$isRememberTokenAttribute)
   	{
     parent::setAttribute($key, $value);
   	}
 	}

}
