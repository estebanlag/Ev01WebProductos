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

<<<<<<< HEAD
    public function register(){
        return view('registrarse');
    }

    public function recuperarContraseña(){
        return view('recuperarContraseña');
    }

    public function contraseñaRecuperada(){
        return view('contraseñaRecuperada');
=======

    public function logout(){
       
        return view('login');

>>>>>>> 9ed3586157a48c00b9a2fd15f61c3a3ee6300234
    }
}
