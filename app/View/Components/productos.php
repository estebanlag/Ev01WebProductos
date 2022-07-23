<?php

namespace App\View\Components;

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
    public function __construct($nombre,$id,$cantidad)
    {

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
        return view('components.productos');
    }

    
}
