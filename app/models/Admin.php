<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Admin extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'admin';

	public $timestamps = false;

	protected $fillable = array('nip', 'nama', 'user', 'password', 'email', 'no_telp');

	protected $primaryKey = 'nip';

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
