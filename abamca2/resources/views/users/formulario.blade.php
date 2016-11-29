@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection

@section('contentheader_title')
	Usuarios
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10">
				<div class="panel panel-default">
					<div class="panel-heading">Nuevo usuario</div>

					<div class="panel-body">
						<form action="{{url('/usuarios')}}" method="post">
							{{csrf_field()}}
			                <div class="form-group has-feedback">
			                    <input type="text" class="form-control" placeholder="Nombre completo" name="name"/>
			                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
			                </div>
			                <div class="form-group has-feedback">
			                    <input type="email" class="form-control" placeholder="Email" name="email"/>
			                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			                </div>
			                <div class="form-group has-feedback">
			                    <input type="password" class="form-control" placeholder="Clave" name="password"/>
			                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			                </div>
			                <div class="row">
			                    <div class="col-xs-12">
			                        <button type="submit" class="btn btn-primary btn-block btn-flat">Crear</button>
			                    </div><!-- /.col -->
			                </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection