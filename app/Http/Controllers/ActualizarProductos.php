<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActualizarProductos extends Controller
{
    //sebastian martinez

    public function actualiza($nombre,$cantidad){
        return view('actualiza')->
        with('nombre', $nombre)->
        with('cantidad', $cantidad);
    }
}
