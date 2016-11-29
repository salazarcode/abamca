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
					@if(isset($remitente))
						<form action="{{url('/remitentes')}}" method="post">
							{{csrf_field()}}

							<input type="hidden" name="id" value="{{$remitente->id}}">

							<br>
							<label for="nombre">Nombre: </label>
							<input type="text" name="nombre" id="nombre" placeholder="Nombre completo" class="form-control" value="{{$remitente->nombre}}">

							<br>
							<label for="cedula">Cedula o rif: </label>
							<input type="text" name="cedula" id="cedula" placeholder="Cédula o rif" class="form-control" value="{{$remitente->cedula}}">

							<br>
							<label for="telefono">Teléfono: </label>
							<input type="text" name="telefono" id="telefono" placeholder="Teléfono" class="form-control" value="{{$remitente->telefono}}">

							<br>
							<label for="email">Email: </label>
							<input type="text" name="email" id="email" placeholder="Email" class="form-control" value="{{$remitente->email}}">

							<br>
							<label for="direccion">Dirección: </label>
							<input type="text" name="direccion" id="direccion" placeholder="Dirección" class="form-control" value="{{$remitente->direccion}}">
							
							<br><br>
							<input type="submit" class="btn btn-primary" value="Guardar">
						</form>
					@else
						<form action="{{url('/remitentes')}}" method="post">
							{{csrf_field()}}
							<br>
							<label for="nombre">Nombre: </label>
							<input type="text" name="nombre" id="nombre" placeholder="Nombre completo" class="form-control">

							<br>
							<label for="cedula">Cedula o rif: </label>
							<input type="text" name="cedula" id="cedula" placeholder="Cédula o rif" class="form-control">

							<br>
							<label for="telefono">Teléfono: </label>
							<input type="text" name="telefono" id="telefono" placeholder="Teléfono" class="form-control">

							<br>
							<label for="email">Email: </label>
							<input type="text" name="email" id="email" placeholder="Email" class="form-control">

							<br>
							<label for="direccion">Dirección: </label>
							<input type="text" name="direccion" id="direccion" placeholder="Dirección" class="form-control">
							
							<br><br>
							<input type="submit" class="btn btn-primary" value="Guardar">
						</form>
					@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection