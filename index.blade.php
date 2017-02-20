@extends('plantillas.main')

@section('title', 'Pagina de Inicio')

@section('tituloPagina')
	Pagina de Inicio
@stop
@section('link')
	<link rel="stylesheet" type="text/css" href="{{asset('css/styleIndexAdmin.css')}}">
@stop
@section('arribaDerecha')
		{!! Form::open(['route' => 'administracion.usuario.index', 'method' => 'GET', 'class' => 'navbar-form', 'role' => 'search']) !!}
		<div class="input-group">
				{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar..']) !!}
		    <span class="input-group-btn">
		        <button type="submit" class="btn btn-default" type="button">Buscar</button>
		    </span>
	  </div>
		{!! Form::close() !!}
@stop
@section('subtituloPagina')
	Usuarios Registrados en el sistema
@stop
@section('contenido')

	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>NOMBRE</th>
				<th>APELLIDO</th>
				<th>NIVEL</th>
				<th>CORREO</th>
				<th>ACCION</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($user as $usr)
				<tr>
					<td>{{$usr->nombre}}</td>
					<td>{{$usr->apellido}}</td>
					<td>{{$usr->nivel}}</td>
					<td>{{$usr->correo}}</td>
					<td>
						<a href="{{ route('administracion.usuario.reportes', $usr->id_datos_personales) }}" title="Historial"><i class="fa fa-list tamanioIcono cambioEditar"></i></a>
						<a href="{{ route('administracion.usuario.edit', $usr->id_datos_personales) }}" title="Editar"><i class="fa fa-wrench tamanioIcono cambioEditar"></i></a>
						<a href="{{ route('administracion.usuario.destroy', $usr->id_datos_personales) }}" title="Eliminar"><i class="fa fa-close tamanioIcono cambioEliminar"></i></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>


@stop
@section('render')
	{!! $user->render() !!}
@stop
@section('script')

@stop
@section('content')

@stop
