<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosProducto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Producto')->insert(array(

            [
                'codigo'=>'FBY1',
                'nombre'=>'Figura Baby Yoda',
                'descripcion'=>'Juguete Disney para todas las edas',
                'estado'=>'1',
                'image'=>'	https://home.ripley.cl/store/Attachment/WOP/D175/2000387031886/2000387031886_2.jpg'
            ],
            [
                'codigo'=>'PJM1',
                'nombre'=>'Pantalón jogger mujer',
                'descripcion'=>'Hermoso pantalón juvenil',
                'estado'=>'0',
                'image'=>'	https://ae01.alicdn.com/kf/H98b3632e83fd43c38a6161…e-holgada-con-cremallera-de-cadena-de-cintura.jpg'
            ],
            [
                'codigo'=>'NHP1',
                'nombre'=>'Notebook HP',
                'descripcion'=>'Notebook HP 1tb, 16gb ram, radeon HD 3060ti',
                'estado'=>'1',
                'image'=>'	https://www.hp.com/lamerica_nsc_cnt_amer/es/images…_tcm237_2343093_tcm237_2087694_tcm237-2343093.jpg'
            ]
        ));
    }
}
