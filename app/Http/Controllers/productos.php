<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


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

                $image = $request->file('image');

                if($image){
                    $image_path = time()."-".$image->getClientOriginalName();
                  \Storage::disk('images')->put($image_path, \File::get($image));
                }

                $producto = new Producto();
                $producto->codigo = $request->codigo;
                $producto->nombre = $request->nombre;
                $producto->descripcion = $request->descripcion;
                $producto->estado = $request->estado;
                $producto->image = $image_path;              
               
                $producto->save();

                $productos = Producto::get();
                return view('mostrarproductos',[
                    'productos' => $productos]);
            }  
            
            public function update(producto $producto,Request $request){

                echo $request->id."<br>";
                echo $request->nombre."<br>";
                echo $request->codigo."<br>";
                echo $request->descripcion."<br>";
                echo $request->estado."<br>";
                echo $request->image."<br>";
                
                
                //obtenemos el nombre del archivo
                $request->file('image')->store('public');
                            $ruta="storage/".$request->file('image');
                            echo $ruta;
                $productos = Producto::findOrFail($request->id);
                $productos->codigo=$request->codigo;
                $productos->nombre=$request->nombre;
                $productos->descripcion=$request->descripcion;
                $productos->estado=$request->estado;
                $productos->image=$ruta;
                
                        $productos->save();     
                         echo "update productos";
                        
                         //return view('crearsucursal'); 
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


  public function getImagen($filename){
    $file = \Storage::disk('images')->get($filename);
    return new Response($file,200);
  }

}




