<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
  public function index(){
    $cat = Categoria::get();
    //dd($sucursales);
    
    //print_r($sucursales);
    return view('crearsucursal'); 
    
        }
}