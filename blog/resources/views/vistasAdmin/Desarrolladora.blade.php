 @extends('vistasAdmin/master')

@section('referencias')

<!--Estilos de prueba creados por mi :v-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" id="theme" />

@endsection


@section('content')

<form action="{{route('Desarrolladora.store')}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}

        <!--comienzo del cuadro -->
      <div class="row">
          <!-- begin col-12 -->
          <div class="col-lg-12" >
              <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="table-basic-1">
                      <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Desarrolladora </h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                   
     <h5 class="card-title">Catálogo Desarrolladora </h5>

        <!--En este lo puse no visible porque el usuario no debe ser capaz de interactuar con las llaves primarias-->
       <input type="hidden" id="txt_IdDesa" name="Id_desarrolladora" value="" >
       <!--id no visible-->
       <br/>
       <!--estado activo/inactivo-->
       <label for="activo" class="label-text">Activo</label>
       <br/>
       <!--No estoy muy segura de como va a funcionar el campo de activo, por lo tanto lo deje como un input de texto hasta saber-->
       <select id="activoTipoPrecio" name="Activo">
         <option value="1">si</option>
         <option value="0">no</option>
       </select>
       <br/>
       <!--Teléfono-->
       <label for="telefono" class="label-text">Telefono</label>
       <br/>
       <input type="text" id="txt_telefonoDesa" name="Tel_desa" class="text">
       <br/>
       <!--correo-->
       <label for="correo" class="label-text">Correo</label>
       <br/>
       <input type="email" id="txt_correoDesa" name="Correo" class="text">
       <br/>
       <!--Logo-->
       <label for="logo"class="label-text">Logo</label>
       <br/>
       <input type="file" id="txt_logoDesa" name="Logo" class="file">
       <br/>
       <!--Nombre-->
       <label for="nombre" class="label-text">Nombre</label>
       <br/>
       <input type="text" id="txt_nombreDesa" name="Nombre_desa" class="text">
       <br/>
              <button class="button float-right">Enviar</button>
                           

                        </div>
                        <!-- end panel-body -->
                        <!-- begin hljs-wrapper -->
                      <!--   <div class="hljs-wrapper">
                          <pre><code class="html">&lt;table class="table"&gt;
                           ...
                          &lt;/table&gt;</code></pre>
                        </div>-->
                        <!-- end hljs-wrapper -->
                    </div>
                    <!-- end panel -->
          </div>
      </div>
          
    
    </form>

@endsection

@section('script')

 <script src="{{ asset('assets/js/admin/jquery.3.2.1.min.js') }}"></script> 
 <script src="{{ asset('assets/js/admin/bootstrap.min.js') }}"></script> 
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js" type="text/javascript"></script>

@endsection

