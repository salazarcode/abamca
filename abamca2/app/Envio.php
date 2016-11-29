<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    public function destinatario(){
    	return $this->belongsTo('App\Destinatario');
    }
    public function remitente(){
    	return $this->belongsTo('App\Remitente');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function estado(){
    	return $this->belongsTo('App\Estado');
    }
}
