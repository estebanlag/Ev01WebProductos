<?php

namespace App\Http\Controllers;

use App\Models\ProductoSucursal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductoSucursalx extends Controller
{
 
    public function index(){
        $prodsucursal = ProductoSucursal::get();
       // dd($prodsucursal);
        
       // print_r($prodsucursal);


        $sucursales = DB::table('sucursal')->get();
        $productos = DB::table('producto')->get();
       
      
        
          return view('productosucursal',['sucursales' => $sucursales],['productos' => $productos]);    
      
    }

    public function create(){
      return view('productosucursal');
    }
}


//public function versucursales(){
//    $sucursal = new Sucursal();

 
  //  $sucursales= $sucursal->sucursalx();

    //print_r($sucursales);
    //foreach($sucursales as $valor){
    //echo "{$valor->nombre} <br>";
   // }

//}