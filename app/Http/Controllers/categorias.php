<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class categorias extends Controller
{
    //

    public function index(){
       
        $categorias = Categoria::get();
        
        return view('crearcategoria', [
            'categorias' => $categorias
        ]);
}

public function mostrarcategoria(Request $request){
       
    $mostrarcategoria = $request->mostrarcategoria;

    $categorias = Categoria::where('nombre', 'LIKE', '%'.$mostrarcategoria.'%')
    ->orWhere('estado', 'LIKE', '%'.$mostrarcategoria.'%')
    ->get();
    
    return view('mostrarcategoria', [
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

                return view('dashboard');
            }
        

}
