@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-12">
	@foreach ($errors->all('<div class="alert alert-danger"><span class="glyphicon glyphicon-minus-sign"></span>  :message</div>') as $error)
			{{ $error }}
		@endforeach
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="glyphicon glyphicon-file"></span> Formato F1 Diagnostico Inicial</h3>
			</div>
			<div class="panel-body">
			{{ Form::open() }}
			<input name="user_id" type="hidden" value="{{ $user->id }}" />
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						{{ Form::label('nombre', 'Nombre:', array(
							'class' => 'col-sm-4 control-label'
						)) }}
						<div class="col-sm-8">
							<p class="form-control-static">
							{{ $user->user_profile->nombre }} 
							{{ $user->user_profile->aPaterno }}
							{{ $user->user_profile->aMaterno }}
							</p>
						</div>
					</div> 
					<div class="form-group">
						{{ Form::label('direccion', 'Dirección:', array(
							'class' => 'col-sm-4 control-label'
						)) }}
						<div class="col-sm-8">
							<p class="form-control-static">
							{{ $user->user_profile->calle }} 
							#{{ $user->user_profile->numExt }}
							{{ $user->user_profile->numInt }},
							{{ $user->user_profile->colonia }}
							</p>
						</div>
					</div>
					<div class="form-group">
						{{ Form::label('email', 'Correo electrónico:', array(
							'class' => 'col-sm-4 control-label'
						)) }}
						<div class="col-sm-8">
							<p class="form-control-static">
							{{ $user->user_profile->email }} 
							</p>
						</div>
					</div>
					<div class="form-group">
						{{ Form::label('carrera', 'Carrera:', array(
							'class' => 'col-sm-4 control-label'
						)) }}
						<div class="col-sm-8">
							<p class="form-control-static">
							{{ $user->user_profile->grupo->carrera->nombre }} 
							</p>
						</div>
					</div>
					<div class="form-group">
						{{ Form::label('grupo', 'Grupo:', array(
							'class' => 'col-sm-4 control-label'
						)) }}
						<div class="col-sm-8">
							<p class="form-control-static">
							{{ $user->user_profile->grupo->grupo }}
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						{{ Form::label('num_control', 'No. Control:', array(
							'class' => 'col-sm-4 control-label'
						)) }}
						<div class="col-sm-8">
							<p class="form-control-static">
							{{ $user->user_profile->num_control }} 
							</p>
						</div>
					</div>
					<div class="form-group">
						{{ Form::label('lugar_nacimiento', 'Lugar de nacimiento:', array(
							'class' => 'col-sm-4 control-label'
						)) }}
						<div class="col-sm-8">
							<p class="form-control-static">
							{{ $user->user_profile->lugar_nacimiento }} 
							</p>
						</div>
					</div>
					<div class="form-group">
						{{ Form::label('tel', 'Tel. y/o Cel:', array(
							'class' => 'col-sm-4 control-label'
						)) }}
						<div class="col-sm-8">
							<p class="form-control-static">
							@if ($user->user_profile->telCasa)
								Tel. {{ $user->user_profile->telCasa }} 
							@endif
							@if ($user->user_profile->telCel)
								Cel. {{ $user->user_profile->telCel }} 
							@endif
							</p>
						</div>
					</div>
					<div class="form-group">
						{{ Form::label('semestre', 'Semestre:', array(
							'class' => 'col-sm-4 control-label'
						)) }}
						<div class="col-sm-8">
							<p class="form-control-static">
							{{ $user->user_profile->grupo->semestre }}
							</p>
						</div>
					</div>
					<div class="form-group">
						{{ Form::label('semestre', 'Clave del grupo:', array(
							'class' => 'col-sm-4 control-label'
						)) }}
						<div class="col-sm-8">
							<p class="form-control-static">
							{{ $user->user_profile->grupo->clave }}
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- //////////////////////////////////////////////////////////////////////////// -->
			

			<!-- //////////////////////////////////////////////////////////////////////////// -->
			<div class="row">
				<div class="col-sm-12">
					<h4>Marque las actividades curriculares siguientes, que actualmente cursa:</h4>
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-sm-3 col-sm-offset-3">
				{{ Form::label('ingles', 'Ingles:', array(
							'class' => 'control-label'
						)) }}
					<div class="radio">
					  <label>
						{{ Form::radio('ingles', 'si') }}
					    Si
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('ingles', 'no') }}
					    No
					  </label>
					</div>
				
				</div>
				<div class="col-sm-6">
					<div class="radio">
					  <label>
						{{ Form::radio('nivel', 'nivel_1') }}
					    Nivel 1
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('nivel', 'nivel_2') }}
					    Nivel 2
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('nivel', 'nivel_3') }}
					    Nivel 3
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('nivel', 'nivel_4') }}
					    Nivel 4
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('nivel', 'nivel_5') }}
					    Nivel 5
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('nivel', 'nivel_6') }}
					    Nivel 6
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('nivel', 'nivel_7') }}
					    Nivel 7
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('nivel', 'nivel_8') }}
					    Nivel 8
					  </label>
					</div>
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-sm-3 col-sm-offset-3">
				{{ Form::label('deportivo', 'Deportivo:', array(
							'class' => 'control-label'
						)) }}
					<div class="radio">
					  <label>
						{{ Form::radio('deportivo', 'si') }}
					    Si
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('deportivo', 'no') }}
					    No
					  </label>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="radio">
					  <label>
						{{ Form::radio('actividad_dep', 'voleibol') }}
					    Vóleibol
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('actividad_dep', 'basquetbol') }}
					    Básquetbol
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('actividad_dep', 'futbol') }}
					    Fútbol
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('actividad_dep', 'atletismo') }}
					    Atletismo
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('actividad_dep', 'tai_chi') }}
					    Tai Chi
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('actividad_dep', 'taekwondo') }}
					    Taekwondo
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('actividad_dep', 'ajedrez') }}
					    Ajedrez
					  </label>
					</div>
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-sm-3 col-sm-offset-3">
				{{ Form::label('cultural', 'Cultural:', array(
							'class' => 'control-label'
						)) }}
					<div class="radio">
					  <label>
						{{ Form::radio('cultural', 'si') }}
					    Si
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('cultural', 'no') }}
					    No
					  </label>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="radio">
					  <label>
						{{ Form::radio('actividad_cult', 'danza') }}
					    Danza
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('actividad_cult', 'artes_plasticas') }}
					    Artes Plásticas
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('actividad_cult', 'banda_de_guerra') }}
					    Banda de Guerra
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('actividad_cult', 'guitarra') }}
					    Guitarra
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('actividad_cult', 'teatro') }}
					    Teatro
					  </label>
					</div>
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-sm-12">
				{{ Form::label('dificultad_ext_esc', 'Tiene alguna dificultad con alguna de estas actividades?', array(
							'class' => 'control-label'
						)) }}
					<div class="radio">
					  <label>
						{{ Form::radio('dificultad_ext_esc', 'si') }}
					    Si
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('dificultad_ext_esc', 'no') }}
					    No
					  </label>
					</div>
					{{ Form::label('dificultad_ext_esc_texto', 'Escriba cual es la dificultad y la propuesta para corregir la situación:', array(
							'class' => 'control-label'
						)) }}
					<textarea name="dificultad_ext_esc_texto" id="dificultad_ext_esc_texto" class="form-control" rows="3"></textarea>
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-sm-4">
					{{ Form::label('trabaja', '¿Tiene trabajo remunerado?', array(
							'class' => 'control-label'
						)) }}
					<div class="radio">
					  <label>
						{{ Form::radio('trabaja', 'si') }}
					    Si
					  </label>
					</div>
					<div class="radio">
					  <label>
						{{ Form::radio('trabaja', 'no') }}
					    No
					  </label>
					</div>
				</div>
				<div class="col-sm-8">
					{{ Form::label('trabajo_horas', '¿Cuántas horas trabaja?', array(
							'class' => 'col-sm-4 control-label'
					)) }}
					<div class="col-sm-8">
						{{ Form::text('trabajo_horas', null, array( 
								'class' => 'form-control'
						)) }}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
				{{ Form::label('problemas', 'En este momento ¿Qué tipo de problemas le preocupa enfrentar?', array(
							'class' => 'control-label'
				)) }}
				<div class="row">
					<div class="col-sm-3">
						<div class="checkbox">
						  <label>
						    <input name="academicos" type="checkbox" value="academicos">
						    Académicos
						  </label>
						</div>
						<div class="checkbox">
						  <label>
						    <input name="emocionales" type="checkbox" value="emocionales">
						    Emocionales
						  </label>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="checkbox">
						  <label>
						    <input name="familiares" type="checkbox" value="familiares">
						    Familiares
						  </label>
						</div>
						<div class="checkbox">
						  <label>
						    <input name="de_salud" type="checkbox" value="de_salud">
						    De Salud
						  </label>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="checkbox">
						  <label>
						    <input name="politicos" type="checkbox" value="politicos">
						    Políticos
						  </label>
						</div>
						<div class="checkbox">
						  <label>
						    <input name="religiosos" type="checkbox" value="religiosos">
						    Religiosos
						  </label>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="checkbox">
						  <label>
						    <input name="economicos" type="checkbox" value="economicos">
						    Económicos
						  </label>
						</div>
						<div class="checkbox">
						  <label>
						    <input name="otro" type="checkbox" value="otro">
						    Otro
						  </label>
						 
						</div>
						{{ Form::text('otro_problema', null, array( 
							'class' => 'form-control',
							'placeholder' => 'Especifique'
						)) }}
						
					</div>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					
					{{ Form::submit('Enviar Formulario', array( 
							'class' => 'btn btn-primary btn-lg'
						)) }}
					{{ Form::close() }}
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
@stop