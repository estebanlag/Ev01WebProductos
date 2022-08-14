<?php

namespace App\View\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class productos extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $nombre;
    public $id;
    public $cantidad;
    public $prueba;
    public function __construct($nombre,$id,$cantidad)
    {
        
        $sucursales = DB::table('productosucursal')->get();
        $productos = DB::table('producto')->get();
        $categorias = DB::table('productocategoria')->get();

        $this->$nombre=$nombre;
        $this->$id=$id;
        $this->$cantidad=$cantidad;
       
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $test="sssssssssss";
        return view('components.productos',['test'=>$test]);
    }

    
}
