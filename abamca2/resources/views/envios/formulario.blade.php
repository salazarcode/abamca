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
					@if(isset($envio))
						<form action="{{url('/envios')}}" method="post">
							{{csrf_field()}}

							<input type="hidden" name="id" value="{{$envio->id}}">

							<br>
							<label for="estado_id">Estado: </label>
							<select name="estado_id" id="estado_id" class="form-control">
								@foreach($estados as $estado)
								<option value="{{$estado->id}}" {{$estado->id == $envio->estado_id ? "selected" : ""}}>{{$estado->titulo}}</option>
								@endforeach
							</select>

							<br>
							<label for="remitente_id">Remitente: </label>
							<select name="remitente_id" id="remitente_id" class="form-control">
								@foreach($remitentes as $remitente)
								<option value="{{$remitente->id}}" {{$remitente->id == $envio->remitente_id ? "selected" : ""}}>{{$remitente->nombre}}</option>
								@endforeach
							</select>

							<br>
							<label for="destinatario_id">Destinatario: </label>
							<select name="destinatario_id" id="destinatario_id" class="form-control">
								@foreach($destinatarios as $destinatario)
								<option value="{{$destinatario->id}}" {{$destinatario->id == $envio->destinatario_id ? "selected" : ""}}>{{$destinatario->nombre}}</option>
								@endforeach
							</select>

							<br>
							<label for="ciudad_destino">Ciudad destino: </label>
							<input type="text" class="form-control" name="ciudad_destino" id="ciudad_destino" placeholder="Ciudad destino" value="{{$envio->ciudad_destino}}">

							<br>
							<label for="estado_destino">Estado destino: </label>
							<input type="text" class="form-control" name="estado_destino" id="estado_destino" placeholder="Estado destino" value="{{$envio->estado_destino}}">

							<br>
							<label for="peso">Peso: </label>
							<input type="text" class="form-control" name="peso" id="peso" placeholder="Peso" value="{{$envio->peso}}">

							<br>
							<label for="valor_declarado">Valor declarado: </label>
							<input type="text" class="form-control" name="valor_declarado" id="valor_declarado" placeholder="Valor declarado" value="{{$envio->valor_declarado}}">

							<br>
							<label for="desripcion">Descripción: </label>
							<input type="text" class="form-control" name="desripcion" id="desripcion" placeholder="Descripción" value="{{$envio->desripcion}}">
							
							<br><br>
							<input type="submit" class="btn btn-primary" value="Guardar">
						</form>
					@else
						<form action="{{url('/envios')}}" method="post">
							{{csrf_field()}}

							<br>
							<label for="remitente_id">Remitente: </label>
							<select name="remitente_id" id="remitente_id" class="form-control">
								@foreach($remitentes as $remitente)
								<option value="{{$remitente->id}}">{{$remitente->nombre}}</option>
								@endforeach
							</select>

							<br>
							<label for="destinatario_id">Destinatario: </label>
							<select name="destinatario_id" id="destinatario_id" class="form-control">
								@foreach($destinatarios as $destinatario)
								<option value="{{$destinatario->id}}">{{$destinatario->nombre}}</option>
								@endforeach
							</select>

							<br>
							<label for="ciudad_destino">Ciudad destino: </label>
							<input type="text" class="form-control" name="ciudad_destino" id="ciudad_destino" placeholder="Ciudad destino">

							<br>
							<label for="estado_destino">Estado destino: </label>
							<input type="text" class="form-control" name="estado_destino" id="estado_destino" placeholder="Estado destino">

							<br>
							<label for="peso">Peso: </label>
							<input type="text" class="form-control" name="peso" id="peso" placeholder="Peso">

							<br>
							<label for="valor_declarado">Valor declarado: </label>
							<input type="text" class="form-control" name="valor_declarado" id="valor_declarado" placeholder="Valor declarado">

							<br>
							<label for="desripcion">Descripción: </label>
							<input type="text" class="form-control" name="desripcion" id="desripcion" placeholder="Descripción">
							
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