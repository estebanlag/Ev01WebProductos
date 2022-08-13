<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        
=======
        DB::table('Categoria')->insert(array(
            [
                'nombre' => 'Juguetes',
                'estado' => '1'
            ],
            [
                'nombre' => 'Electronico',
                'estado' => '0'
            ],
            [
                'nombre' => 'Vestuario',
                'estado' => '0'
            ],
        ));
>>>>>>> 9467d3f65b8382980b3fa75a0d149677b9fb6e87
    }
}
