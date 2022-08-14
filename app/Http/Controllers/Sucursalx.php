<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Sucursal;

class Sucursalx extends Controller
{
    //

public function index(){
    $sucursales = DB::select('select * from sucursal');
    return view('crearsucursal',['sucursales' => $sucursales]);
}

public function store(Request $request){
    $nombre = $request->input('nombre');
    $direccion = $request->input('direccion');
    $telefono = $request->input('telefono');
    $email = $request->input('email');
    $data = array(
        'nombre'=>$nombre,
        'direccion'=>$direccion,
        'telefono'=>$telefono,
        'email'=>$email);
    DB::table('sucursal')->insert($data);
    
    return view('dashboard');
}
}
