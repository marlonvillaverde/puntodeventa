<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->increments('inventario_id');            
            $table->integer('subcategoria_id')->unsigned();
            $table->string('codigo', 20)->Unique();
            $table->string('nombre', 80)->Unique();
            $table->string('modelo', 40)->nullable();
            $table->integer('existencia')->Unsigned()->nullable();
            $table->unsignedInteger('marca_id')->Unsigned();
            $table->string('slug');
            $table->float('iva',6,2);
            $table->float('inc',6,2);
            $table->string('photo_path', 2048)->nullable();
            $table->integer('ivg')->unisgned();
            $table->foreign('subcategoria_id')->references('subcategoria_id')->on('subcategorias');
            $table->foreign('marca_id')->references('marca_id')->on('marcas');


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
        Schema::dropIfExists('inventario');
    }
}
