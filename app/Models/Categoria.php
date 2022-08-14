<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $primarykey ='id';
    protected $table = 'Categoria';

public function productoCategorias(){

    return $this->hasMany(ProductoCategoria::class);
}
}
