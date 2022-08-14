<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductoController extends Controller
{
    public function index(){
      
      return view('crearproducto');
    }

    public function guardar(Request $request){
   
      return "Codigo: ". $request->input('codigo') . "<br>Nombre: ". $request->input('nombre') . "<br> Categoria: ". $request->input('categoria') ."<br>Sucursal: ". $request->input('sucursal') ."<br>Descripcion: ". $request->input('descripcion'). "<br>Cantidad ".$request->cantidad ."<br>Precio: ".$request->precio;
    }

    public function ProductoSucursal(){
      return view('productosucursal');
    }

    public function GuardarProductoSucursal(Request $request){
      return "Codigo: ". $request->input('codigo') . "<br>Nombre: ". $request->input('nombre') ."<br>Cantidad: ". $request->input('cantidad') . "<br> Categoria: ". $request->input('categoria') ."<br>Sucursal: ". $request->input('sucursal') ."<br> Sucursal Destino: ". $request->input('sucursaldestino');
    }

}
