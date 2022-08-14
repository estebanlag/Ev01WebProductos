<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){

   
     
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
