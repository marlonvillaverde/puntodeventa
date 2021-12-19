<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('existencias', function (Blueprint $table) {
            $table->increments( 'existencia_id' );
            $table->unsignedInteger( 'inventario_id');
            $table->string( 'descripcion', 10 )->Unique();
            $table->integer( 'unidades' )->Unsigned();
            $table->integer( 'pcompra' )->Unsigned();
            $table->Integer( 'pventa' )->Unsigned();
            $table->foreign( 'inventario_id')->references('inventario_id')->on('inventario');
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
        Schema::dropIfExists('existencias');
    }
}
