@extends('vistasAdmin/master')

@section('referencias')

<!--Estilos de prueba creados por mi :v-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" id="theme" />

@endsection

@section('content')
 <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-7">
            <!-- begin panel-heading -->
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">Catálogo de característica <a href="Modelo/create" class="label label-success m-l-5 t-minus-1">Agregar</a></li>
                </h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">
                <!-- begin table-responsive -->
                <div class="table-responsive">
                    <table class="table table-striped m-b-0">
                              ...
                        </div>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Activo</th>
                                <th>Modelo</th>
                                <th>tipo de inmueble</th>
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($modelos as $modelo)
                            <tr>
                                <td>{{$modelo->Id_modelo}}</td>
                                <td>{{$modelo->Activo}}</td>
                                <td>{{$modelo->Modelo}}</td>
                                <td>{{$modelo->Id_tipofk}}</td>
                                <td class="with-btn" nowrap>
                                    <a href="#" class="btn btn-sm btn-primary width-60 m-r-2">Edit</a>
                                    <br>  
                                    <a href="#" class="btn btn-sm btn-white width-60">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            <!-- end panel-body -->
            <!-- begin hljs-wrapper -->
            <div class="hljs-wrapper">
            
            </div>
            <!-- end hljs-wrapper -->
        </div>
        <!-- end panel -->
@endsection