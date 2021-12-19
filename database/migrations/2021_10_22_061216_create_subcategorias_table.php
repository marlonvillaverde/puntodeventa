<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
               
        Schema::create('subcategorias', function (Blueprint $table) {
            $table->increments( 'subcategoria_id');
            $table->String('detalle');
            $table->String( 'slug' );
            $table->unsignedInteger( 'categoria_id');
            $table->string('photo_path', 2048)->nullable();
            $table->foreign('categoria_id')->references('categoria_id')->on('categorias');
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
        Schema::dropIfExists('subcategorias');        
    }
}
