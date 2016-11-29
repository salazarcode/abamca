@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection



@section('contentheader_title')
	Inicio
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10">
				<div class="panel panel-default">

					<div class="panel-body">
						@if(Auth::user()->hasRole('User')) 
						<p>
						Bienvenido <b>{{Auth::user()->name}}</b>, realiza tus operaciones ABAMCA por éste medio y consúltanos cualquier duda. Para realizar un envío deberás cargar previamente el remitente y el destinatario, no lo olvides.
						</p>
						@else
						<p>Bienvenido administrador.</p>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
