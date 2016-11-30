@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection

@section('contentheader_title')
	Destinatarios
@endsection

@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
					@if(isset($destinatarios) && count($destinatarios))
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
								@foreach($destinatarios as $destinatario)
								<tr>
									<td>{{$destinatario->nombre}}</td>
									<td>{{$destinatario->cedula}}</td>
									<td>{{$destinatario->telefono}}</td>
									<td> <a href="{{url('/destinatarios/' . $destinatario->id)}}" class="btn btn-primary">Ver completo</a> </td>
									<td> <a href="{{url('/destinatarios/editar/' . $destinatario->id)}}" class="btn btn-success">Editar</a> </td>
									<td> <a href="{{url('/destinatarios/eliminar/' . $destinatario->id)}}" class="btn btn-warning">Eliminar</a> </td>
								</tr>
								@endforeach
							</tbody>
						</table>
					@else
						<h3>No hay destinatarios guardados aún.</h3>
					@endif
					<br><br>
					<a href="{{url('/destinatarios/crear')}}" class="btn btn-primary">Crear destinatario</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
