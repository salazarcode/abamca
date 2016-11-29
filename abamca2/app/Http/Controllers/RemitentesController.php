<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Remitente;

class RemitentesController extends Controller
{
    public function index(){
    	return view('remitentes.index', ['remitentes' => Remitente::all()]);
    }

    public function ver($id){
    	return view('remitentes.single', ['remitente' => Remitente::find($id)]);
    }
    
    public function crear(){
        return view('remitentes.formulario');
    }

    public function editar($id){
    	return view('remitentes.formulario', ['remitente' => Remitente::find($id)]);
    }

    public function eliminar($id){
    	Remitente::destroy($id);
		return redirect('/remitentes');
    }
    public function guardar(Request $request){
    	isset($request->id) ? $remitente = Remitente::find($request->id) : $remitente = new Remitente;
		$remitente->nombre = $request->nombre;
		$remitente->cedula = $request->cedula;
		$remitente->telefono = $request->telefono;
		$remitente->email = $request->email;
		$remitente->direccion = $request->direccion;
		$remitente->save();
		return redirect('/remitentes');
    }
}
