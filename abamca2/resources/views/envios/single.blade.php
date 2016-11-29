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
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Código:</th>
								<td>{{$envio->id}}</td>
							</tr>
							<tr>
								<th>Estado:</th>
								<td>{{App\Estado::find($envio->estado_id)->titulo}}</td>
							</tr>
							<tr>
								<th>Remitente:</th>
								<td><a href="{{url('/remitentes/'.$envio->remitente_id)}}">{{App\Remitente::find($envio->remitente_id)->nombre}}</a></td>
							</tr>
							<tr>
								<th>Destinatario:</th>
								<td><a href="{{url('/destinatarios/'.$envio->destinatario_id)}}">{{App\Destinatario::find($envio->destinatario_id)->nombre}}</a></td>
							</tr>
							<tr>
								<th>Ciudad destino:</th>
								<td>{{$envio->ciudad_destino}}</td>
							</tr>
							<tr>
								<th>Estado destino:</th>
								<td>{{$envio->estado_destino}}</td>
							</tr>
							<tr>
								<th>Peso:</th>
								<td>{{$envio->peso}}</td>
							</tr>
							<tr>
								<th>Valor declarado:</th>
								<td>{{$envio->valor_declarado}}</td>
							</tr>
							<tr>
								<th>Descripción:</th>
								<td>{{$envio->desripcion}}</td>
							</tr>
						</thead>
					</table>
					</div>
					<br><br>
					<a href="{{url('/envios/editar/' . $envio->id)}}" class="btn btn-success">Editar</a>
					<a href="{{url('/envios/eliminar/' . $envio->id)}}" class="btn btn-warning pull-right">Eliminar</a>
				</div>
			</div>
		</div>
	</div>
@endsection