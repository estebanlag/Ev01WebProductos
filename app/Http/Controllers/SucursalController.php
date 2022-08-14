<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SucursalController extends Controller
{
    public function index(){
      return view('crearsucursal'); 
    }
}