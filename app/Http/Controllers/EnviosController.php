<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Envio;

use App\Remitente;

use App\Destinatario;

use App\Estado;

use PDF;

class EnviosController extends Controller
{
    public function index(){
    	return view('envios.index', ['envios' => Envio::where('user_id', \Auth::user()->id)->get()]);
    }

    public function todos(){
        return view('envios.todos', ['envios' => Envio::all()]);        
    }

    public function ver($id){
    	return view('envios.single', ['envio' => Envio::find($id)]);
    }
    
    public function crear(){
        $remitentes = Remitente::all();
        $destinatarios = Destinatario::all();
        return view('envios.formulario', [
            'remitentes' => $remitentes,
            'destinatarios' => $destinatarios
        ]);
    }

    public function editar($id){
        $estados = Estado::all();
        $remitentes = Remitente::all();
        $destinatarios = Destinatario::all();
    	return view('envios.formulario', [
            'envio' => Envio::find($id),
            'remitentes' => $remitentes,
            'destinatarios' => $destinatarios,
            'estados' => $estados
        ]);
    }

    public function eliminar($id){
    	Envio::destroy($id);
        if (\Auth::user()->hasRole('Admin')) {
            return redirect('/todos-los-envios');
        } else {
            return redirect('/envios');
        }
    }

    public function guardar(Request $request){
    	isset($request->id) ? $envio = Envio::find($request->id) : $envio = new Envio;

        
        if(!isset($request->id))
            $envio->user_id = \Auth::user()->id;

		$envio->remitente_id = $request->remitente_id;
		$envio->destinatario_id = $request->destinatario_id;

        if(isset($request->id)){
            if (isset($request->estado_id)) {
                $envio->estado_id = $request->estado_id;
            }
        } else { 
            $envio->estado_id = Estado::where('titulo', 'Esperando')->first()->id;
        }

		$envio->ciudad_destino = $request->ciudad_destino;
		$envio->estado_destino = $request->estado_destino;
		$envio->peso = $request->peso;
		$envio->valor_declarado = $request->valor_declarado;
		$envio->desripcion = $request->desripcion;
		$envio->save();
		if (\Auth::user()->hasRole('Admin')) {
            return redirect('/todos-los-envios');
        } else {
            return redirect('/envios');
        }
        
    }

    public function pdf($id){
        $envio = Envio::find($id);
        $remitente = $envio->remitente;
        $destinatario = $envio->destinatario;
        $pdf = PDF::loadView('pdf.envio', [
            'envio' => $envio,
            'remitente' => $remitente,
            'destinatario' =>  $destinatario
        ]);
        return $pdf->stream();
    }
}
