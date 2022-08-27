<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\ProductoCategoria;
use App\Models\ProductoSucursal;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class productos extends Controller
{
    public function index(){
        $productos = Producto::get();
        //dd($sucursales);
        
       return view('mostrarproductos',[
            'productos' => $productos]);

        
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
                    $image_path=str_replace(" ","",$image_path);
                  \Storage::disk('images')->put($image_path, \File::get($image));
                }

                $producto = new Producto();
                $producto->codigo = $request->codigo;
                $producto->nombre = $request->nombre;
                $producto->descripcion = $request->descripcion;
                $producto->estado = $request->estado;
                $producto->image = $image_path;              
               
                $producto->save();

                $prodcat= new ProductoCategoria();
                $prodcat->id_producto=$producto->id;
                $prodcat->id_categoria=$request->categoria;
                $prodcat->save();


                $prodsucursal = new productosucursal();
                $prodsucursal->cod_Producto_Sucursal=$producto->id.$request->sucursal;
                $prodsucursal->producto_id=$producto->id;
                $prodsucursal->sucursal_id=$request->sucursal;
                $prodsucursal->cantidad=$request->cantidad;
                $prodsucursal->precio=$request->precio;
                $prodsucursal->estado=$request->estado;
                $prodsucursal->save();
                $productos = Producto::get();
                return view('mostrarproductos',[
                    'productos' => $productos]);
            } 
            
            public function update(producto $producto,Request $request){

                $productos=new Producto();
                       
                
                                if($request->hasFile("image")){
                
                              $img=      $request->file('image');
                
                              $ruta=      "storage/public/imagen/";
                
                              $filename=time()."-".$img->getClientOriginalName();
                
                              $upload=$request->file('image')->move($ruta,$filename);
                
                              $productos->image=$ruta.$filename;
                
                              $ruta = $ruta.$filename;
                
                echo $ruta.$filename;
                
                }else {
                
                    $productos = Producto::findOrFail($request->id);
                
                    $ruta=$productos->image;
                
                }
                echo $ruta;

                $productos = Producto::findOrFail($request->id);

                $productos->codigo=$request->codigo;

                $productos->nombre=$request->nombre;

                $productos->descripcion=$request->descripcion;

                $productos->estado=$request->estado;

                $productos->image=$ruta;

               



                        $productos->save();    

                         echo "update productos";

                         return redirect("/productosucursalupdate/$request->id");



                         //return view('crearsucursal');

                        }      
       
                            
                        public function destroy($id)
                        {
                            $productosucursal=ProductoSucursal::where('producto_id', $id)->delete();
                            $productoscategoria=ProductoCategoria::where('id_producto', $id)->delete();
                            $productos=Producto::where('id', $id)->delete();
                            $productos=Producto::get();
                            return view('mostrarproductos',[
                                'productos' => $productos]);
                        
                
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




