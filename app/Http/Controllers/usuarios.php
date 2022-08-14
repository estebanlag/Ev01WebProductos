<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class usuarios extends Controller
{
    public function index(){
        $usuario = Usuario::get();
        //dd($sucursales);
        
        print_r($usuario);
        return view('crearsucursal'); 
        
            }
    //
}
