@extends('layouts.master')

@section('content')
<div class="row">
	{{ Form::open() }}
	{{ Form::label('p1', 'Pregunta 1') }}
	{{ Form::radio('p1', 'a'); }}
	{{ Form::radio('p1', 'b'); }}
	{{ Form::radio('p1', 'c'); }}
	{{ Form::radio('p1', 'd'); }}
	{{ Form::submit('Enviar')}}
	{{ Form::close() }}
</div>
@stop