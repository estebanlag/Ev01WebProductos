<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class Sucursalx extends Controller
{
    //

    public function index(){
$sucursales = Sucursal::get();
//dd($sucursales);

//print_r($sucursales);
return view('crearsucursal'); 

    }
}
