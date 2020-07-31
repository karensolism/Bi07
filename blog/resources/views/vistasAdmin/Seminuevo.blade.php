@extends('vistasAdmin/master')

@section('referencias')

<!--Estilos de prueba creados por mi :v-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" id="theme" />

@endsection


@section('content')

   <form action="{{route('Seminuevo.store')}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
        <!--comienzo del cuadro -->
      <div class="row">
          <!-- begin col-6 -->
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
                            <h4 class="panel-title">Seminuevo</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                   
     <h5 class="card-title">Catálogo Seminuevo</h5>

              <!--En este lo puse no visible porque el usuario no debe ser capaz de interactuar con las llaves primarias-->
       <input type="hidden" id="txt_IdSeminuevo" name="id_seminuevo" value="" >
       <!--id no visible-->
       <br/>
       <!--estado activo/inactivo-->
       <label for="activo" class="label-text">Activo</label>
       <br/>
       <!--No estoy muy segura de como va a funcionar el campo de activo, por lo tanto lo deje como un input de texto hasta saber-->
     <select id="activoSeminuevo" name="Activo">
         <option value="1">si</option>
         <option value="0">no</option>
       </select>
       <br/>
       <!--Antigüedad-->
       <label for="Antiguedad" class="label-text">Antigüedad</label>
       <br/>
       <input type="text" id="txt_antiguedad" name="antiguedad" class="text">
       <br/> 
      <!--TSeminuevo-->
       <label for="Tseminuevo" class="label-text">Tseminuevo</label>
       <br/>
       <input type="text" id="txt_Tseminuevo" name="Tseminuevo" class="text">
       <br/> 
       <!--Contrato-->
       <label for="Contrato" class="label-text">Contrato</label>
       <br/>
       <input type="text" id="txt_contrato" name="contrato" class="text">
       <br/> 
       <!--Fecha-->
       <label for="Fecha" class="label-text">Fecha</label>
       <br/>
       <input type="text" id="txt_fecha" name="fecha" class="text">
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

  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset('assets/plugins/dropzone/min/dropzone.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/highlight/highlight.common.js') }}"></script>
  <script src="{{ asset('assets/js/admin/demo/render.highlight.js') }}"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->
 

@endsection