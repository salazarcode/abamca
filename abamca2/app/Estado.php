<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public function envios(){
    	return $this->hasMany('App\Envio');
    }
}
