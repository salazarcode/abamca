<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Destinatario;

class DestinatariosController extends Controller
{
    public function index(){
    	return view('destinatarios.index', ['destinatarios' => Destinatario::all()]);
    }
    public function crear(){
    	return view('destinatarios.formulario');
    }
    public function ver($id){
    	return view('destinatarios.single', ['destinatario' => Destinatario::find($id)]);
    }

    public function editar($id){
    	return view('destinatarios.formulario', ['destinatario' => Destinatario::find($id)]);
    }

    public function eliminar($id){
    	Destinatario::destroy($id);
		return redirect('/destinatarios');
    }
    public function guardar(Request $request){
    	isset($request->id) ? $destinatario = Destinatario::find($request->id) : $destinatario = new Destinatario;
		$destinatario->nombre = $request->nombre;
		$destinatario->cedula = $request->cedula;
		$destinatario->telefono = $request->telefono;
		$destinatario->email = $request->email;
		$destinatario->direccion = $request->direccion;
		$destinatario->save();
		return redirect('/destinatarios');
    }
}