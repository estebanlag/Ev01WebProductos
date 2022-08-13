<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosSucursal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Sucursal')->insert(array(
            [
                'nombre' => 'Santiago',
                'direccion' => 'Las Condes 123',
                'telefono' => '912341234',
                'email' => 'lascondes@santiago.cl',
                'estado' => true
            ],
            [
                'nombre' => 'Viña del Mar',
                'direccion' => 'Con Con 123',
                'telefono' => '912341234',
                'email' => 'concon@vinadelmar.cl',
                'estado' => true
            ],
            [
                'nombre' => 'Antofagasta',
                'direccion' => 'Antofagasta 123',
                'telefono' => '912341234',
                'email' => 'antofagasta@antofagasta.cl',
                'estado' => true
            ],
        ));
    }
}
