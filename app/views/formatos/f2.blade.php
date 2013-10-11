
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
								<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p1', '1.¿Tomo en cuenta todas mis materias al distribuir el tiempo de estudio?:', array(
									'class' => 'control-label'
								)) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p1', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p1', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p1', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p1', 'N') }}
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
							{{ Form::radio('p2', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p2', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p2', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p2', 'N') }}
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
							{{ Form::radio('p3', 'S') }}
							    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p3', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p3', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p3', 'N') }}
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
							{{ Form::radio('p4', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p4', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p4', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p4', 'N') }}
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
							{{ Form::radio('p5', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p5', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p5', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p5', 'N') }}
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
							{{ Form::radio('p6', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p6', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p6', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p6', 'N') }}
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
							{{ Form::radio('p7', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p7', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p7', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p7', 'N') }}
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
							{{ Form::radio('p8', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p8', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p8', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p8', 'N') }}
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
							{{ Form::radio('p9', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p9', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p9', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p9', 'N') }}
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
							{{ Form::radio('p10', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p10', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p10', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p10', 'N') }}
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
							{{ Form::radio('p11', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p11', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p11', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p11', 'N') }}
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
							{{ Form::radio('p12', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p12', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p12', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p12', 'N') }}
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
							{{ Form::radio('p13', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p13', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p13', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p13', 'N') }}
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
							{{ Form::radio('p14', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p14', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p14', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p14', 'N') }}
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
							{{ Form::radio('p15', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p15', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p15', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p15', 'N') }}
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
							{{ Form::radio('p16', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p16', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p16', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p16', 'N') }}
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
							{{ Form::radio('p17', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p17', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p17', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p17', 'N') }}
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
							{{ Form::radio('p18', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p18', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p18', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p18', 'N') }}
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
							{{ Form::radio('p19', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p19', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p19', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p19', 'N') }}
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
							{{ Form::radio('p20', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p20', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p20', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p20', 'N') }}
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
							{{ Form::radio('p21', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p21', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p21', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p21', 'N') }}
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
							{{ Form::radio('p22', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p22', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p22', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p22', 'N') }}
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
							{{ Form::radio('p23', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p23', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p23', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p23', 'N') }}
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
							{{ Form::radio('p24', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p24', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p24', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p24', 'N') }}
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
							{{ Form::radio(25, 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio(25, 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p25', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p25', 'N') }}
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
							{{ Form::radio('p26', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p26', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p26', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p26', 'N') }}
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
							{{ Form::radio('p27', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p27', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p27', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p27', 'N') }}
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
							{{ Form::radio('p28', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p28', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p28', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p28', 'N') }}
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
							{{ Form::radio('p29', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p29', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p29', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p29', 'N') }}
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
							{{ Form::radio('p30', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p30', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p30', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p30', 'N') }}
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
							{{ Form::radio('p31', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p31', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p31', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p31', 'N') }}
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
							{{ Form::radio('p32', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p32', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p32', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p32', 'N') }}
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
							{{ Form::radio('p33', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p33', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p33', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p33', 'N') }}
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
							{{ Form::radio('p34', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p34', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p34', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p34', 'N') }}
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
							{{ Form::radio('p35', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p35', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p35', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p35', 'N') }}
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
							{{ Form::radio('p36', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p36', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p36', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p36', 'N') }}
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
							{{ Form::radio('p37', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p37', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p37', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p37', 'N') }}
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
							{{ Form::radio('p38', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p38', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p38', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p38', 'N') }}
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
							{{ Form::radio('p39', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p39', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p39', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p39', 'N') }}
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
							{{ Form::radio('p40', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p40', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p40', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p40', 'N') }}
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
							{{ Form::radio('p41', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p41', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p41', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p41', 'N') }}
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
							{{ Form::radio('p42', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p42', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p42', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p42', 'N') }}
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
							{{ Form::radio('p43', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p43', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p43', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p43', 'N') }}
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
							{{ Form::radio('p44', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p44', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p44', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p44', 'N') }}
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
							{{ Form::radio('p45', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p45', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p45', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p45', 'N') }}
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
							{{ Form::radio('p46', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p46', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p46', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p46', 'N') }}
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
							{{ Form::radio('p47', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p47', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p47', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p47', 'N') }}
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
							{{ Form::radio('p48', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p48', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p48', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p48', 'N') }}
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
							{{ Form::radio('p49', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p49', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p49', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p49', 'N') }}
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
							{{ Form::radio('p50', 'S') }}
							    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p50', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p50', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p50', 'N') }}
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
							{{ Form::radio('p51', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p51', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p51', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p51', 'N') }}
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
							{{ Form::radio('p52', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p52', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p52', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p52', 'N') }}
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
							{{ Form::radio('p53', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p53', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p53', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p53', 'N') }}
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
							{{ Form::radio('p54', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p54', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p54', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p54', 'N') }}
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
							{{ Form::radio('p55', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p55', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p55', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p55', 'N') }}
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
							{{ Form::radio('p56', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p56', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p56', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p56', 'N') }}
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
							{{ Form::radio('p57', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p57', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p57', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p57', 'N') }}
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
							{{ Form::radio('p58', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p58', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p58', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p58', 'N') }}
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
							{{ Form::radio('p59', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p59', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p59', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p59', 'N') }}
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
							{{ Form::radio('p60', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p60', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p60', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p60', 'N') }}
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
							{{ Form::radio('p61', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p61', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p61', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p61', 'N') }}
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
							{{ Form::radio('p62', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p62', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p62', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p62', 'N') }}
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
							{{ Form::radio('p63', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p63', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p63', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p63', 'N') }}
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
							{{ Form::radio('p64', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p64', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p64', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p64', 'N') }}
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
							{{ Form::radio('p65', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p65', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p65', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p65', 'N') }}
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
							{{ Form::radio('p66', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p66', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p66', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p66', 'N') }}
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
							{{ Form::radio('p67', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p67', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p67', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p67', 'N') }}
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
							{{ Form::radio('p68', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p68', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p68', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p68', 'N') }}
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
							{{ Form::radio('p69', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p69', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p69', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p69', 'N') }}
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
							{{ Form::radio('p70', 'S') }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p70', 'A') }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p70', 'R') }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p70', 'N') }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>
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