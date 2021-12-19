<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $record = new Marca();        
        $record->descripcion = "GENERICO";
        $record->save();

        $record = new Marca();        
        $record->descripcion = "STANLEY";
        $record->save();

        $record = new Marca();        
        $record->descripcion = "RED BULL";
        $record->save();

        $record = new Marca();        
        $record->descripcion = "BOSCH";
        $record->save();

        $record = new Marca();        
        $record->descripcion = "SKILL";
        $record->save();

        $record = new Marca();        
        $record->descripcion = "CADEL";
        $record->save();

    }
}
