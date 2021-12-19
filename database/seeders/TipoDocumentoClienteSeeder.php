<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use JeroenNoten\LaravelAdminLte\Components\Tool\Datatable;
use Illuminate\Support\Facades\DB;

class TipoDocumentoClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'tipodocumentocliente')->insert( ['Detalle' => 'RUC'] );
        DB::table( 'tipodocumentocliente')->insert( ['Detalle' => 'DNI'] );
        DB::table( 'tipodocumentocliente')->insert( ['Detalle' => 'PASAPORTE'] );
        DB::table( 'tipodocumentocliente')->insert( ['Detalle' => 'CARNET DE EXTRANGERIA'] );
        DB::table( 'tipodocumentocliente')->insert( ['Detalle' => 'CEDULA DIPLOMATICA DE IDENTIDAD'] );
        DB::table( 'tipodocumentocliente')->insert( ['Detalle' => 'NINGUNO'] );
    }
}
