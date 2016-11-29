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
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Código:</th>
								<td>{{$remitente->id}}</td>
							</tr>
							<tr>
								<th>Nombre:</th>
								<td>{{$remitente->nombre}}</td>
							</tr>
							<tr>
								<th>Cédula o rif:</th>
								<td>{{$remitente->cedula}}</td>
							</tr>
							<tr>
								<th>Teléfono:</th>
								<td>{{$remitente->telefono}}</td>
							</tr>
							<tr>
								<th>Email:</th>
								<td>{{$remitente->email}}</td>
							</tr>
							<tr>
								<th>Direción:</th>
								<td>{{$remitente->direccion}}</td>
							</tr>
						</thead>
					</table>
					</div>
					<br><br>
					<a href="{{url('/remitentes/editar/' . $remitente->id)}}" class="btn btn-success">Editar</a>
					<a href="{{url('/remitentes/eliminar/' . $remitente->id)}}" class="btn btn-warning pull-right">Eliminar</a>
				</div>
			</div>
		</div>
	</div>
@endsection