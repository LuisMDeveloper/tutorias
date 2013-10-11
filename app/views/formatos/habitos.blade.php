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
							{{ Form::radio('p1', '3',null,array('class'=>'p1')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p1', '2',null,array('class'=>'p1')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p1', '1',null,array('class'=>'p1')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p1', '0',null,array('class'=>'p1')) }}
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
							{{ Form::radio('p2', '3',null,array('class'=>'p2')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p2', '2',null,array('class'=>'p2')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p2', '1',null,array('class'=>'p2')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p2', '0',null,array('class'=>'p2')) }}
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
							{{ Form::radio('p3', '3',null,array('class'=>'p3')) }}
							    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p3', '2',null,array('class'=>'p3')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p3', '1',null,array('class'=>'p3')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p3', '0',null,array('class'=>'p3')) }}
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
							{{ Form::radio('p4', '3',null,array('class'=>'p4')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p4', '2',null,array('class'=>'p4')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p4', '1',null,array('class'=>'p4')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p4', '0',null,array('class'=>'p4')) }}
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
							{{ Form::radio('p5', '3',null,array('class'=>'p5')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p5', '2',null,array('class'=>'p5')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p5', '1',null,array('class'=>'p5')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p5', '0',null,array('class'=>'p5')) }}
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
							{{ Form::radio('p6', '3',null,array('class'=>'p6')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p6', '2',null,array('class'=>'p6')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p6', '1',null,array('class'=>'p6')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p6', '0',null,array('class'=>'p6')) }}
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
							{{ Form::radio('p7', '3',null,array('class'=>'p7')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p7', '2',null,array('class'=>'p7')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p7', '1',null,array('class'=>'p7')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p7', '0',null,array('class'=>'p7')) }}
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
							{{ Form::radio('p8', '3',null,array('class'=>'p8')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p8', '2',null,array('class'=>'p8')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p8', '1',null,array('class'=>'p8')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p8', '0',null,array('class'=>'p8')) }}
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
							{{ Form::radio('p9', '3',null,array('class'=>'p9')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p9', '2',null,array('class'=>'p9')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p9', '1',null,array('class'=>'p9')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p9', '0',null,array('class'=>'p9')) }}
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
							{{ Form::radio('p10', '3',null,array('class'=>'p10')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p10', '2',null,array('class'=>'p10')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p10', '1',null,array('class'=>'p10')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p10', '0',null,array('class'=>'p10')) }}
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
							{{ Form::radio('p11', '3',null,array('class'=>'p11')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p11', '2',null,array('class'=>'p11')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p11', '1',null,array('class'=>'p11')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p11', '0',null,array('class'=>'p11')) }}
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
							{{ Form::radio('p12', '3',null,array('class'=>'p12')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p12', '2',null,array('class'=>'p12')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p12', '1',null,array('class'=>'p12')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p12', '0',null,array('class'=>'p12')) }}
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
							{{ Form::radio('p13', '3',null,array('class'=>'p13')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p13', '2',null,array('class'=>'p13')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p13', '1',null,array('class'=>'p13')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p13', '0',null,array('class'=>'p13')) }}
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
							{{ Form::radio('p14', '3',null,array('class'=>'p14')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p14', '2',null,array('class'=>'p14')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p14', '1',null,array('class'=>'p14')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p14', '0',null,array('class'=>'p14')) }}
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
							{{ Form::radio('p15', '3',null,array('class'=>'p15')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p15', '2',null,array('class'=>'p15')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p15', '1',null,array('class'=>'p15')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p15', '0',null,array('class'=>'p15')) }}
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
							{{ Form::radio('p16', '3',null,array('class'=>'p16')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p16', '2',null,array('class'=>'p16')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p16', '1',null,array('class'=>'p16')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p16', '0',null,array('class'=>'p16')) }}
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
							{{ Form::radio('p17', '3',null,array('class'=>'p17')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p17', '2',null,array('class'=>'p17')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p17', '1',null,array('class'=>'p17')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p17', '0',null,array('class'=>'p17')) }}
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
							{{ Form::radio('p18', '3',null,array('class'=>'p18')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p18', '2',null,array('class'=>'p18')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p18', '1',null,array('class'=>'p18')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p18', '0',null,array('class'=>'p18')) }}
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
							{{ Form::radio('p19', '3',null,array('class'=>'p19')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p19', '2',null,array('class'=>'p19')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p19', '1',null,array('class'=>'p19')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p19', '0',null,array('class'=>'p19')) }}
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
							{{ Form::radio('p20', '3',null,array('class'=>'p20')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p20', '2',null,array('class'=>'p20')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p20', '1',null,array('class'=>'p20')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p20', '0',null,array('class'=>'p20')) }}
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
							{{ Form::radio('p21', '3',null,array('class'=>'p21')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p21', '2',null,array('class'=>'p21')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p21', '1',null,array('class'=>'p21')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p21', '0',null,array('class'=>'p21')) }}
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
							{{ Form::radio('p22', '3',null,array('class'=>'p22')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p22', '2',null,array('class'=>'p22')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p22', '1',null,array('class'=>'p22')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p22', '0',null,array('class'=>'p22')) }}
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
							{{ Form::radio('p23', '3',null,array('class'=>'p23')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p23', '2',null,array('class'=>'p23')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p23', '1',null,array('class'=>'p23')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p23', '0',null,array('class'=>'p23')) }}
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
							{{ Form::radio('p24', '3',null,array('class'=>'p24')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p24', '2',null,array('class'=>'p24')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p24', '1',null,array('class'=>'p24')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p24', '0',null,array('class'=>'p24')) }}
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
							{{ Form::radio('p25', '3',null,array('class'=>'p25')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p25', '2',null,array('class'=>'p25')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p25', '1',null,array('class'=>'p25')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p25', '0',null,array('class'=>'p25')) }}
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
							{{ Form::radio('p26', '3',null,array('class'=>'p26')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p26', '2',null,array('class'=>'p26')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p26', '1',null,array('class'=>'p26')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p26', '0',null,array('class'=>'p26')) }}
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
							{{ Form::radio('p27', '3',null,array('class'=>'p27')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p27', '2',null,array('class'=>'p27')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p27', '1',null,array('class'=>'p27')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p27', '0',null,array('class'=>'p27')) }}
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
							{{ Form::radio('p28', '3',null,array('class'=>'p28')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p28', '2',null,array('class'=>'p28')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p28', '1',null,array('class'=>'p28')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p28', '0',null,array('class'=>'p28')) }}
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
							{{ Form::radio('p29', '3',null,array('class'=>'p29')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p29', '2',null,array('class'=>'p29')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p29', '1',null,array('class'=>'p29')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p29', '0',null,array('class'=>'p29')) }}
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
							{{ Form::radio('p30', '3',null,array('class'=>'p30')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p30', '2',null,array('class'=>'p30')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p30', '1',null,array('class'=>'p30')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p30', '0',null,array('class'=>'p30')) }}
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
							{{ Form::radio('p31', '3',null,array('class'=>'p31')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p31', '2',null,array('class'=>'p31')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p31', '1',null,array('class'=>'p31')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p31', '0',null,array('class'=>'p31')) }}
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
							{{ Form::radio('p32', '3',null,array('class'=>'p32')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p32', '2',null,array('class'=>'p32')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p32', '1',null,array('class'=>'p32')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p32', '0',null,array('class'=>'p32')) }}
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
							{{ Form::radio('p33', '3',null,array('class'=>'p33')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p33', '2',null,array('class'=>'p33')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p33', '1',null,array('class'=>'p33')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p33', '0',null,array('class'=>'p33')) }}
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
							{{ Form::radio('p34', '3',null,array('class'=>'p34')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p34', '2',null,array('class'=>'p34')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p34', '1',null,array('class'=>'p34')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p34', '0',null,array('class'=>'p34')) }}
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
							{{ Form::radio('p35', '3',null,array('class'=>'p35')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p35', '2',null,array('class'=>'p35')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p35', '1',null,array('class'=>'p35')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p35', '0',null,array('class'=>'p35')) }}
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
							{{ Form::radio('p36', '3',null,array('class'=>'p36')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p36', '2',null,array('class'=>'p36')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p36', '1',null,array('class'=>'p36')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p36', '0',null,array('class'=>'p36')) }}
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
							{{ Form::radio('p37', '3',null,array('class'=>'p37')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p37', '2',null,array('class'=>'p37')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p37', '1',null,array('class'=>'p37')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p37', '0',null,array('class'=>'p37')) }}
						    N
						  </label>
						</div>
					</div>
				</div>
				<hr/>

				<div class="row">	
					<div class="col-sm-12">
						{{ Form::label('p38', '38.¿Busco apuntes o libros en los momentos en que debería estar estudiando?', array(
									'class' => 'control-label')) }}
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p38', '3',null,array('class'=>'p38')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p38', '2',null,array('class'=>'p38')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p38', '1',null,array('class'=>'p38')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p38', '0',null,array('class'=>'p38')) }}
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
							{{ Form::radio('p39', '3',null,array('class'=>'p39')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p39', '2',null,array('class'=>'p39')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p39', '1',null,array('class'=>'p39')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p39', '0',null,array('class'=>'p39')) }}
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
							{{ Form::radio('p40', '3',null,array('class'=>'p40')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p40', '2',null,array('class'=>'p40')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p40', '1',null,array('class'=>'p40')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p40', '0',null,array('class'=>'p40')) }}
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
							{{ Form::radio('p41', '3',null,array('class'=>'p41')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p41', '2',null,array('class'=>'p41')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p41', '1',null,array('class'=>'p41')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p41', '0',null,array('class'=>'p41')) }}
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
							{{ Form::radio('p42', '3',null,array('class'=>'p42')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p42', '2',null,array('class'=>'p42')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p42', '1',null,array('class'=>'p42')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p42', '0',null,array('class'=>'p42')) }}
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
							{{ Form::radio('p43', '3',null,array('class'=>'p43')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p43', '2',null,array('class'=>'p43')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p43', '1',null,array('class'=>'p43')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p43', '0',null,array('class'=>'p43')) }}
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
							{{ Form::radio('p44', '3',null,array('class'=>'p44')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p44', '2',null,array('class'=>'p44')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p44', '1',null,array('class'=>'p44')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p44', '0',null,array('class'=>'p44')) }}
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
							{{ Form::radio('p45', '3',null,array('class'=>'p45')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p45', '2',null,array('class'=>'p45')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p45', '1',null,array('class'=>'p45')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p45', '0',null,array('class'=>'p45')) }}
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
							{{ Form::radio('p46', '3',null,array('class'=>'p46')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p46', '2',null,array('class'=>'p46')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p46', '1',null,array('class'=>'p46')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p46', '0',null,array('class'=>'p46')) }}
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
							{{ Form::radio('p47', '3',null,array('class'=>'p47')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p47', '2',null,array('class'=>'p47')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p47', '1',null,array('class'=>'p47')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p47', '0',null,array('class'=>'p47')) }}
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
							{{ Form::radio('p48', '3',null,array('class'=>'p48')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p48', '2',null,array('class'=>'p48')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p48', '1',null,array('class'=>'p48')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p48', '0',null,array('class'=>'p48')) }}
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
							{{ Form::radio('p49', '3',null,array('class'=>'p49')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p49', '2',null,array('class'=>'p49')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p49', '1',null,array('class'=>'p49')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p49', '0',null,array('class'=>'p49')) }}
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
							{{ Form::radio('p50', '3',null,array('class'=>'p50')) }}
							    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p50', '2',null,array('class'=>'p50')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p50', '1',null,array('class'=>'p50')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p50', '0',null,array('class'=>'p50')) }}
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
							{{ Form::radio('p51', '3',null,array('class'=>'p51')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p51', '2',null,array('class'=>'p51')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p51', '1',null,array('class'=>'p51')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p51', '0',null,array('class'=>'p51')) }}
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
							{{ Form::radio('p52', '3',null,array('class'=>'p52')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p52', '2',null,array('class'=>'p52')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p52', '1',null,array('class'=>'p52')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p52', '0',null,array('class'=>'p52')) }}
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
							{{ Form::radio('p53', '3',null,array('class'=>'p53')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p53', '2',null,array('class'=>'p53')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p53', '1',null,array('class'=>'p53')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p53', '0',null,array('class'=>'p53')) }}
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
							{{ Form::radio('p54', '3',null,array('class'=>'p54')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p54', '2',null,array('class'=>'p54')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p54', '1',null,array('class'=>'p54')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p54', '0',null,array('class'=>'p54')) }}
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
							{{ Form::radio('p55', '3',null,array('class'=>'p55')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p55', '2',null,array('class'=>'p55')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p55', '1',null,array('class'=>'p55')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p55', '0',null,array('class'=>'p55')) }}
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
							{{ Form::radio('p56', '3',null,array('class'=>'p56')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p56', '2',null,array('class'=>'p56')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p56', '1',null,array('class'=>'p56')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p56', '0',null,array('class'=>'p56')) }}
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
							{{ Form::radio('p57', '3',null,array('class'=>'p57')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p57', '2',null,array('class'=>'p57')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p57', '1',null,array('class'=>'p57')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p57', '0',null,array('class'=>'p57')) }}
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
							{{ Form::radio('p58', '3',null,array('class'=>'p58')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p58', '2',null,array('class'=>'p58')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p58', '1',null,array('class'=>'p58')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p58', '0',null,array('class'=>'p58')) }}
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
							{{ Form::radio('p59', '3',null,array('class'=>'p59')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p59', '2',null,array('class'=>'p59')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p59', '1',null,array('class'=>'p59')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p59', '0',null,array('class'=>'p59')) }}
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
							{{ Form::radio('p60', '3',null,array('class'=>'p60')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p60', '2',null,array('class'=>'p60')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p60', '1',null,array('class'=>'p60')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p60', '0',null,array('class'=>'p60')) }}
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
							{{ Form::radio('p61', '3',null,array('class'=>'p61')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p61', '2',null,array('class'=>'p61')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p61', '1',null,array('class'=>'p61')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p61', '0',null,array('class'=>'p61')) }}
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
							{{ Form::radio('p62', '3',null,array('class'=>'p62')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p62', '2',null,array('class'=>'p62')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p62', '1',null,array('class'=>'p62')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p62', '0',null,array('class'=>'p62')) }}
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
							{{ Form::radio('p63', '3',null,array('class'=>'p63')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p63', '2',null,array('class'=>'p63')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p63', '1',null,array('class'=>'p63')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p63', '0',null,array('class'=>'p63')) }}
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
							{{ Form::radio('p64', '3',null,array('class'=>'p64')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p64', '2',null,array('class'=>'p64')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p64', '1',null,array('class'=>'p64')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p64', '0',null,array('class'=>'p64')) }}
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
							{{ Form::radio('p65', '3',null,array('class'=>'p65')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p65', '2',null,array('class'=>'p65')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p65', '1',null,array('class'=>'p65')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p65', '0',null,array('class'=>'p65')) }}
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
							{{ Form::radio('p66', '3',null,array('class'=>'p66')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p66', '2',null,array('class'=>'p66')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p66', '1',null,array('class'=>'p66')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p66', '0',null,array('class'=>'p66')) }}
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
							{{ Form::radio('p67', '3',null,array('class'=>'p67')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p67', '2',null,array('class'=>'p67')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p67', '1',null,array('class'=>'p67')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p67', '0',null,array('class'=>'p67')) }}
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
							{{ Form::radio('p68', '3',null,array('class'=>'p68')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p68', '2',null,array('class'=>'p68')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p68', '1',null,array('class'=>'p68')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p68', '0',null,array('class'=>'p68')) }}
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
							{{ Form::radio('p69', '3',null,array('class'=>'p69')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p69', '2',null,array('class'=>'p69')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p69', '1',null,array('class'=>'p69')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p69', '0',null,array('class'=>'p69')) }}
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
							{{ Form::radio('p70', '3',null,array('class'=>'p70')) }}
						    S
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p70', '2',null,array('class'=>'p70')) }}
						    A
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						 <label>
							{{ Form::radio('p70', '1',null,array('class'=>'p70')) }}
						    R
						  </label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="radio">
						  <label>
							{{ Form::radio('p70', '0',null,array('class'=>'p70')) }}
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