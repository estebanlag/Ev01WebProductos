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
                'estado' => '0'
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
    }
}
