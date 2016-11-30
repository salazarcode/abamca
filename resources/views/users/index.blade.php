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
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Lista de usuarios registrados</div>

					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Correo</th>
									<th>Rol Usuario</th>
									<th>Rol Admin</th>
									<th colspan="3">Opciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $user)
								<tr>
									<td>{{$user->name}}</td>
									<td>{{$user->email}}</td>


									<form action="{{url('/actualizarRoles')}}" method="post">
										{{csrf_field()}}
										<input type="hidden" name="id" value="{{$user->id}}">
										<td>
											<input type="checkbox" name="user_role" {{ App\User::find($user->id)->hasRole('User') ? 'Checked' : ""}}>
										</td>

										<td>
											<input type="checkbox" name="admin_role" {{ App\User::find($user->id)->hasRole('Admin') ? 'Checked' : ""}}>
										</td>

										<td>
											<input type="submit" class="btn btn-success" value="Actualizar roles">
										</td>
									</form>


									<td><a href="{{url('/usuarios/'.$user->id)}}" class="btn btn-primary">Ver perfil</a></td>
									<td><a href="{{url('/usuarios/eliminar/'.$user->id)}}" class="btn btn-warning">Eliminar</a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<a href="{{url('/usuarios/crear')}}" class="btn btn-primary">Crear usuario nuevo</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
