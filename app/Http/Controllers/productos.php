<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class productos extends Controller
{
    public function index(){
        $productos = Producto::get();
        //dd($sucursales);
        
        return view('crearsucursal'); 
        
            }
}
