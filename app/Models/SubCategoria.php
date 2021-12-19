<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorias;
use App\Models\Inventario;
use App\MNodels\Image;


class SubCategoria extends Model
{
    use HasFactory;

    protected $table = "subcategorias";
    protected $primaryKey = 'subcategoria_id';    
    protected $fillable = [ 'detalle', 'slug' ];



    public function getRouteKeyName()
    {
        return 'slug';        
    }

    // Para obtener la imagen de la sub categoria
    public function image()
    {
        return $this->morphOne(Images::class, 'imageable');
    }

    

    // La categoria a la cual pertenece
    public function Categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    // Los productos que pertenecen a la sub categoria
    public function Inventario()
    {
        return $this->hasMany(Inventario::class, 'subcategoria_id');
    }

}
