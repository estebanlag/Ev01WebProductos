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


    public function updateprecio(Request $request) { 
      echo $request->id;


    }

    public function store(Request $request) {
    
      $ProductoSucursal = new ProductoSucursal();
      $ProductoSucursal->cod_Producto_Sucursal = $request->cod_Producto_Sucursal;
      $ProductoSucursal->producto_id = $request->producto_id;
      $ProductoSucursal->sucursal_id = $request->sucursal_id;
      $ProductoSucursal->Cantidad = $request->Cantidad;
      $ProductoSucursal->Precio = $request->Precio;              
      $ProductoSucursal->estado = $request->estado;              
     
     if( $ProductoSucursal->save()){
      echo "guardado";
     }

      $productosucursal = DB::table('productosucursal')->get();
   
      $td="";
      $cont=0;
      foreach($productosucursal as $valor){
      $cont++;



      $producto= DB::table('producto')->where('id',$valor->producto_id)->get();
      $categoria= DB::table('categoria')->where('id', $valor->producto_id)->get();
      $sucursal= DB::table('sucursal')->where('id', $valor->sucursal_id)->get();
        
        


    foreach($producto as $valorproducto){
      
     // $codigo= $td."{$valorproducto->codigo}";
   //   $descripcion= $td."{$valorproducto->descripcion}";

 
    }
    foreach($categoria as $valorcategoria){
//$categoria= "{$valorcategoria->nombre}";
//echo $categoria;
    }
    foreach($sucursal as $valorsucursal){
//$sucursal= "{$valorsucursal->nombre} ";

    }

    $td="<tr><th>$cont</th>".
    "<td>$valorproducto->nombre</td>".
    "<td>$valor->Cantidad</td>".
    "<td>$valorsucursal->nombre</td>".
    "<td>$valorproducto->codigo</td>".
    "<td>$valorcategoria->nombre</td>".
    "<td>$valor->Precio</td>".
    "<td>$valorproducto->descripcion</td>".
    "<td><button class='btn btn-success'>editar</button>".
    "<button class='btn btn-danger'>eliminar</button>".
    "</td>".
    "</tr>".$td;

    }
    
    
        
          return view('dashboard', ['td'=>$td]);
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