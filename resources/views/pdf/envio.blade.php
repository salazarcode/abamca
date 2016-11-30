<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Envío</title>
    <style>
    	*{
    		font-family: verdana;
    	}

        table, th, td {
           border: 1px solid black !important;
           padding: 5px;
        }
        table{
        	margin: auto;
        }
        .subtitulo{
        	font-size: 18pt;
        }
    </style>	
</head>
<body>
	<h1 style="color:navy">ABAM C.A.</h1>
	<p>02919350257 - 02913140994</p>

	<h3>Envío código: <span style="color:green">{{$envio->id}}</span></h3>
	<h3>Fecha: <span style="color:green">{{$envio->created_at}}</span></h3>

	<table>
		<tbody>
			<tr>
				<td colspan="2"><div class="subtitulo">Remitente</div></td>
			</tr>
			<tr>
				<td>Nombre:</td>
				<td>{{$remitente->nombre}}</td>
			</tr>
			<tr>
				<td>Cédula o RIF:</td>
				<td>{{$remitente->cedula}}</td>
			</tr>
			<tr>
				<td>Teléfono:</td>
				<td>{{$remitente->telefono}}</td>
			</tr>
			<tr>
				<td>Email:</td>
				<td>{{$remitente->email}}</td>
			</tr>
			<tr>
				<td>Dirección:</td>
				<td>{{$remitente->direccion}}</td>
			</tr>
			<tr>
				<td colspan="2"><div class="subtitulo">Destinatario</div></td>
			</tr>
			<tr>
				<td>Nombre:</td>
				<td>{{$destinatario->nombre}}</td>
			</tr>
			<tr>
				<td>Cédula o RIF:</td>
				<td>{{$destinatario->cedula}}</td>
			</tr>
			<tr>
				<td>Teléfono:</td>
				<td>{{$destinatario->telefono}}</td>
			</tr>
			<tr>
				<td>Email:</td>
				<td>{{$destinatario->email}}</td>
			</tr>
			<tr>
				<td>Dirección:</td>
				<td>{{$destinatario->direccion}}</td>
			</tr>
			<tr>
				<td colspan="2"><div class="subtitulo">Datos del envío</div></td>
			</tr>
			<tr>
				<td>Ciudad de destino:</td>
				<td>{{$envio->ciudad_destino}}</td>
			</tr>
			<tr>
				<td>Estado de destino:</td>
				<td>{{$envio->estado_destino}}</td>
			</tr>
			<tr>
				<td>Peso:</td>
				<td>{{$envio->peso}}</td>
			</tr>
			<tr>
				<td>Valor declarado:</td>
				<td>{{$envio->valor_declarado}}</td>
			</tr>
			<tr>
				<td>Descripción:</td>
				<td>{{$envio->desripcion}}</td>
			</tr>
		</tbody>
	</table>

</body>
</html>