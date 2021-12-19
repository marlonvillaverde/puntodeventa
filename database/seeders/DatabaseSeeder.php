<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{

    // corta relaciones de tablas para poder vaciarlas
    public function Truncate( $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ( $tablas as $tabla)
        {

            DB::table($tabla)->truncate();

        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

    }



    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // primero manda a eliminar toda la data
        $this->Truncate( [  'subcategorias',
                            'categorias',
                            'unidadmedida',
                            'marcas',
                            'tipodocumentocliente',
                            'eistencias',
                            'roles',
                            'permissions',
                            'role_has_permissions',
                            'model_has_roles',
                            'users'

                        ] );
        $this->call( UserSeeder::class);
        $this->call( RolesSeeder::class);
        $this->call( CategoriaSeeder::class);
        $this->call( UnidadMedidaSeeder::class);
        $this->call( MarcaSeeder::class);
        $this->call( TipoDocumentoClienteSeeder::class);
        $this->call( ExistenciasSeeder::class);
       
    }
}
