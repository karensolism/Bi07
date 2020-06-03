<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
           $table->id('Id_servicio');
            $table->integer('Activo');
            $table->string('Servicio',18);
            

        });

         Schema::create('servicio_inmuebles', function (Blueprint $table) {
          $table->id('Id_SI');
            $table->string('Id_inmmueble',10); 

            $table->unsignedBigInteger('Id_serviciofk'); // Relación con seminuevos
            $table->foreign('Id_serviciofk')->references('Id_servicio')->on('servicios'); // clave foranea           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio_inmuebles');
        Schema::dropIfExists('servicios');
    }
}
