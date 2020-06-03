<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaracteristicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('seminuevos', function (Blueprint $table) {
            $table->id('id_seminuevo');
            $table->integer('Activo');
            $table->string('antiguedad',25);
            $table->string('Tseminuevo',20);
            $table->string('contrato',35);
            $table->string('fecha',25);
           
        });
        
        Schema::create('caracteristicas', function (Blueprint $table) {
           $table->id('id_producto');
            $table->integer('Activo');
             $table->unsignedBigInteger('id_seminuevofk'); // Relación con seminuevos
            $table->foreign('id_seminuevofk')->references('id_seminuevo')->on('seminuevos'); // clave foranea
          

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caracteristicas');
        Schema::dropIfExists('seminuevos');
    }
}
