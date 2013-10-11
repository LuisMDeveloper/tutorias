@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Reg&iacute;strate</h3>
			</div>
			<div class="panel-body">
				{{ Form::open(array('class' => 'form-horizontal')) }}
				<div class="form-group">
					<div class="col-sm-4">
						{{ Form::text('nombre', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Nombre'
						)) }}
					</div>
					<div class="col-sm-4">
						{{ Form::text('aPaterno', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Apellido Paterno'
						)) }}
					</div>
					<div class="col-sm-4">
						{{ Form::text('aMaterno', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Apellido Materno'
						)) }}
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-12">
						{{ Form::text('email', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Email'
						)) }}
					</div>
				</div>

				<hr/>

				<div class="form-group">
					<div class="col-sm-6">
						{{ Form::text('num_control', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Numero de Control'
						)) }}
					</div>
					<div class="col-sm-6">
						{{ Form::select('grupo', $grupos, null, array( 
						'class' => 'form-control'
						)) }}
					</div>
				</div>

				<hr/>

				<div class="form-group">
					<div class="col-sm-4">
						{{ Form::text('calle', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Calle'
						)) }}
					</div>
					<div class="col-sm-4">
						{{ Form::text('numExt', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Número Exterior'
						)) }}
					</div>
					<div class="col-sm-4">
						{{ Form::text('numInt', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Número Interior'
						)) }}
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-6">
						{{ Form::text('entidad', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Entidad Federativa'
						)) }}
					</div>
					<div class="col-sm-6">
						{{ Form::text('municipio', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Municipio'
						)) }}
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-6">
						{{ Form::text('colonia', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Colonia'
						)) }}
					</div>
					<div class="col-sm-6">
						{{ Form::text('cp', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Código Postal'
						)) }}
					</div>
				</div>

				<hr/>

				<div class="form-group">
					<div class="col-sm-6">
						{{ Form::text('lugar_nacimiento', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Lugar de Nacimiento'
						)) }}
					</div>
					<div class="col-sm-6">
						{{ Form::text('estado_civil', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Estado Civil'
						)) }}
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-6">
						{{ Form::text('telCasa', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Teléfono'
						)) }}
					</div>
					<div class="col-sm-6">
						{{ Form::text('telCel', null, array( 
						'class' => 'form-control',
						'placeholder' => 'Celular'
						)) }}
					</div>
				</div>


				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@stop

