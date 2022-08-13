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
                'id_producto'=>'1',
                'id_categoria'=>'1',
                'Cantidad'=>'12',
                'Precio'=>'1500',
                'estado'=>'activo'
                
            ],
            [
                'cod_Producto_Sucursal'=>'2/2',
                'id_producto'=>'2',
                'id_categoria'=>'2',
                'Cantidad'=>'1',
                'Precio'=>'2500',
                'estado'=>'activo'
                
            ],
            [
                'cod_Producto_Sucursal'=>'3/3',
                'id_producto'=>'3',
                'id_categoria'=>'3',
                'Cantidad'=>'2',
                'Precio'=>'1200',
                'estado'=>'no activo'
                
            ],

        
            ));
    }
}
