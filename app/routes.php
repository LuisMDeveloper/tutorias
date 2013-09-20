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

	//$docentesSistemas = Carrera::find(1)->docentes;

	//dd($docentesSistemas);

	//$docente = Docente::find(1)->carrera;

	//dd($docente);

	$docente = Docente::where('carrera_id', '=', null)->get();

	dd($docente);


	return View::make('layouts.master')->with(array(
		'title' => 'Tutorias'
	));
});

Route::get('singin', function()
{
	return View::make('singin')->with(array(
		'title' => 'Tutorias'
	));
});