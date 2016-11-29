<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Estado;

class EstadosController extends Controller
{
    public function index(){
    	return view('estados.index', ['estados' => Estado::all()]);
    }
    public function crear(){
    	return view('estados.formulario');
    }

    public function editar($id){
    	return view('estados.formulario', ['estado' => Estado::find($id)]);
    }

    public function eliminar($id){
    	Estado::destroy($id);
		return redirect('/estados');
    }
    public function guardar(Request $request){
    	isset($request->id) ? $estado = Estado::find($request->id) : $estado = new Estado;
		$estado->titulo = $request->titulo;
		$estado->save();
		return redirect('/estados');
    }
}
