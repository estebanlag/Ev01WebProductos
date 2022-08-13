<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosUsuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Usuario')->insert(array(
            [  
              'nombre_completo' => 'Karen Perez',
              'email' => 'kperez@email.com',
              'password' => '123456',
              'estado' => 'true'
             ],
             [  
                'nombre_completo' => 'Daniel Soto',
                'email' => 'dsoto@email.com',
                'password' => '123456',
                'estado' => 'true'
              ],
              [  
                'nombre_completo' => 'Javiera Gonzalez',
                'email' => 'jgonzalez@email.com',
                'password' => '123456',
                'estado' => 'true'
              ]
          ));
    }
}
