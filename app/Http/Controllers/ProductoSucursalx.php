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
        
        //print_r($prodsucursal);


        $sucursal = DB::table('sucursal')->get();
        $productos = DB::table('producto')->get();
      
        // ESTO DEBE VENIR EN LA VISTA
        //echo "ingresa cantidad <br><input type='number' class='form-control' placeholder='ingresa cantidad'><br>";
       // echo "ingresa valor <br><input type='number' class='form-control' placeholder='ingresa valor'><br>";
        //echo "<select name='sucursal'>";
        //foreach ($sucursal as $valor) {
        //       echo "<option value=' {$valor->id}'>{$valor->nombre}</option>";
         //  }
        //  echo "</select><br>";
      //
        //  echo "<select name='productos'>";
        //foreach ($productos as $valor) {
         //      echo "<option value=' {$valor->id}'>{$valor->nombre}</option>";
          // }
          //echo "</select><br>";
          
        
        
      
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