<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoSucursal extends Model
{
    use HasFactory;
    protected $primarykey ='id';
    protected $table = 'productosucursal';

public function productosucursal(){

    return $this->hasMany(productosucursal::class);
}
}
