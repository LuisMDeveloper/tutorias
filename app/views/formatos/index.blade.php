@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="list-group">
			{{ HTML::link('formato/1a','Formato para alumnos de primer semestre', array('class' => 'list-group-item')) }}
			{{ HTML::link('formato/1','Formato para alumnos de tercer semestre', array('class' => 'list-group-item')) }}
			{{ HTML::link('formato/habitos_estudio','Hábitos de estudio (para todos los alumnos)', array('class' => 'list-group-item')) }}
		</div>
	</div>
</div>
@stop