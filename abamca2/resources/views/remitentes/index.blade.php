@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection

@section('contentheader_title')
	Remitentes
@endsection

@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10">
				<div class="panel panel-default">
					<div class="panel-body">
					@if(isset($remitentes) && count($remitentes))
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Cédula</th>
									<th>Teléfono</th>
									<th colspan="3">Opciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($remitentes as $remitente)
								<tr>
									<td>{{$remitente->nombre}}</td>
									<td>{{$remitente->cedula}}</td>
									<td>{{$remitente->telefono}}</td>
									<td> <a href="{{url('/remitentes/' . $remitente->id)}}" class="btn btn-primary">Ver completo</a> </td>
									<td> <a href="{{url('/remitentes/editar/' . $remitente->id)}}" class="btn btn-success">Editar</a> </td>
									<td> <a href="{{url('/remitentes/eliminar/' . $remitente->id)}}" class="btn btn-warning">Eliminar</a> </td>
								</tr>
								@endforeach
							</tbody>
						</table>
					@else
						<h3>No hay remitentes guardados aún.</h3>
					@endif
					<br><br>
					<a href="{{url('/remitentes/crear')}}" class="btn btn-primary">Crear remitente</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
