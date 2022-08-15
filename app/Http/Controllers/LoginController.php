<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
       return view('login.login'); 
    }

    public function loged(){
        return view('login.loged');
    }

    public function vistaRegistrar(){
        return view('login.registrarse');
    }

    public function register(Request $request){
        $nuevoUsuario = new Usuario();
        $nuevoUsuario->nombre_completo = $request->nombre;
        $nuevoUsuario->email = $request->email;
        $nuevoUsuario->password = $request->password;
        $nuevoUsuario->estado = 1;
     
        if($nuevoUsuario->save()){
          return view('login.login');
        }
    }

    public function recuperarContraseña(){
        return view('login.recuperarContraseña');
    }

    public function contraseñaRecuperada(){
        return view('login.contraseñaRecuperada');
    }

    public function logout(){
       return view('login.login');
     }
}
