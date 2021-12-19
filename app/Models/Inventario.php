<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategoria;
use App\Models\Image;
use App\Models\Marca;
use App\Models\UnidadMedida;

class Inventario extends Model
{
    use HasFactory;

    protected $table = "inventario";
    protected $primaryKey = 'inventario_id';
    protected $fillable = [ 'codigo', 'nombre', 'presentacion' ];



    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Para obtener la imagen del articulo producto
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    // SubCategoria a la cual pertene
    public function SubCategoria()
    {
        return $this->belongsTo(SubCategoria::class);
    }

    // marca
    public function Marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    // Unidades de medida y sus inventarios
    public function Existencias()
    {
        return $this->hasMany(Existencia::class, 'inventario_id');
    }
}
