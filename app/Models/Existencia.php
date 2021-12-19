<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inventario;


class Existencia extends Model
{
    use HasFactory;

    protected $table = "existencias";
    protected $primaryKey = 'existencia_id';    
   // protected $fillable = [ 'inventario_id', 'existencia_id', 'nombre', 'unidades', 'pcompra', 'pventa' ];



    public function Inventario()
    {
        return $this->belongsTo(Inventario::class);
    }

}
