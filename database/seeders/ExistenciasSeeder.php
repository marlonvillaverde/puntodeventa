<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventario;
use Illuminate\Support\Facades\DB;

class ExistenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /// deberia crear al menos 3 existencias por cada articulo
        $articulos = Inventario::All();
        foreach( $articulos as $articulo ){
             DB::table( 'existencias')->insert( [
                'inventario_id' => $articulo->inventario_id,
                'descripcion' => 'UNIDAD',
                'unidades' => rand(1,500),
                'pcompra'=> rand(1,1000),
                'pventa' => rand(1,1000)
            ] );
            DB::table( 'existencias')->insert( [
                'inventario_id' => $articulo->inventario_id,
                'descripcion' => 'DOCENA',
                'unidades' => rand(1,500),
                'pcompra'=> rand(1,500),
                'pventa' => rand(1,500)
            ] );
            DB::table( 'existencias')->insert( [
                'inventario_id' => $articulo->inventario_id,
                'descripcion' => 'CAJA',
                'unidades' => rand(1,500),
                'pcompra'=> rand(1,500),
                'pventa' => rand(1,500)
            ] );

        }
    }
}
