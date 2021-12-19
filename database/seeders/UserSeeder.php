<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();        
        $user->nombres = 'Administrador';
        $user->apellidos ='Administrador';
        $user->nickname = 'admin';
        $user->email = 'admin@admin.com';
        $user->email_verified_at = now();
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user->save();
      
        $user = new User();        
        $user->nombres = 'Usuario';
        $user->apellidos ='Usuario';
        $user->nickname = 'user';
        $user->email = 'user@user.com';
        $user->email_verified_at = now();
        $user->password = bcrypt('user' );        
        $user->save();

        $user = new User();        
        $user->nombres = 'Visitante';
        $user->apellidos ='Visitante';
        $user->nickname = 'visit';
        $user->email = 'inqui@inqui.com';
        $user->email_verified_at = now();
        $user->password = bcrypt('Visit' );
        $user->save();
    
        // un usuario especial que le vamos a dar permisos especificos
        $user = new User();        
        $user->nombres = 'Marlon';
        $user->apellidos ='Villaverde';
        $user->nickname = 'marlon';
        $user->email = 'mdjva75@gmail.com';
        $user->email_verified_at = now();
        $user->password = bcrypt('marlon' );
        $user->save();      

    }
}
