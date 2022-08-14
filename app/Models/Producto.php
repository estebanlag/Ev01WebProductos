<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    protected $table = 'Producto';
    
    public function productoSucursales(){
        return $this->hasMany(ProductoSucursal::class);
    }
    public function productoCategorias(){
        return $this->hasMany(ProductoCategoria::class);
    }
}
