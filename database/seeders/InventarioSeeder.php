<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Inventario;
use Illuminate\Support\Str;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
         /*
Schema::create('inventario', function (Blueprint $table) {
            $table->increments('inventario_id');            
            $table->integer('subcategoria_id')->unsigned();
            $table->string('codigo', 20)->Unique();
            $table->string('nombre', 80)->Unique();
            $table->integer('existencia')->Unsigned();
            $table->unsignedInteger('marca')->Unsigned();
            $table->string('slug');
            $table->string('photo_path', 2048)->nullable();
            $table->integer('ivg')->unisgned();
            $table->foreign('subcategoria_id')->references('subcategoria_id')->on('subcategorias');
            $table->timestamps();
        });
        */
         
    }
}
