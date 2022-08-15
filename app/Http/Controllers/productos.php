<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productos extends Controller
{
    public function index(){
        $productos = Producto::get();
        //dd($sucursales);
        

        return view('mostrarproductos',[
            'productos' => $productos]);

        return view('crearsucursal'); 
    }

            public function create(){
                $productos = Producto::get();
                //dd($sucursales);
                //echo "crear productos";
               // print_r($productos);
               return view('crearproducto',[
                'productos' => $productos]);
                
            }
                    
            public function store(Request $request) {
                       
                $this->validate($request,  [

                    'codigo' => 'required',
                    'nombre' => 'required',
                    'estado' => 'required',
                    'image' => 'required',
                    'descripcion' => 'required'
                ]);

                $producto = new Producto();
                $producto->codigo = $request->codigo;
                $producto->nombre = $request->nombre;
                $producto->descripcion = $request->descripcion;
                $producto->estado = $request->estado;
                $producto->image = $request->image;              
               
                $producto->save();

                $productos = Producto::get();
                return view('mostrarproductos',[
                    'productos' => $productos]);
            }  
            

        public function update(){
         $productos = Producto::get();
                     //dd($sucursales);
         echo "update productos";
         print_r($productos);
         return view('crearsucursal'); 
        }    
                            
        public function destroy(producto $producto)
        {
            echo "elimina";
            //if($producto->delete()){
            //    return true;
            //}
        }
                                    
        public function edit(){
            $productos = Producto::get();
                    //dd($sucursales);
                    echo "edit productos";
                    print_r($productos);
                    return view('crearsucursal'); 
                                        
}

        public function show(producto $producto)
            {
                                               
                return view('mostrarproductosunico',['productos' => $producto]);
            }

            
    public function formulario(){
        $sucursales = DB::table('sucursal')->get();
        $categorias = DB::table('categoria')->get();
        return view("crearproducto",['sucursales' => $sucursales],['categorias' => $categorias]);
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
