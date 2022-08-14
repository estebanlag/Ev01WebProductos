<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class categorias extends Controller
{
    //

    public function index(){
        $cat = Categoria::get();
        //dd($sucursales);
        
        print_r($cat);
        return view('crearsucursal'); 
        
            }
}
