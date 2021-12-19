<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\UnidadMedida;

class UnidadMedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $record = new UnidadMedida();
        $record->codigo = "UNI";
        $record->descripcion = "Unidad";
        $record->save();

        $record = new UnidadMedida();
        $record->codigo = "XBX";
        $record->descripcion = "Caja";
        $record->save();

        $record = new UnidadMedida();
        $record->codigo = "KGM";
        $record->descripcion = "Kilogramo";
        $record->save();

        $record = new UnidadMedida();
        $record->codigo = "LTR";
        $record->descripcion = "Litro";
        $record->save();

        $record = new UnidadMedida();
        $record->codigo = "XLT";
        $record->descripcion = "Lote";
        $record->save();

        $record = new UnidadMedida();
        $record->codigo = "MTR";
        $record->descripcion = "Metro";
        $record->save();

        $record = new UnidadMedida();
        $record->codigo = "MTK";
        $record->descripcion = "Metro Cuadrado";
        $record->save();
        
        $record = new UnidadMedida();
        $record->codigo = "DOCE";
        $record->descripcion = "Docena";
        $record->save();

        $record = new UnidadMedida();
        $record->codigo = "RESM";
        $record->descripcion = "Resma";
        $record->save();

        $record = new UnidadMedida();
        $record->codigo = "SAKO";
        $record->descripcion = "Saco";
        $record->save();






    }
}
