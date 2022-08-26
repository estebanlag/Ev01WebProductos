<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\ProductoCategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categorias extends Controller
{
    //

    public function index(){
       
        $categorias = Categoria::get();

        
        return view('crearcategoria', [
            'categorias' => $categorias
        ]);
}

            public function create(){
                
                
            }
            
            public function store(Request $request){
                $this ->validate($request, [
                    'nombre'=> 'required'
                ]);

        
                $categoriaNueva = new Categoria();
                $categoriaNueva->nombre = $request->nombre;
        
                $categoriaNueva->save();

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

    public function delete($id){

        $categoriaEliminar = Categoria::find($id);

        $categoriaEliminar->delete();

        $categorias = Categoria::get();

        return view('crearcategoria', [

            'categorias' => $categorias
        ]);
    }

    public function update($id){

        $categoria = Categoria::where('id', $id)->get();

        return view('editarcategoria', [

            'categoria' => $categoria
        ]);
    }

    public function updateSave(Request $request){

        $this->validate($request, [

            'nombre'=>'required'
        ]);

        $categoria = Categoria::where('id', $request->id)
        ->update([

            'nombre'=> $request->nombre
        ]);

        $categorias = Categoria::get();

        return view('crearcategoria', [

            'categorias'=> $categorias
        ]);
    }
        

}
