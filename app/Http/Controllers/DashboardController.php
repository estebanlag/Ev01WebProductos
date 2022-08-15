<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

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
    "<td><button class='btn btn-success' style='margin: 5px';>Editar</button>".
    "<button class='btn btn-danger' style='margin: 5px';>Eliminar</button>".
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

public function buscar(Request $request){
  $busqueda = $request->input('busqueda');
  $producto= DB::table('producto')->where('nombre','LIKE','%'. $busqueda.'%')->orWhere('codigo','LIKE','%'. $busqueda.'%')->get();
  
    
  foreach($producto as $valor){
  echo "producto encontrado: <b> $valor->nombre</b>";


  $idcat=DB::table('productocategoria')->select('id_categoria')->where('id_producto',$valor->id)->get();
  $idsuc=DB::table('productosucursal')->select('sucursal_id','Precio','Cantidad')->where('producto_id',$valor->id)->get();

  foreach($idcat as $idcategoria){
 

  $categoria=DB::table('categoria')->select('nombre')->where('id',$idcategoria->id_categoria)->get();
  foreach($categoria as $categorianombre){


}
}
foreach($idsuc as $idsucursal){


  $sucursal=DB::table('sucursal')->select('nombre')->where('id',$idsucursal->sucursal_id)->get();
  foreach($sucursal as $nomsucursal){

  }
  
  }




//$sucursalproducto=DB::table('productosucursal')->select('sucursal_id')->where('producto_id',$valor->id);


}

try {
  $td="<tr><th>1</th>".
  "<td>$valor->nombre</td>".
  "<td>$idsucursal->Cantidad</td>".
  "<td>$nomsucursal->nombre</td>".
  "<td>$valor->codigo</td>".
  "<td>$categorianombre->nombre</td>".
  "<td>$idsucursal->Precio</td>".
  "<td>$valor->descripcion</td>".
  "<td><button class='btn btn-success' style='margin: 5px';>Editar</button>".
  "<button class='btn btn-danger' style='margin: 5px';>Eliminar</button>".
  "</td>".
  "</tr>";
} catch (\Throwable $th) {
 echo "producto no encontrado";
 $td="";
}

  

  


  
    return view('dashboard', ['td'=>$td]);

}


}
