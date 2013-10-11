@extends('layouts.master')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Usuarios</h3>
	</div>
	<div class="panel-body">
	
	</div>
	<div class="table-responsive">
	<table class="table table-striped table-bordered table-condensed">
	<tr>
		<th>Numero de Control</th>
		<th>Nombre</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Grupo</th>
		<th>Acciones</th>
	</tr>
	@foreach ($users as $key => $user)
		<tr>
			<td>{{ $user->username }}</td>
			<td>{{ $user->userProfile->nombre }}</td>
			<td>{{ $user->userProfile->aPaterno }}</td>
			<td>{{ $user->userProfile->aMaterno }}</td>
			<td>{{ $user->userProfile->grupo->semestre }}{{ $user->userProfile->grupo->grupo }}</td>
			<td>
				<div class="btn-group">
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-credit-card"></span></button>
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button>
				</div>
			</td>
		</tr>
	@endforeach	
	</table>
	</div>
</div>
@stop