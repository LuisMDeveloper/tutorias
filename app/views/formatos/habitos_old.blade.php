@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-12">
		@foreach ($errors->all('<div class="alert alert-danger"><span class="glyphicon glyphicon-minus-sign"></span>  :message</div>') as $error)
			{{ $error }}
		@endforeach
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="glyphicon glyphicon-file"></span>Hábitos de Estudio</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12">
						<h4>
							<p>
								INSTRUCCIONES: Lea cuidadosamente cada pregunta y seleccione la respuesta de la letra correspondiente 
								(S = siempre, A = a menudo, R = raras veces, N = nunca).
							</p>
				            <p>
				            	Seleccione la respuesta que refleje más acertadamente su forma de trabajo en cada especto que se 
				            	plantea. Para que los resultados de éste cuestionario realmente le sean útiles, es importante 
				            	que conteste con toda honestidad.
				            </p>
				        </h4>
					</div>
				</div>
				<hr/>

				{{ Form::open() }}
				<input name="user_id" type="hidden" value="{{ $user->id }}" />
								<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p1', '1.¿Tomo en cuenta todas mis materias al distribuir el tiempo de estudio?:', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p1', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p1', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p1', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p1', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p2', '2.¿Responsabilizo de mis fracasos académicos a otras personas o las circunstancias?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p2', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p2', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p2', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p2', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p3', '3.¿Hay personas conversando o ruidos que molesten o distraigan mientras estudio?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p3', '3') }}
							    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p3', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p3', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p3', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p4', '4.¿Escribo notas de todas mis clases?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p4', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p4', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p4', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p4', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p5', '5.¿Adopto una actitud crítica ante lo que leo y obtengo mis propias conclusiones?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p5', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p5', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p5', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p5', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p6', '6.¿Durante un examen distribuyo mi tiempo de acuerdo con el número de preguntas formuladas?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p6', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p6', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p6', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p6', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p7', '7.¿Falto a mis clases?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p7', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p7', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p7', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p7', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p8', '8.¿Planifico mis actividades?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p8', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p8', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p8', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p8', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p9', '9.¿Siento satisfacción al intervenir con actividades relacionadas con el estudio?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p9', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p9', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p9', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p9', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p10', '10.¿Interfieren mis problemas personales en mis intenciones de estudio?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p10', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p10', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p10', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p10', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p11', '11.¿Utilizo abreviaturas para escribir más rápido?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p11', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p11', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p11', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p11', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p12', '12.¿Subrayo las ideas que me parecen más importantes durante la lectura?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p12', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p12', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p12', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p12', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p13', '13.¿En los exámenes señalo de manera visible las respuestas?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p13', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p13', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p13', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p13', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p14', '14.¿Frecuento a compañeros que presentan un bajo rendimiento académico?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p14', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p14', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p14', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p14', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p15', '15.¿Destino tiempo de clases para mis materias?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p15', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p15', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p15', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p15', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p16', '16.¿Estoy seguro(a) de que realmente me gusta estudiar?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p16', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p16', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p16', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p16', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p17', '17.¿Mientras estudio me distraigo con asuntos ajenos al tema?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p17', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p17', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p17', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p17', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p18', '18.¿Anoto textualmente las fórmulas, las leyes, los principios, las reglas, etc. que expone el maestro en la clase?
				', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p18', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p18', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p18', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p18', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p19', '19.¿Exploro e investigó el contenido general de un libro antes de comenzar su lectura sistemática?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p19', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p19', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p19', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p19', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p20', '20.¿Durante un examen leo dos veces la misma pregunta?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p20', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p20', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p20', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p20', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p21', '21.¿Aclaro mis dudas con el profesor?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p21', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p21', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p21', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p21', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p22', '22.¿Elaboro un plan de estudios antes de empezar mi periodo de clases?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p22', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p22', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p22', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p22', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p23', '23.¿Me siento frustrado por ser estudiante?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p23', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p23', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p23', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p23', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p24', '24.¿Cuándo estudio tengo cerca destractores visuales como la televisión, el retrato de mi novia(o), artistas, carteles?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p24', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p24', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p24', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p24', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p25', '25.¿Me resulta fácil concentrarme en la exposición del maestro?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p25', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p25', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p25', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p25', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p26', '26.¿Repito en voz alta y con el libro cerrado el material que considero más relevante, a fin de asimilarlo?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p26', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p26', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p26', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p26', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p27', '27.¿Tengo confianza en mis conocimientos o capacidades de presentar un examen?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p27', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p27', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p27', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p27', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p28', '28.¿Adopto actitudes positivas ante mis compañeros y maestros?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p28', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p28', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p28', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p28', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p29', '29.¿Inicio y concluyo puntualmente cada una de mis actividades?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p29', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p29', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p29', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p29', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p30', '30.¿Encuentro agradable el ambiente de la intitución educativa donde estudio?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p30', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p30', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p30', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p30', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p31', '31.Cuando estudio ¿tengo demasiados objetos sobre mi mesa?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p31', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p31', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p31', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p31', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p32', '32.¿Cuento con hojas y plumas o lápiz durante cada una de mis clases?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p32', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p32', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p32', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p32', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p33', '33.¿Me pongo a leer aunque me sienta cansado?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p33', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p33', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p33', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p33', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p34', '34.¿Estoy nervioso(a) antes de presentar un examen?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p34', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p34', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p34', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p34', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p35', '35.¿Cumplo con mis tareas o actividades extra clase?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p35', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p35', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p35', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p35', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p36', '36.Cuando estudio ¿me concentro durante periodos cortos y dedico mas tiempo a fantasear?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p36', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p36', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p36', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p36', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p37', '37.¿Dudo cuando tengo que tomar una decisión respecto a mis estudios?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p37', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p37', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p37', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p37', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p38', '38.¿Busco apuntes o libros en los momentos en que debería estar estudiando?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p38', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p38', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p38', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p38', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p39', '39.¿Copio los ejemplos que proporciona el maestro?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p39', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p39', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p39', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p39', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p40', '40.¿Elaboro cuadros sinópticos o diagramas a fin de seleccionar y sintetizar lo que e leído?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p40', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p40', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p40', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p40', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p41', '41.¿Duermo normalmente la noche anterior al examen?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p41', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p41', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p41', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p41', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p42', '42.¿Investigo por iniciativa propia aspectos relacionados con las diferentes materias de estudio?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p42', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p42', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p42', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p42', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p43', '43.¿Reviso diariamente el horario que elaboré por escrito para saber cual es la actividad planeada para determinar hora?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p43', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p43', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p43', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p43', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p44', '44.¿Considero que el estudio es tedioso y desagradable?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p44', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p44', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p44', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p44', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>
				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p45', '45.¿Cuento con una área bien ventilada, iluminada y ordenada para estudiar?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p45', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p45', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p45', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p45', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p46', '46.¿Pido prestados apuntes a mis compañeros de clase?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p46', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p46', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p46', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p46', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p47', '47.¿Tengo dificultades para aprender lo que leo?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p47', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p47', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p47', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p47', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p48', '48.¿Reviso las respuestas de los exámenes antes de entregarlo?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p48', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p48', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p48', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p48', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p49', '49.¿Me quedo con dudas sobre lo que expuso el profesor?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p49', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p49', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p49', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p49', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p50', '50.¿Utilizo la mayor parte de mi tiempo en cosas productivas y significativas?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p50', '3') }}
							    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p50', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p50', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p50', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p51', '51.¿Estoy dispuesto y tengo deseo de estudiar en cualquier momento?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p51', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p51', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p51', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p51', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p52', '52.¿Acudo a las bibliotecas o centros de información?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p52', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p52', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p52', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p52', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p53', '53.¿Mis apuntes de clases están limpios, ordenados y legibles, de tal manera que puedo entenderlos posteriormente?', array('class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p53', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p53', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p53', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p53', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p54', '54.¿Consulto el diccionario cuando desconozco el significado de alguna palabra?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p54', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p54', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p54', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p54', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p55', '55.¿Escribo legiblemente en mis apuntes de clase?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p55', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p55', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p55', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p55', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p56', '56.¿Estudio diariamente en mis apuntes de clase?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p56', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p56', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p56', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p56', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p57', '57.¿Tengo un registro del tiempo que destino al estudio de cada día?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p57', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p57', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p57', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p57', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p58', '58.¿Me fijo una calificación mínima por obtener en cada una de mis materias de un periodo escolar?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p58', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p58', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p58', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p58', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p59', '59.¿Escucho música mientras estudio?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p59', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p59', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p59', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p59', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p60', '60.¿Vuelvo a leer los apuntes de clases anteriores?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p60', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p60', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p60', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p60', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p61', '61.¿Me formulo preguntas a partir de las lecturas que realizo?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p61', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p61', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p61', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p61', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p62', '62.¿Respondo de manera precisa las preguntas que me formulan en los exámenes?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p62', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p62', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p62', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p62', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p63', '63.¿Durante la clase intercambio con mis compañeros comentarios ajenos a la misma?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p63', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p63', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p63', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p63', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p64', '64.¿Cuento con programa de actividades diarias?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p64', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p64', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p64', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p64', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p65', '65.¿Cuándo tengo que estudiar me encuentro cansado o somnoliento?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p65', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p65', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p65', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p65', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p66', '66.¿Antes de empezar a estudiar consigo papel, goma de borrar, pluma o lápiz y demás recursos necesarios?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p66', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p66', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p66', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p66', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p67', '67.¿Utilizo mis propias palabras para redactar mis apuntes en clase?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p67', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p67', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p67', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p67', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p68', '68.¿Elaboro resúmenes, empleando mis propias palabras, sobre los temas expuestos en el libro?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p68', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p68', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p68', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p68', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p69', '69.¿Preparo con anticipación lo exámenes?', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p69', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p69', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p69', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p69', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p70', '70.¿Asisto puntualmente a cada una de mis clases? ', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p70', '3') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p70', '2') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p70', '1') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p70', '0') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>
				{{ Form::submit('Enviar Formato', array( 'class' => 'btn btn-primary btn-lg')) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@stop