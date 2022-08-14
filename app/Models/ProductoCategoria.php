<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoCategoria extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'ProductoCategoria';

    public function categorias(){
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public function productos(){
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
