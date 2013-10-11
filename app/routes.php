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
	//return View::make('layouts.master');
	return Redirect::to('login');
});

Route::get('register', function()
{
      //return View::make('layouts.master');
      return View::make('register');
});

Route::post('register', 'AdminController@store');

Route::get('login', 'AccessController@index');

Route::post('login', 'AccessController@login');

Route::get('logout', 'AccessController@logout');

Route::resource('alumno', 'AlumnoController');

Route::get('admin', array('before' => 'auth|admin',
            'uses' => 'AdminController@index'));

Route::get('formatos',  array('before' => 'auth',
            'uses' => 'FormatController@getIndex'));

Route::get('formato/1a',  array('before' => 'auth',
            'uses' => 'FormatController@getFormato1a'));

Route::post('formato/1a', array('before' => 'auth',
            'uses' => 'FormatController@postFormato1a'));

Route::get('formato/1',  array('before' => 'auth',
            'uses' => 'FormatController@getFormato1'));

Route::post('formato/1', array('before' => 'auth',
            'uses' => 'FormatController@postFormato1'));

Route::get('formato/habitos_estudio',  array('before' => 'auth',
            'uses' => 'FormatController@getFormato2'));

Route::post('formato/habitos_estudio', array('before' => 'auth',
            'uses' => 'FormatController@postFormato2'));

Route::get('activate/admin/{user}', array('before' => 'auth|admin',
            'uses' => 'ActivationController@asAdmin'));

Route::get('activate/tutor/{user}', array('before' => 'auth|admin',
            'uses' => 'ActivationController@asTutor'));

Route::get('activate/coordinator/{user}', array('before' => 'auth|admin',
            'uses' => 'ActivationController@asCoord'));

Route::get('deactivate/{user}', array('before' => 'auth|admin',
            'uses' => 'ActivationController@deactivate'));
