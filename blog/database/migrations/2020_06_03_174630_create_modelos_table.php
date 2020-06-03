<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desarrolladoras', function (Blueprint $table) {
          $table->id('Id_desarrolladora');
            $table->integer('Activo');
            $table->string('Tel_desa',15);
            $table->string('Correo',100);
            $table->string('Logo',100);
            $table->string('Telefono',15);
            $table->string('Nombre_desa',100);
                

        });

        Schema::create('tipo_inmbuebles', function (Blueprint $table) {
            $table->id('Id_tipo');
            $table->integer('Activo');
           
             $table->unsignedBigInteger('Id_desarrolladorafk'); // Relación con desarrolladoras
            $table->foreign('Id_desarrolladorafk')->references('Id_desarrolladora')->on('desarrolladoras'); // clave foranea
          

        });   
      

        Schema::create('modelos', function (Blueprint $table) {
           $table->id('Id_modelo');
            $table->integer('Activo');
            $table->string('Modelo',100);

             $table->unsignedBigInteger('Id_tipofk'); // Relación con tipo_inmbuebles
            $table->foreign('Id_tipofk')->references('Id_tipo')->on('tipo_inmbuebles'); // clave foranea     


     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modelos');
         Schema::dropIfExists('desarrolladoras');
          Schema::dropIfExists('tipo_inmbuebles');
    }
}
