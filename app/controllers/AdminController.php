<?php

class AdminController extends BaseController {

	public function index()
	{
		$noActivados 		= User::where('user_type', '=', 'ninguno')->get();
		$administradores 	= User::where('user_type', '=', 'admin')->get();
		$tutores 			= User::where('user_type', '=', 'tutor')->get();
		$coordinadores 		= User::where('user_type', '=', 'coord')->get();
		$tutorados 			= User::where('user_type', '=', 'tutorado')->get();
		
		return View::make('admin.index', array(
			'tutorados' 		=> $tutorados,
			'administradores'	=> $administradores,
			'noActivados'		=> $noActivados,
			'coordinadores'		=> $coordinadores,
			'tutores'			=> $tutores
		));
	}

	public function store()
	{
		// Validacion <<
		$rules = array(
        	'nombre' 				=> 'required',
        	'aPaterno' 				=> 'required',
        	'aMaterno' 				=> 'required',
        	'email' 				=> 'required',
			'nomina' 				=> 'required|unique:users,username',
        	'password' 				=> 'required|min:8',
        	'password_confirmation' => 'required|min:8'
		);

		$messages = array(
			'nomina.required'			=> 'Ingrese su numero de nomina para continuar con el registro.',
			'password.required'			=> 'Ingrese una contraseña para continuar con el registro.',
			'password_confirmation.required' => 'Ingrese la confirmación de la contraseña para continuar con el registro.',
			'nombre.required' 			=> 'Ingrese su nombre para continuar con el registro.',
			'aPaterno.required' 		=> 'Ingrese su Apellido Paterno para continuar con el registro.',
			'aMaterno.required' 		=> 'Ingrese su Apellido Materno para continuar con el registro.',
			'email.required' 			=> 'Ingrese su Email para continuar con el registro.',
			'calle.required'			=> 'Ingrese el campo calle para continuar con el registro.',
			'numExt.required'			=> 'Ingrese el numero exterior para continuar con el registro.',
			'colonia.required'			=> 'Ingrese la colonia para continuar con el registro.',
			'municipio.required'		=> 'Ingrese el municipio para continuar con el registro.',
			'entidad.required'			=> 'Ingrese entidad federativa (estado) para continuar con el registro.',
			'cp.required'				=> 'Ingrese el codigo postal para continuar con el registro.',
			'lugar_nacimiento.required'	=> 'Ingrese su lugar de nacimiento para continuar con el registro.',
			'estado_civil.required'		=> 'Ingrese su estado civil para continuar con el registro.',
			'grupo.required'			=> 'Seleccione su gruop para continuar con el registro.',
			'password.min'				=> 'La contraseña debe contener un minimo de :min caracteres.',
			'password_confirmation.min'	=> 'La confirmación de la contraseña debe contener un minimo de :min caracteres.',
			'nomina.unique'		=> 'El numero de control que ingreso ya esta registrado. Si no recuerda su contraseña contacte al administrador.',
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

		//$role = Role::whereName('Tutorado')->first();

		$user = new User;

		$user->username = Input::get('nomina');
		$user->password = Hash::make(Input::get('password'));
		$user->user_type = 'ninguno';

		$user->save();

		$profile = new UserProfile;

		$profile->user_id			= User::whereUsername(Input::get('nomina'))->first()->id;
		$profile->nombre 			= Input::get('nombre');
		$profile->aPaterno 			= Input::get('aPaterno');
		$profile->aMaterno 			= Input::get('aMaterno');
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

		$profile->save();

		//$user->attachRole( $role->id );

		return Redirect::to('login');
	}

}