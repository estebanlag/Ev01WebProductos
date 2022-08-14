<?php

namespace App\Http\Controllers;

use App\Models\ProductoCategoria;
use Illuminate\Http\Request;

class prodcategoria extends Controller
{

    public function index(){
        $productos = ProductoCategoria::get();
        //dd($sucursales);
        
        print_r($productos);
        return view('crearsucursal'); 
        
            }
    //
}
