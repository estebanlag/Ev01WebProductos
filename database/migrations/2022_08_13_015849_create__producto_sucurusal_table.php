<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

class CreateProductoSucursalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductoSucursal', function (Blueprint $table) {
            $table->id();
            $table->text('cod_Producto_Sucursal');
            $table->foreignId('producto_id')->constrained;
            $table->foreignId('sucursal_id')->constrained;
            $table->integer('Cantidad');
            $table->integer('Precio');
            $table->string('Estado');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProductoSucursal');
    }
}
