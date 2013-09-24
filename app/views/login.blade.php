@extends('layouts.master')

@section('title')
	@parent - Entrar
@stop

@section('content')
<div class="row">
	<div class="col-sm-4 col-sm-offset-4">
		<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Acceso al programa de Tutorías</h3>
		</div>
			<div class="panel-body">
				{{ Form::open() }}
					<div class="form-group">
						{{ Form::label('username', 'Usuario:') }}
						{{ Form::text('username', null, array( 
						'class' => 'form-control',
						'placeholder' => 'usuario'
						)) }}
					</div>
					<div class="form-group">
						{{ Form::label('password', 'Contraseña:') }}
						{{ Form::password('password', array( 
						'class' => 'form-control',
						'placeholder' => 'contraseña'
						)) }}
					</div>
					{{ Form::submit('Entrar', array( 
						'class' => 'btn btn-primary'
						)) }}
				{{ Form::close() }}
			</div>
		</div>
		{{ $errors->first('username', '<div class="alert alert-danger"><span class="glyphicon glyphicon-minus-sign"></span>  :message</div>') }}
		{{ $errors->first('password', '<div class="alert alert-danger"><span class="glyphicon glyphicon-minus-sign"></span>  :message</div>') }}
		@if(isset($incorrectPassword))
		<div class="alert alert-danger"><span class="glyphicon glyphicon-minus-sign"></span> {{ $incorrectPassword }}</div>
		@endif
	</div>
</div>
@stop