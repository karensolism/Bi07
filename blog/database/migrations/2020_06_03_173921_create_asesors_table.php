<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
      $table->id('Id_usuario');
            $table->integer('Activo');
            $table->string('TipoUsuario',10);
               });
       
       Schema::create('empresas', function (Blueprint $table) {
            $table->id('Id_empresa');
            $table->integer('Activo');
            $table->string('Logo_emp',100);
            $table->string('Tel_empresa',15);
            $table->string('Correo_empr',100);
            $table->string('Nombre_empr',100);                
        });

        Schema::create('asesors', function (Blueprint $table) {
            $table->string('Id_asesor',11)-> primary;
            $table->integer('Activo');
            $table->string('Contrasenia',20);
            $table->string('Nombre',15);
            $table->string('Apellido',50);
            $table->string('Telefono',15);                        
                
             $table->unsignedBigInteger('Id_usuariofk'); // Relación con usuarios
            $table->foreign('Id_usuariofk')->references('Id_usuario')->on('usuarios'); // clave foranea
              $table->unsignedBigInteger('Id_empresafk'); // Relación con empresas
            $table->foreign('Id_empresafk')->references('Id_empresa')->on('empresas'); // clave foranea

             $table->timestamps();

             });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asesors');
         Schema::dropIfExists('usuarios');
          Schema::dropIfExists('empresas');
    }
}
