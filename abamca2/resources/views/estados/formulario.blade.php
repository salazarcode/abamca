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
					@if(isset($estado))
						<form action="{{url('/estados')}}" method="post">
							{{csrf_field()}}

							<input type="hidden" name="id" value="{{$estado->id}}">

							<br>
							<label for="titulo">Título: </label>
							<input type="text" name="titulo" id="titulo" placeholder="Título" class="form-control" value="{{$estado->titulo}}">

							
							<br><br>
							<input type="submit" class="btn btn-primary" value="Guardar">
						</form>
					@else
						<form action="{{url('/estados')}}" method="post">
							{{csrf_field()}}
							<br>
							<label for="titulo">Título: </label>
							<input type="text" name="titulo" id="titulo" placeholder="Título" class="form-control">

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