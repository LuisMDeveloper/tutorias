@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		@foreach ($errors->all('<div class="alert alert-danger"><span class="glyphicon glyphicon-minus-sign"></span>  :message</div>') as $error)
			{{ $error }}
		@endforeach
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span>Registrate como Administrador</h3>
			</div>
			<div class="panel-body">
					{{ Form::open(array(
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
						<select name="estado_civil" id="grupo" class="form-control">
							<option value="estado">Soltero</option>
							<option value="estado">Casado</option>
							<option value="estado">Divorciado</option>
						</select>
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
					{{ Form::label('nomina', '*Número de nomina:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('nomina', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Número de nomina'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('escolaridad', '*Escolaridad:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('escolaridad', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Escolaridad'
						)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('Grado', '*Grado:', array(
						'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('Grado', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Grado'
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