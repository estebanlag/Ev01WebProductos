<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class categorias extends Controller
{
    //

    public function index(){
       
        $categorias = Categoria::get();
<<<<<<< HEAD
        
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
=======
        return view('crearcategoria',['categorias' => $categorias]);

    }
>>>>>>> 6e9c5545ccc4b9795cc52bd7a2a0ae1aec87644d

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
