<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
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
            $table->id('Id_asesor');
            $table->integer('Activo');
            $table->string('Contrasenia',20);
            $table->string('Nombre',15);
            $table->string('Apellido',50);
            $table->string('Telefono',15);                        
                
             $table->unsignedBigInteger('Id_usuariofk'); // Relación con usuarios
            $table->foreign('Id_usuariofk')->references('Id_usuario')->on('usuarios'); // clave foranea
              $table->unsignedBigInteger('Id_empresafk'); // Relación con empresas
            $table->foreign('Id_empresafk')->references('Id_empresa')->on('empresas'); // clave foranea

            

             });

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

       Schema::create('tipoprecios', function (Blueprint $table) {
           $table->id('id_tipoPrecio');
            $table->integer('Activo');
            $table->string('Tipo',20);            

        });

          Schema::create('inmuebles', function (Blueprint $table) {
            $table->id('Id_inmmueble');
            $table->integer('Activo');
            $table->string('Comision',15);
            $table->string('Latitud',255);
            $table->string('Longitud',255);
            $table->string('Zoom',255);
            $table->date('Creacion');
            $table->text('Descripcion',11);
             $table->string('Titulo',100);
            $table->decimal('Precio',10);
            $table->decimal('Construccion',10,2);
            $table->decimal('Terreno', 10,2);
            $table->decimal('Cuota_mantenimiento',10,2);
             $table->date('Fecha_entrega');
            $table->string('Planta',250);
             $table->string('Equipamiento',500);  

  $table->unsignedBigInteger('Id_asesorfk'); // Relación con tipoprecios
            $table->foreign('Id_asesorfk')->references('Id_asesor')->on('asesors'); 

              $table->unsignedBigInteger('id_preciofk'); // Relación con tipoprecios
            $table->foreign('id_preciofk')->references('id_tipoPrecio')->on('tipoprecios'); 
$table->unsignedBigInteger('id_productofk'); // Relación con tipoprecios
            $table->foreign('id_productofk')->references('id_producto')->on('caracteristicas'); 
            $table->unsignedBigInteger('id_modelofk'); // Relación con tipoprecios
            $table->foreign('id_modelofk')->references('id_modelo')->on('modelos'); 

            $table->unsignedBigInteger('id_coloniafk'); // Relación con tipoprecios
            $table->foreign('id_coloniafk')->references('id_colonia')->on('colonias'); 

       // clave foranea        
           
             });

        Schema::create('forma_pagos', function (Blueprint $table) {
            $table->id('Id_forma');
            $table->integer('Activo');
            $table->string('forma',20);
          
        });

        Schema::create('forma_inmuebles', function (Blueprint $table) {
            $table->id('Id_FI');        

            $table->unsignedBigInteger('Id_formafk'); // Relación con forma_pagos
            $table->foreign('Id_formafk')->references('Id_forma')->on('forma_pagos'); // clave foranea             

            $table->unsignedBigInteger('Id_inmmueblefk'); // Relación con forma_pagos
            $table->foreign('Id_inmmueblefk')->references('Id_inmmueble')->on('inmuebles'); // clave foranea             


        });

        Schema::create('clientes', function (Blueprint $table) {
            $table->id('Id_cliente');
            $table->integer('Activo');
            $table->string('Nombre',100);
            $table->string('Telefono',20);
            $table->string('Correo',100);
            $table->string('Estatus',10);
            $table->string('Mensaje',500);           
  $table->unsignedBigInteger('Id_inmmueblefk1'); // Relación con forma_pagos
            $table->foreign('Id_inmmueblefk1')->references('Id_inmmueble')->on('inmuebles'); // clave foranea             


        });
        Schema::create('galerias', function (Blueprint $table) {        
            $table->id('Id_foto');
            $table->integer('Activo');
            $table->string('Foto',200);

            $table->unsignedBigInteger('Id_inmmueblefk2'); // Relación con forma_pagos
            $table->foreign('Id_inmmueblefk2')->references('Id_inmmueble')->on('inmuebles'); // clave foranea  
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmuebles');
        Schema::dropIfExists('galerias');
         Schema::dropIfExists('clientes');
        Schema::dropIfExists('forma_inmuebles');
        Schema::dropIfExists('forma_pagos');
        Schema::dropIfExists('inmuebles');
         Schema::dropIfExists('tipoprecios');
         Schema::dropIfExists('caracteristicas');
        Schema::dropIfExists('seminuevos');
        Schema::dropIfExists('modelos');
         Schema::dropIfExists('desarrolladoras');
          Schema::dropIfExists('tipo_inmbuebles');
          Schema::dropIfExists('colonias');
        Schema::dropIfExists('estados');
        Schema::dropIfExists('ciudads');
        Schema::dropIfExists('asesors');
         Schema::dropIfExists('usuarios');
          Schema::dropIfExists('empresas');
    }
}
