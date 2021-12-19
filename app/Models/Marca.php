<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inventario;

class Marca extends Model
{
    use HasFactory;

    protected $table = "marcas";
    protected $primaryKey = 'marca_id';    
    protected $fillable = [ 'descripcion' ];


    // Todos los productos que tienen la marca
    public function Inventario()
    {
        return $this->hasMany(Inventario::class, 'marca_id');
    }

}