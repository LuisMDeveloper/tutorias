@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-sm-3">
		<ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#">
                <span class="badge pull-right">{{ $numAdmins }}</span>
                Administradores</a></li>
            <li class="active"><a href="#">
                <span class="badge pull-right">{{ $numCoord }}</span>
                Coordinadores</a></li>
            <li class="active"><a href="#">
                <span class="badge pull-right">{{ $numTutores }}</span>
                Tutores</a></li>
            <li class="active"><a href="#">
                <span class="badge pull-right">{{ $numTutorados }}</span>
                Tutorados</a></li>
        </ul>
	</div>
	<div class="col-sm-9">
		@if(count($noActivados) >= 1)
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Usuarios Sin Activar</h3>
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
		<th>Acciones</th>
	</tr>
	@foreach ($noActivados as $noActivado)
		<!-- {{ Form::open() }} -->
		<tr>
			<td>{{ $noActivado->username }}</td>
			<td>{{ $noActivado->userProfile->nombre }}</td>
			<td>{{ $noActivado->userProfile->aPaterno }}</td>
			<td>{{ $noActivado->userProfile->aMaterno }}</td>
			<td>
				<div class="btn-group">
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-credit-card"></span></button>
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Editar</button>
					<div class="btn-group">
					  <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Activar</button>
					  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					    <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" role="menu">
					    <li><a href="activate/admin/{{ $noActivado->id }}">Como Administrador</a></li>
					    <li><a href="activate/coordinator/{{ $noActivado->id }}">Como Coordinador</a></li>
					    <li><a href="activate/tutor/{{ $noActivado->id }}">Como Tutor</a></li>
					  </ul>
					</div>
				</div>
			</td>
		</tr>
		<!-- {{ Form::close() }} -->
	@endforeach	
	</table>
	</div>
</div>
@endif


@if(count($administradores) >= 1)
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Administradores</h3>
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
		<th>Acciones</th>
	</tr>
	@foreach ($administradores as $admin)
		<tr>
			<td>{{ $admin->username }}</td>
			<td>{{ $admin->userProfile->nombre }}</td>
			<td>{{ $admin->userProfile->aPaterno }}</td>
			<td>{{ $admin->userProfile->aMaterno }}</td>
			<td>
				<div class="btn-group">
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-credit-card"></span></button>
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Editar</button>
					<div class="btn-group">
					  <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Activar</button>
					  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
					    <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" role="menu">
					    <li><a href="activate/admin/{{ $admin->id }}">Como Administrador</a></li>
					    <li><a href="activate/coordinator/{{ $admin->id }}">Como Coordinador</a></li>
					    <li><a href="activate/tutor/{{ $admin->id }}">Como Tutor</a></li>
					    <li class="divider"></li>
					    <li><a href="deactivate/{{ $admin->id }}">Desactivar</a></li>
					  </ul>
					</div>
				</div>
			</td>
		</tr>
	@endforeach	
	</table>
	</div>
</div>
@endif

@if(count($tutores) >= 1)
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Tutores</h3>
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
		<th>Acciones</th>
	</tr>
	@foreach ($tutores as $tutor)
		<tr>
			<td>{{ $tutor->username }}</td>
			<td>{{ $tutor->userProfile->nombre }}</td>
			<td>{{ $tutor->userProfile->aPaterno }}</td>
			<td>{{ $tutor->userProfile->aMaterno }}</td>
			<td>
				<div class="btn-group">
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-credit-card"></span></button>
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Editar</button>
					<div class="btn-group">
					  <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Activar</button>
					  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
					    <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" role="menu">
					    <li><a href="activate/admin/{{ $tutor->id }}">Como Administrador</a></li>
					    <li><a href="activate/coordinator/{{ $tutor->id }}">Como Coordinador</a></li>
					    <li><a href="activate/tutor/{{ $tutor->id }}">Como Tutor</a></li>
					    <li class="divider"></li>
					    <li><a href="deactivate/{{ $tutor->id }}">Desactivar</a></li>
					  </ul>
					</div>
				</div>
			</td>
		</tr>
	@endforeach	
	</table>
	</div>
</div>
@endif

@if(count($coordinadores) >= 1)
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Coordinadores</h3>
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
		<th>Acciones</th>
	</tr>
	@foreach ($coordinadores as $coordinador)
		<tr>
			<td>{{ $coordinador->username }}</td>
			<td>{{ $coordinador->userProfile->nombre }}</td>
			<td>{{ $coordinador->userProfile->aPaterno }}</td>
			<td>{{ $coordinador->userProfile->aMaterno }}</td>
			<td>
				<div class="btn-group">
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-credit-card"></span></button>
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Editar</button>
					<div class="btn-group">
					  <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Activar</button>
					  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
					    <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" role="menu">
					    <li><a href="activate/admin/{{ $coordinador->id }}">Como Administrador</a></li>
					    <li><a href="activate/coordinator/{{ $coordinador->id }}">Como Coordinador</a></li>
					    <li><a href="activate/tutor/{{ $coordinador->id }}">Como Tutor</a></li>
					    <li class="divider"></li>
					    <li><a href="deactivate/{{ $coordinador->id }}">Desactivar</a></li>
					  </ul>
					</div>
				</div>
			</td>
		</tr>
	@endforeach	
	</table>
	</div>
</div>
@endif


<div class="panel panel-primary">
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
	@foreach ($tutorados as $tutorado)
		<tr>
			<td>{{ $tutorado->username }}</td>
			<td>{{ $tutorado->userProfile->nombre }}</td>
			<td>{{ $tutorado->userProfile->aPaterno }}</td>
			<td>{{ $tutorado->userProfile->aMaterno }}</td>
			<td>{{ $tutorado->userProfile->grupo->semestre }}{{ $tutorado->userProfile->grupo->grupo }}</td>
			<td>
				<div class="btn-group">
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-credit-card"></span></button>
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Editar</button>
				</div>
			</td>
		</tr>
	@endforeach	
	</table>
	</div>
</div>
	</div>
</div>



@stop