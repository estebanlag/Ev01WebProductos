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

        

        DB::table('Categoria')->insert(array(
            [
                'nombre' => 'Juguetes',
                'estado' => true
            ],
            [
                'nombre' => 'Electronico',
                'estado' => true
            ],
            [
                'nombre' => 'Vestuario',
                'estado' => true
            ],
        ));

    }
}
