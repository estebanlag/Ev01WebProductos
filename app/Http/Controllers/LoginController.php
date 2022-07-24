<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
       return view('login'); 
    }

    public function loged(){
        return view('loged');
    }

    public function register(){
        return view('registrarse');
    }

    public function recuperarContraseña(){
        return view('recuperarContraseña');
    }

    public function contraseñaRecuperada(){
        return view('contraseñaRecuperada');
    }
}
