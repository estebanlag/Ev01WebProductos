<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EliminarProductos extends Controller
{
    //sebastian martinez
    public function elimina($nombre,$cantidad){
        return view('elimina')->
        with('nombre', $nombre)->
        with('cantidad', $cantidad);
    }
}
