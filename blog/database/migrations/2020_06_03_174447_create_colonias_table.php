<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColoniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
          $table->id('Id_estado');
            $table->integer('Activo');
            $table->string('Estado',200);    

        });

      Schema::create('ciudads', function (Blueprint $table) {
            $table->id('id_ciudad');
             $table->string('Ciudad',200);
              $table->integer('Activo');

               $table->unsignedBigInteger('Id_estadofk'); // Relación con estados
            $table->foreign('Id_estadofk')->references('Id_estado')->on('estados'); // clave foranea
          
        });

      Schema::create('colonias', function (Blueprint $table) {
            $table->id('Id_colonia');
             $table->string('colonia',200);
              $table->integer('Activo');
 
               $table->unsignedBigInteger('id_ciudadfk'); // Relación con ciudads
            $table->foreign('id_ciudadfk')->references('id_ciudad')->on('ciudads'); // clave foranea


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('colonias');
        Schema::dropIfExists('estados');
        Schema::dropIfExists('ciudads');


    }
}
