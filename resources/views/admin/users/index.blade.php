@extends('admin.template.main')


@section('title', 'Lista de usuarios')


@section('contenido')

  @section('subtitulo')
		<h1 id="agregar_prestador">LISTA DE PRESTADORES</h1>
  @endsection

	<div class="container">          
  		<table class="table table-bordered">
    		<thead>
      		<tr>
        		<th>NOMBRE PRESTADOR</th>
        		<th style="width: 30%">OPCIONES</th>
      		</tr>
    		</thead>
    		<tbody>
    		@foreach($users as $user)
      		<tr>
        		<td>{{ $user }}</td>
        		<td><a href="#" class="btn btn-danger">Editar</a><a href="#" class="btn btn-warning" style="margin-left: 20%;">Eliminar</a></td>
      		</tr>
      		@endforeach
    		</tbody>
  		</table>
	</div>

	<a id="btn_agregar" href="{{ route('users.create') }}" class="btn btn-warning btn-lg">AGREGAR PRESTADOR</a>


@endsection