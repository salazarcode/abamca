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
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Código:</th>
								<td>{{$destinatario->id}}</td>
							</tr>
							<tr>
								<th>Nombre:</th>
								<td>{{$destinatario->nombre}}</td>
							</tr>
							<tr>
								<th>Cédula o rif:</th>
								<td>{{$destinatario->cedula}}</td>
							</tr>
							<tr>
								<th>Teléfono:</th>
								<td>{{$destinatario->telefono}}</td>
							</tr>
							<tr>
								<th>Email:</th>
								<td>{{$destinatario->email}}</td>
							</tr>
							<tr>
								<th>Direción:</th>
								<td>{{$destinatario->direccion}}</td>
							</tr>
						</thead>
					</table>
					</div>
					<br><br>
					<a href="{{url('/destinatarios/editar/' . $destinatario->id)}}" class="btn btn-success">Editar</a>
					<a href="{{url('/destinatarios/eliminar/' . $destinatario->id)}}" class="btn btn-warning pull-right">Eliminar</a>
				</div>
			</div>
		</div>
	</div>
@endsection