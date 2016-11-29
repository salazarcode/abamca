@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection

@section('contentheader_title')
	Envíos
@endsection

@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10">
				<div class="panel panel-default">
					<div class="panel-body">
					@if(isset($envios) && count($envios))
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Código</th>
									<th>Remitente</th>
									<th>Destinatario</th>
									<th>Fecha de creado</th>
									<th>Estado</th>
									<th colspan="3">Opciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($envios as $envio)
								<tr>
									<td>{{$envio->id}}</td>
									<td>
										<a href="{{url('/remitentes/'.$envio->remitente_id)}}">{{App\Remitente::find($envio->remitente_id)->nombre}}</a>
									</td>
									<td>
										<a href="{{url('/destinatarios/'.$envio->destinatario_id)}}">{{App\Destinatario::find($envio->destinatario_id)->nombre}}</a>
									</td>
									<td>{{$envio->created_at}}</td>
									<td>{{App\Estado::find($envio->estado_id)->titulo}}</td>
									<td> <a href="{{url('/envios/' . $envio->id)}}" class="btn btn-primary">Ver completo</a> </td>
									<td> <a href="{{url('/envios/editar/' . $envio->id)}}" class="btn btn-success">Editar</a> </td>
									<td> <a href="{{url('/envios/eliminar/' . $envio->id)}}" class="btn btn-warning">Eliminar</a> </td>
								</tr>
								@endforeach
							</tbody>
						</table>
					@else
						<h3>No hay envios guardados aún.</h3>
					@endif
					<br><br>
					<a href="{{url('/envios/crear')}}" class="btn btn-primary">Crear Envío</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
