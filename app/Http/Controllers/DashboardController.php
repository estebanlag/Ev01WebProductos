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

    public function mostrarproductos(Request $request){

      $buscarproducto = $request->buscarproducto;

      $productos = Producto::where('nombre', 'LIKE', '%'.$buscarproducto.'%')
      ->orWhere('codigo', 'LIKE', '%'.$buscarproducto.'%')
      ->get();

      return view('mostrarproductos', [
        'productos' => $productos
  ]);

  
}
}
