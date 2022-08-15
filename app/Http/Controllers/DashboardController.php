<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request){

      $buscardashboard = $request->buscardashboard;

      $productosucursal = DB::table('productosucursal')->get();
   
$td="";
$cont=0;
      foreach($productosucursal as $valor){
$cont++;



      $producto= DB::table('producto')->where('id',$valor->producto_id)
      ->orWhere('nombre', 'LIKE', '%'.$buscardashboard.'%')
      ->orWhere('codigo', 'LIKE', '%'.$buscardashboard.'%')
      ->orderBy('id', 'ASC')
      ->get();
     
      $categoria= DB::table('productocategoria')->where('id_producto', $valor->id)->get();
      $sucursal= DB::table('productosucursal')->where('producto_id', $valor->id)->get();
        
      foreach($categoria as $cat){
              $nombrecat= DB::table('categoria')->where('id', $cat->id_categoria)->get();

        foreach($nombrecat as $nomcat){
          //$nomcat->nombre
        }

      }
        
      foreach($sucursal as $suc){
        $nombresucursal= DB::table('sucursal')->where('id', $suc->sucursal_id)->get();

        foreach($nombresucursal as $nomsuc){
          //$nomcat->nombre
        }


      }


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
    "<td>$nomsuc->nombre</td>".
    "<td>$valorproducto->codigo</td>".
    "<td>$nomcat->nombre</td>".
    "<td>$valor->Precio</td>".
    "<td>$valorproducto->descripcion</td>".
    "<td><button class='btn btn-success'>Editar</button>".
    "<button class='btn btn-danger' style='margin: 5px;'>Eliminar</button>".
    "</td>".
    "</tr>".$td;

    }


    
      return view('dashboard', ['td'=>$td]);
}
}
