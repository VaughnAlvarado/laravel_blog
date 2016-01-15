<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	public static $rules = array(
    	'email' => 'required|min:5|max:50',
    	'password' => 'required|max:30'
    );
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}
	public function getFullNameAttribute() 
	{
		return $this->first_name . ' ' . $this->last_name;
	}

	public function posts()
	{
		return $this->hasMany('Post');
	}

}
