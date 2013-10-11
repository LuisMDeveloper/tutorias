<?php

class AccessController extends BaseController {

	public function index()
	{
		return View::make('login');
	}

	public function login()
	{
		$credentials = array(
			'username'	=> Input::get('username'),
			'password'	=> Input::get('password')
		);

		$validation = Validator::make($credentials, User::$rules, User::$errorMessages);

		if ( $validation->fails() ) {
			return Redirect::to('login')->withErrors($validation)->withInput();
		}

		if (Auth::attempt($credentials)) {

			if (Auth::user()->user_type === 'admin') {
				return Redirect::to('admin');
			}

			// if(Auth::user()->hasRole("Admin")) {
			// 	return Redirect::to('admin');
			// }
			// if(Auth::user()->hasRole("Tutorado")) {
			// 	return Redirect::to('formularios');
			// }
			return Redirect::to('formatos');
		}

		$validation->errors()->add('password_fail', 'La contraseña es incorrecta.');
		return Redirect::to('login')->withErrors($validation)->withInput();
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::to('/');
	}

}