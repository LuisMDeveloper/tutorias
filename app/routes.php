<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	Auth::logout();
	return View::make('layouts.master');
});

Route::get('login', function()
{
	return View::make('login');
});


Route::post('login', function()
{
	$credentials = array(
		'username'	=> Input::get('username'),
		'password'	=> Input::get('password')
	);

	$validation = Validator::make($credentials, User::$rules, User::$errorMessages);

	if ( $validation->fails() ) {
		return Redirect::to('login')->withErrors($validation);
	}

	if (Auth::attempt($credentials)) {
		return Redirect::to('dashboard');
	}

	return Redirect::to('login');
});


Route::get('dashboard', function() 
{
	return 'Welcome to the dashboard ' . Auth::user()->nombre;
});


// Route::get('hash_password', function()
// {
// 	//$users = User::all();
// 	$users = User::where('id', '>=', 755)->get();

// 	foreach ($users as  $user) {
// 		$user->password = Hash::make($user->password);
// 		$user->save();
// 	}

// 	return 'Passwords Hashed';
// 	die();
// });

// Route::get('create_roles', function() 
// {
// 	$admin = new Role;
// 	$admin->name = 'Administrador';
// 	$admin->save();

// 	$jefe = new Role;
// 	$jefe->name = 'Jefe de Carrera';
// 	$jefe->save();

// 	$coord = new Role;
// 	$coord->name = 'Coordinador';
// 	$coord->save();

// 	$tutor = new Role;
// 	$tutor->name = 'Tutor';
// 	$tutor->save();

// 	$tutorado = new Role;
// 	$tutorado->name = 'Tutorado';
// 	$tutorado->save();

// 	return 'Roles Created';

// });