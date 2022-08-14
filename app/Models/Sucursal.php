<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $primarykey ='id';
    protected $table = 'sucursal';

public function sucursalx(){

    return $this->hasMany(sucursal::class);
}

}
