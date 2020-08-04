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
                <h4 class="panel-title">UI Elements in Table <span class="label label-success m-l-5 t-minus-1"><a href="Servicio/create">Agregar</a></li></span></h4>
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
                                <th>Servicio</th>
                                
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($servicios as $servicio)
                            <tr>
                                <td>{{$servicio->Id_servicio}}</td>
                                <td>{{$servicio->Activo}}</td>
                                <td>{{$servicio->Servicio}}</td>
                                
                                <td class="with-btn" nowrap>
                                    <a href="{{route('Servicio.edit',$servicio->Id_servicio)}}" class="btn btn-sm btn-primary width-60 m-r-2">Editar</a>
                                   <form action="{{route('Servicio.destroy',$servicio->Id_servicio)}}" method="POST" >
                                        {{csrf_field()}}
                                        {{method_field('Delete')}} 
                                    <button type="submit" onclick="return confirm('¿BORRAR?')">Borar</button>
                                    </form>
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