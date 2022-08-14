<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
       return view('login.login'); 
    }

    public function loged(){
        return view('login.loged');
    }

    public function register(){
        return view('login.registrarse');
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
