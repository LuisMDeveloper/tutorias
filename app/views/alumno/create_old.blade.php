@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		@foreach ($errors->all('<div class="alert alert-danger"><span class="glyphicon glyphicon-minus-sign"></span>  :message</div>') as $error)
			{{ $error }}
		@endforeach
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Reg&iacute;strate</h3>
			</div>
			<div class="panel-body">
				{{ Form::open(array(
					'route' => 'alumno.store',
					'class' => 'form-horizontal'
				)) }}
				
				<div class="form-group">
					{{ Form::label('nombre', '*Nombre:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('nombre', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Nombre'
						)) }}
					</div>
				</div> 
				<div class="form-group">
					{{ Form::label('aPaterno', '*Apellido Paterno:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('aPaterno', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Apellido Paterno'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('aMaterno', '*Apellido Materno:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('aMaterno', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Apellido Materno'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('email', '*Email:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('email', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Email'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('num_control', '*Numero de Control:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('num_control', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Numero de Control'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('grupo', '*Grupo:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						<select name="grupo" id="grupo" class="form-control">
						@foreach ($grupos as $grupo)
							<option value="{{ $grupo->id }}">{{ $grupo->semestre }}{{ $grupo->grupo }} (clave {{ $grupo->clave }})</option>
						@endforeach
						</select>
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('calle', 'Calle:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('calle', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Calle'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('numExt', 'Número Exterior:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('numExt', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Número Exterior'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('numInt', 'Número Interior:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('numInt', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Número Interior'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('entidad', 'Entidad Federativa:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('entidad', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Entidad Federativa'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('municipio', 'Municipio:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('municipio', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Municipio'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('colonia', 'Colonia:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('colonia', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Colonia'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('cp', 'Código Postal:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('cp', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Código Postal'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('lugar_nacimiento', 'Lugar de Nacimiento:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('lugar_nacimiento', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Lugar de Nacimiento'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('estado_civil', 'Estado Civil:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('estado_civil', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Estado Civil'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('telCasa', 'Teléfono:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('telCasa', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Teléfono'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('telCel', 'Celular:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('telCel', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Celular'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('password', '*Contraseña:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::password('password', array( 
							'class' => 'form-control',
							'placeholder' => 'Contraseña'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('password_confirmation', '*Confirme su Contraseña:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::password('password_confirmation', array( 
							'class' => 'form-control',
							'placeholder' => 'Confirme su Contraseña'
						)) }}
					</div>
				</div>


				{{ Form::submit('Registrarse', array( 
					'class' => 'btn btn-primary btn-lg pull-right'
				)) }}

				{{ Form::close() }}
			</div>
		</div>
		
	</div>
</div>
@stop

