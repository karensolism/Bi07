<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormaInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forma_pagos', function (Blueprint $table) {
            $table->id('Id_forma');
            $table->integer('Activo');
            $table->string('forma',20);
          
        });

        Schema::create('forma_inmuebles', function (Blueprint $table) {
            $table->id('Id_FI');
            $table->integer('Id_inmmueble'); 

            $table->unsignedBigInteger('Id_formafk'); // Relación con forma_pagos
            $table->foreign('Id_formafk')->references('Id_forma')->on('forma_pagos'); // clave foranea             

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forma_inmuebles');
        Schema::dropIfExists('forma_pagos');
    }
}
