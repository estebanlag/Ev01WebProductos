<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Sucursal;
use Illuminate\Support\Facades\DB as FacadesDB;

class Sucursalx extends Controller
{
    //

public function index(){
    $sucursales = Sucursal::get();
    return view('crearsucursal',['sucursales' => $sucursales]);
}

public function store(Request $request){

    $this->validate($request, [
      'nombre' => 'required',
      'direccion' => 'required',
      'telefono' => 'required',
      'email' => 'required'
    ]);
     
     $nuevaSucursal = new Sucursal();
     $nuevaSucursal->nombre = $request->nombre;
     $nuevaSucursal->direccion = $request->direccion;
     $nuevaSucursal->telefono = $request->telefono;
     $nuevaSucursal->email = $request->email;
     $nuevaSucursal->save();

     return view('dashboard');
}
}
