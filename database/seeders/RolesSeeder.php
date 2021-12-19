<?php

namespace Database\Seeders;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // creacion de roles basicos
        Role::create(['name' => 'manager']);
        Role::create(['name' => 'user']);
        Role::create(['name' => 'visitor']);


        // definicion de permisos basicos
        Permission::create(['name' => 'total']);
        Permission::create(['name' => 'basico']);
        Permission::create(['name' => 'minimo']);



        // a cada rol le asigna permisos
        Role::where( 'name', 'manager')->first()->givePermissionTo('total');
        Role::where( 'name', 'user')->first()->givePermissionTo('basico');
        Role::where( 'name', 'visitor')->first()->givePermissionTo('minimo');


        // asignacion de permiso y role a usuario
        User::where('nickname','marlon')->first()->givePermissionTo('total');
        User::where('nickname','marlon')->first()->assignRole('manager');


        // asignacion de rol a usuario
        User::where('nickname','admin')->first()->assignRole('manager');
        User::where('nickname','user')->first()->assignRole('user');
        User::where('nickname','visit')->first()->assignRole('visitor');


    }
}
