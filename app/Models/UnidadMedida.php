<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    use HasFactory;

    protected $table = "unidadmedida";
    protected $primaryKey = 'unidadmedida_id';    
    protected $fillable = [ 'codigo', 'descripcion' ];


}
