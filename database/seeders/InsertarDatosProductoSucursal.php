<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosProductoSucursal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ProductoSucursal')->insert(array(

            [
                'cod_Producto_Sucursal'=>'1/1',
                'producto_id'=>'1',
                'sucursal_id'=>'1',
                'Cantidad'=>'12',
                'Precio'=>'1500',
                'estado'=>'activo'
                
            ],
            [
                'cod_Producto_Sucursal'=>'2/2',
                'producto_id'=>'2',
                'sucursal_id'=>'2',
                'Cantidad'=>'1',
                'Precio'=>'2500',
                'estado'=>'activo'
                
            ],
            [
                'cod_Producto_Sucursal'=>'3/3',
                'producto_id'=>'3',
                'sucursal_id'=>'3',
                'Cantidad'=>'2',
                'Precio'=>'1200',
                'estado'=>'no activo'
                
            ],

        
            ));
    }
}
