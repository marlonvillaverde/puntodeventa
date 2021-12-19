<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\SubCategoria;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $record = new Categoria();
        $record->detalle = "Materiales de construcción";
        $record->slug = Str::slug($record->detalle);
        $record->save();
        $id = $record->categoria_id;

        $record = new SubCategoria();
        $record->detalle = "Cemento, morteros y complementos";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Arena y áridos";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Ladrillos, Bloques y Casetones";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Quimicos y Aditivos";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Aislantes Térmicos";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();



        $record = new Categoria();
        $record->detalle = "Electricidad";
        $record->slug = Str::slug($record->detalle);
        $record->save();
        $id = $record->categoria_id;

        $record = new SubCategoria();
        $record->detalle = "Cables y alambres";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $idsubcategoria = $record->id;
        $record = new SubCategoria();
        $record->detalle = "Linternas";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Interruptores y Tomacorrientes";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Canaletas";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Cintas Aislantes";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();

        $record = new Categoria();
        $record->detalle = "Techos y drywall";
        $record->slug = Str::slug($record->detalle);
        $record->save();
        $id = $record->categoria_id;

        $record = new SubCategoria();
        $record->detalle = "Cielos Rasos";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Calamina";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Polipropileno";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Canaletas";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();



        $record = new Categoria();
        $record->detalle = "Seguridad y EPPS";
        $record->slug = Str::slug($record->detalle);
        $record->save();
        $id = $record->categoria_id;

        $record = new SubCategoria();
        $record->detalle = "Protección Personal";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Protocolo de Seguridad";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Zapatos y Botas de Seguridad";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Videoporteros";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Cadenas, cuerdas y accesorios";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Cajas fuertes";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();
        $record = new SubCategoria();
        $record->detalle = "Candados";
        $record->slug = Str::slug($record->detalle);
        $record->categoria_id = $id;
        $record->save();



        $record = new Categoria();
        $record->detalle = "Clavos Tornillos y Adhesivos";
        $record->slug = Str::slug($record->detalle);
        $record->save();
        $id = $record->categoria_id;

        $record = new Categoria();
        $record->detalle = "Escaleras y Mudanzas";
        $record->slug = Str::slug($record->detalle);
        $record->save();
        $id = $record->categoria_id;

        $record = new Categoria();
        $record->detalle = "Maderas y Tableros";
        $record->slug = Str::slug($record->detalle);
        $record->save();
        $id = $record->categoria_id;

        $record = new Categoria();
        $record->detalle = "Gasfitería";
        $record->slug = Str::slug($record->detalle);
        $record->save();
        $id = $record->categoria_id;
    

    }
}
