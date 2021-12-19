<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Inventario;

class TipoDocumentoCliente extends Model
{
    use HasFactory;

    protected $table = "tipodocumentocliente";
    protected $primaryKey = 'tipodocumentocliente_id';
    protected $fillable = [ 'detalle' ];

}
