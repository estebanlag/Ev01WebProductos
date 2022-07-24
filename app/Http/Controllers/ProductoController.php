<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
      return view('crearproducto'); 
    }

    public function guardar(Request $request){
   
      return "Codigo: ". $request->input('codigo') . "<br>Nombre: ". $request->input('nombre') . "<br> Categoria: ". $request->input('categoria') ."<br>Sucursal: ". $request->input('sucursal') ."<br>Descripcion: ". $request->input('descripcion'). "<br>Cantidad ".$request->cantidad ."<br>Precio: ".$request->precio;
    }
}
