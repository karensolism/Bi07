<!DOCTYPE html>
<html>
<head>
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/admin/default/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/admin/default/style-responsive.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/admin/default/theme/default.css') }}" rel="stylesheet" id="theme" />
    <!--Estilos de prueba creados por mi :v-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" id="theme" />

    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script> 
    <!-- ================== END BASE JS ================== -->
    
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" id="theme" />
     <title >SoloDesarrollosAdmin</title>
</head>
<body>

     <form action="" method="POST" enctype="multipart/form-data">

  <div class="panel panel-inverse" data-sortable-id="form-plugins-14">
                      <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Masked Input</h4>
                        </div>
                      <!-- end panel-heading -->
                      <!-- begin panel-body -->
                        <div class="panel-body panel-form">
                            <form class="form-horizontal form-bordered">
                <div class="form-group row">
                  <label class="col-md-4 col-form-label">Date</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="masked-input-date" placeholder="dd/mm/yyyy" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-4 col-form-label">Phone</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="masked-input-phone" placeholder="(999) 999-9999" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-4 col-form-label">Tax ID</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="masked-input-tid" placeholder="99-9999999" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-4 col-form-label">Product Key</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="masked-input-pkey" placeholder="a*-999-a999" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-4 col-form-label">SSN</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="masked-input-ssn" placeholder="999/99/9999" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-4 col-form-label">SSN</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="masked-input-pno" placeholder="AAA-9999-A" />
                  </div>
                </div>
              </form>
                        </div>
                        <!-- end panel-body -->
                    </div>
           <script src="{{ asset('assets/js/admin/jquery.3.2.1.min.js') }}"></script> 
                    <script src="{{ asset('assets/js/admin/bootstrap.min.js') }}"></script> 
                    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js" type="text/javascript"></script>

                    <!-- ================== BEGIN BASE JS ================== -->

  <script src="{{ asset('assets/plugins/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js') }}"></script>
  <!--[if lt IE 9]>
    <script src="../assets/crossbrowserjs/html5shiv.js"></script>
    <script src="../assets/crossbrowserjs/respond.min.js"></script>
    <script src="../assets/crossbrowserjs/excanvas.min.js"></script>
  <![endif]--> 
  <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/js/admin/theme/default.min.js') }}"></script>
  <script src="{{ asset('assets/js/admin/apps.min.js') }}"></script>
  <!-- ================== END BASE JS ================== -->

  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset('assets/plugins/dropzone/min/dropzone.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/highlight/highlight.common.js') }}"></script>
  <script src="{{ asset('assets/js/admin/demo/render.highlight.js') }}"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->
    <script>
    $(document).ready(function() {
      App.init();
      Highlight.init();
    });
  </script>
    
    </form>

</body>
</html>

    

	
   

   

    
   
   


