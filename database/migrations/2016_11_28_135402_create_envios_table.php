<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();            
            $table->integer('remitente_id')->index();
            $table->integer('destinatario_id')->index();
            $table->string('ciudad_destino');
            $table->string('estado_destino');
            $table->float('peso');
            $table->float('valor_declarado');
            $table->string('desripcion');
            $table->integer('estado_id')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('envios');
    }
}
