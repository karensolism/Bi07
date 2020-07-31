@extends('vistasAdmin/master')

@section('referencias')

<!--Estilos de prueba creados por mi :v-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" id="theme" />

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
   <link href="{{ asset('assets/plugins/dropzone/min/dropzone.min.css') }}" rel="stylesheet" />
  <!-- ================== END PAGE LEVEL STYLE ================== -->
@endsection


@section('content')

<form action="{{route('Galeria.store')}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
         <div class="col-md-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-dropzone-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Dropzone</h4>
                        </div>
                        <div class="panel-body text-inverse">
                            <div id="dropzone">
                                <form action="/upload" class="dropzone needsclick" id="demo-upload">
                                    <div class="dz-message needsclick">
                                      Drop files <b>here</b> or <b>click</b> to upload.<br />
                                        <span class="dz-note needsclick">
                                            (This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="hljs-wrapper">
                        <pre><code class="html">&lt;div id="dropzone"&gt;
  &lt;form action="/upload" class="dropzone needsclick" id="demo-upload"&gt;
    &lt;div class="dz-message needsclick"&gt;
      Drop files &lt;b&gt;here&lt;/b&gt; or &lt;b&gt;click&lt;/b&gt; to upload.&lt;br /&gt;
      &lt;span class="dz-note needsclick"&gt;
        (This is just a demo dropzone. Selected files are &lt;strong&gt;not&lt;/strong&gt; actually uploaded.)
      &lt;/span&gt;
    &lt;/div&gt;
  &lt;/form&gt;
&lt;/div&gt;</code></pre>
            </div>

                   <button class="button float-right">Enviar</button>
                    </div>
                    <!-- end panel -->
          </div>
                <!-- end col-10 -->
          
    
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