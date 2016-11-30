@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection

@section('contentheader_title')
	Estados
@endsection

@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
					@if(isset($estados) && count($estados))
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Título</th>
									<th colspan="2">Opciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($estados as $estado)
								<tr>
									<td>{{$estado->titulo}}</td>
									<td> <a href="{{url('/estados/editar/' . $estado->id)}}" class="btn btn-success">Editar</a> </td>
									<td> <a href="{{url('/estados/eliminar/' . $estado->id)}}" class="btn btn-warning">Eliminar</a> </td>
								</tr>
								@endforeach
							</tbody>
						</table>
					@else
						<h3>No hay estados guardados aún.</h3>
					@endif
					<br><br>
					<a href="{{url('/estados/crear')}}" class="btn btn-primary">Crear estado</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
