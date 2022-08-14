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
        return $this->belongsTo(Categorias::class, 'id_categoria');
    }

    public function productos(){
        return $this->belongsTo(Productos::class, 'id_producto');
    }
}
