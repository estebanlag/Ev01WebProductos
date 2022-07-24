<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActualizarProductos extends Controller
{
    //sebastian martinez

    public function actualiza($nombre,$cantidad,$sucursal){
        return view('actualiza')->
        with('nombre', $nombre)->
        with('sucursal', $sucursal)->
        with('cantidad', $cantidad);
    }
}
