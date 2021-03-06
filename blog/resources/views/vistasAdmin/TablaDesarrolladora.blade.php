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
                <h4 class="panel-title">Catálogo de desarrolladora <span class="label label-success m-l-5 t-minus-1"><a href="Desarrolladora/create">Agregar</a></li></span></h4>
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
                                <th>Tel_desa</th>
                                <th>Corrreo</th> 
                                <th>Logo</th>                             
                                <th>Nombre_desa</th> 
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($desarrolladoras as $desarrolladora)
                            <tr>
                                <td>{{$desarrolladora->Id_desarrolladora}}</td>
                                <td>{{$desarrolladora->Activo}}</td>
                                <td>{{$desarrolladora->Tel_desa}}</td>
                                <td>{{$desarrolladora->Correo}}</td>
                                <td>{{$desarrolladora->Logo}}</td>
                                <td>{{$desarrolladora->Nombre_desa}}</td>

                     
                                <td class="with-btn" nowrap>
                                    <a href="{{route('Desarrolladora.edit',$desarrolladora->Id_desarrolladora)}}" class="btn btn-sm btn-primary width-60 m-r-2">Editar</a>
                                   <form action="{{route('Desarrolladora.destroy',$desarrolladora->Id_desarrolladora)}}" method="POST" >
                                        {{csrf_field()}}
                                        {{method_field('Delete')}} 
                                    <br>  
                                    <button type="submit" onclick="return confirm('¿BORRAR?')">Borar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </di
            v>
            <!-- end panel-body -->
            <!-- begin hljs-wrapper -->
            <div class="hljs-wrapper">
            
            </div>
            <!-- end hljs-wrapper -->
        </div>
        <!-- end panel -->
@endsection