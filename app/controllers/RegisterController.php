<?php

class RegisterController extends BaseController {


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//$grupos = ["A2", "A4", "B4"];
		$grupos = Grupo::all();

		return View::make('alumno.create')->with(
			'grupos' , $grupos
		);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		// Validacion <<
		$rules = array(
			'num_control' => 'required|unique:users,username',
        	'password' => 'required|min:8',
        	'password_confirmation' => 'required|min:8',
        	'nombre' => 'required',
        	'aPaterno' => 'required',
        	'aMaterno' => 'required',
        	'email' => 'required'
		);

		$messages = array(
			'num_control.required'	=> 'Ingrese su numero de control para continuar con el registro.',
			'password.required'		=> 'Ingrese una contraseña para continuar con el registro.',
			'password_confirmation.required' => 'Ingrese la confirmación de la contraseña para continuar con el registro.',
			'nombre.required' 		=> 'Ingrese su nombre para continuar con el registro.',
			'aPaterno.required' 	=> 'Ingrese su Apellido Paterno para continuar con el registro.',
			'aMaterno.required' 	=> 'Ingrese su Apellido Materno para continuar con el registro.',
			'email.required' 		=> 'Ingrese su Email para continuar con el registro.',
			'password.min'			=> 'La contraseña debe contener un minimo de :min caracteres.',
			'password_confirmation.min'			=> 'La confirmación de la contraseña debe contener un minimo de :min caracteres.',
			'num_control.unique'	=> 'El numero de control que ingreso ya esta registrado. Si no recuerda su contraseña contacte al administrador.',
		);

		$validator = Validator::make(Input::all(), $rules, $messages);

		if ($validator->fails())
		{
			return Redirect::to('register')->withErrors($validator)->withInput();
		}

		if (Input::get('password') !== Input::get('password_confirmation')) {
			$validator->errors()->add('confirmation', 'La confirmacion de contraseña fue incorrecta.');
			return Redirect::to('register')->withErrors($validator)->withInput();
		}
		// >> Validacion

		$user = new User;

		$user->username = Input::get('num_control');
		$user->password = Hash::make(Input::get('password'));
		$user->user_type = 'tutorado';

		$user->save();

		$profile = new UserProfile;

		$profile->user_id			= User::whereUsername(Input::get('num_control'))->first()->id;
		$profile->nombre 			= Input::get('nombre');
		$profile->aPaterno 			= Input::get('aPaterno');
		$profile->aMaterno 			= Input::get('aMaterno');
		$profile->num_control		= Input::get('num_control');
		$profile->email				= Input::get('email');
		$profile->calle				= Input::get('calle');
		$profile->numExt			= Input::get('numExt');
		$profile->numInt			= Input::get('numInt');
		$profile->colonia			= Input::get('colonia');
		$profile->municipio			= Input::get('municipio');
		$profile->entidad			= Input::get('entidad');
		$profile->cp				= Input::get('cp');
		$profile->lugar_nacimiento	= Input::get('lugar_nacimiento');
		$profile->telCasa			= Input::get('telCasa');
		$profile->telCel			= Input::get('telCel');
		$profile->estado_civil		= Input::get('estado_civil');
		$profile->grupo_id			= Input::get('grupo');

		$profile->save();

		return 'Welcome ' . Input::get('nombre');
	}

}