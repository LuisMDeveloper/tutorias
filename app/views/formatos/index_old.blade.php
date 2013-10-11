@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="list-group">
			{{ HTML::link('formato/1a', 'Formato 1A', array('class' => 'list-group-item')) }}
			{{ HTML::link('formato/1', 'Formato 1', array('class' => 'list-group-item')) }}
			{{ HTML::link('formato/habitos_estudio', 'Formato 2', array('class' => 'list-group-item')) }}
		</div>
	</div>
</div>
@stop