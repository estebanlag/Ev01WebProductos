<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
      return view('dashboard');
    }

    public function mostrarproductos(){

      $productos = Producto::get();
 
      return view('mostrarproductos', [
        'productos' => $productos
   ]);
}
}
