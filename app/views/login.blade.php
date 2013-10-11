@extends('layouts.master')

@section('title')
	@parent - Entrar
@stop

@section('content')
<div class="row">
	<div class="col-sm-4 col-sm-offset-4">
	@foreach ($errors->all('<div class="alert alert-danger"><span class="glyphicon glyphicon-minus-sign"></span>  :message</div>') as $error)
			{{ $error }}
	@endforeach
		<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Acceso al programa de Tutorías del ITSU</h3>
		</div>
			<div class="panel-body">
				{{ Form::open() }}
					<div class="form-group">
						{{ Form::label('username', 'Usuario:') }}
						{{ Form::text('username', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Número de Control o Nómina'
						)) }}
					</div>
					<div class="form-group">
						{{ Form::label('password', 'Contraseña:') }}
						{{ Form::password('password', array( 
						'class' => 'form-control',
						'placeholder' => 'Contraseña'
						)) }}
					</div>
					{{ Form::submit('Entrar', array( 
						'class' => 'btn btn-primary'
						)) }}
				{{ Form::close() }}
			</div>
			<div class="panel-footer">
			<span class="glyphicon glyphicon-hand-right"></span> Si no te has registrado en el sistema  {{ HTML::link('alumno/create', 'da click aqui') }}. <br/>
			</div>
		</div>
		
	</div>
</div>
@stop