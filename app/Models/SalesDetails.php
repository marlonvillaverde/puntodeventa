<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesDetails extends Model
{
    use HasFactory;

    
    protected $table = "salesdetails";
    protected $primaryKey = 'item_id';    
    protected $fillable = [ 'codigo', 'nombre', 'modelo', 'existencia', 'marca', 'pvpunit', 'cant' ];

}
