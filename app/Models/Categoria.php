<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategoria;
use App\Models\Inventario;
use App\Models\Image;

class Categoria extends Model
{
    use HasFactory;

    protected $table = "categorias";
    protected $primaryKey = 'categoria_id';    
    protected $fillable = [ 'detalle' ];



    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Categorias que posee
    public function subCategorias()
    {
        return $this->hasMany(SubCategoria::class, 'categoria_id');
    }



    // Para obtener la imagen de la categoria
    public function image()
    {
        return $this->morphOne(Images::class, 'imageable');
    }

    public function Inventario()
    {
        return $this->hasManyThrough(Inventario::class, SubCategoria::class,
            'categoria_id', 'subcategoria_id', 'categoria_id', 'subcategoria_id'
         );
    }

}
