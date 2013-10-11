<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

//use Zizaco\Entrust\HasRole;

class User extends Eloquent implements UserInterface, RemindableInterface {

	//use HasRole;

	/**
	 * Error messages for Validation rules.
	 *
	 * @var array
	 */
	public static $errorMessages = array(
    	'username.required'	=> 'Ingrese un usuario para continuar.',
    	'password.required'	=> 'Ingrese una contraseña para continuar.',
    	'exists'	=> 'El usuario no esta registrado en el sistema.'
	);

	/**
	 * Validation rules.
	 *
	 * @var array
	 */
	public static $rules = array(
		'username' => 'required|exists:users,username',
		'password' => 'required'
	);

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function userProfile()
	{
		return $this->hasOne('UserProfile');
	}

	public function Formato1a()
	{
		return $this->hasOne('Formato1a');
	}

}