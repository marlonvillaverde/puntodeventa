<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('cliente_id');
            $table->integer('tipodocumentocliente_id')->unsigned();
            $table->string('documento');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->integer('distrito')->unsigned();
            $table->float( 'saldo', 10, 2);
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
        Schema::dropIfExists('clientes');
    }
}
