<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosProductoCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ProductoCategoria')->insert(array(

            [
                'id_producto'=>'1',
                'id_categoria'=>'1'
                
            ],

            [
                'id_producto'=>'2',
                'id_categoria'=>'2'
                
            ],

            [
                'id_producto'=>'3',
                'id_categoria'=>'3'
                
            ]
        
        
            ));
    }
}
