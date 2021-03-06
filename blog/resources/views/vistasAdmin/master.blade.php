<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/animate/animate.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/admin/default/style.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/admin/default/style-responsive.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/admin/default/theme/default.css') }}" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />
	
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script> 
		<!-- ================== END BASE JS ================== -->

<!-- ================== Referencias adicionales a la página maestra ================== -->
	@yield('referencias')

    <title>DashSoloDesarrollos</title>

    
	

</head>
<body>
    <!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">

		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span img src="../assets/images/home/logobienesraices.jpg" class="navbar-logo" alt=""></span> 
					<b>Bi07</b> Bienes Raíces</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li>
					<form class="navbar-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Búsqueda" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</li>
				<li class="dropdown">
					<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
						<i class="fa fa-bell"></i>
						<span class="label">5</span>
					</a>
					<ul class="dropdown-menu media-list dropdown-menu-right">
						<li class="dropdown-header">Notificaciones (5)</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-bug media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
									<div class="text-muted f-s-11">3 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="../assets/img/user/user-1.jpg" class="media-object" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">John Smith</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">25 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="../assets/img/user/user-2.jpg" class="media-object" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Olivia</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">35 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-plus media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New User Registered</h6>
									<div class="text-muted f-s-11">1 hour ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-envelope media-object bg-silver-darker"></i>
									<i class="fab fa-google text-warning media-object-icon f-s-14"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New Email From John</h6>
									<div class="text-muted f-s-11">2 hour ago</div>
								</div>
							</a>
						</li>
						<li class="dropdown-footer text-center">
							<a href="javascript:;">View more</a>
						</li>
					</ul>
				</li>
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<img src="../assets/img/user/user-13.jpg" alt="" /> 
						<span class="d-none d-md-inline">Adam Schwartz</span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:;" class="dropdown-item">Log Out</a>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
        <!-- end #header -->
        
	<!-- begin #sidebar -->
    <div id="sidebar" class="sidebar">
        <!-- begin sidebar scrollbar -->
        <div data-scrollbar="true" data-height="100%">
            <!-- begin sidebar user -->
            <ul class="nav">
                <li class="nav-profile">
                    <a href="javascript:;" data-toggle="nav-profile">
                        <div class="cover with-shadow"></div>
                        <div class="image">
                            <img src="../assets/img/user/user-13.jpg" alt="" />
                        </div>
                        <div class="info">
                            <b class="caret pull-right"></b>
                            Administrador
                            <small>Front end developer</small>
                        </div>
                    </a>
                </li>
                <li>
                    <ul class="nav nav-profile">
                        <li><a href="javascript:;"><i class="fa fa-cog"></i> Configuraciones</a></li>
                        <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Editar Perfil</a></li>
                        <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Ayuda</a></li>
                    </ul>
                </li>
            </ul>
            <!-- end sidebar user -->
            <!-- begin sidebar nav -->
            <ul class="nav">
             <!--   <li class="nav-header">Navigation</li>
                <li class="has-sub active">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-th-large"></i>
                        <span>Dashboard</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="active"><a href="index.html">Dashboard v1</a></li>
                        <li><a href="index_v2.html">Dashboard v2</a></li>
                    </ul>
                </li>-->
                <!--Gestión de desarrolladoras-->
                <li class="has-sub">
                    <a href="javascript:;">
                        <!--<span class="badge pull-right">10</span>-->
                        <i class="fa fa-hdd"></i> 
                        <span>Gestión de Desarrolladoras</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="Desarrolladora">Desarrolladora</a></li>
                        <li><a href="TipodeInmueble.blade.php">Tipo de inmueble</a></li>
                        <li><a href="Modelo">Modelo</a></li>
                    </ul>
                </li>
                <!--Gestión de Empresa-->
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-gem"></i>
                        <span>Gestión de Empresas </span> 
                    </a>
                    <ul class="sub-menu">
                        <li><a href="Empresa">Empresa</a></li>
                        <li><a href="ui_typography.html">Asesor</a></li>
                        
                    </ul>
                </li>
                <!--li>
                    <a href="bootstrap_4.html">
                        <div class="icon-img">
                            <img src="../assets/img/logo/logo-bs4.png" alt="" />
                        </div>
                        <span>Bootstrap 4 <span class="label label-theme m-l-5">NEW</span></span> 
                    </a>
                </li>-->
                 <!--Gestión de Direcion-->
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-list-ol"></i>
                        <span>Gestión de Dirección </span> 
                    </a>
                    <ul class="sub-menu">
                        <li><a href="Estado">Estado </a></li>
                        <li><a href="Ciudad">Ciudad </a></li>
                        <li><a href="Colonia">Colonia</a></li>
                       
                    </ul>
                </li>
                 <!--Gestión de Extras-->
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-list-ol"></i>
                        <span>Gestión de Extras </span> 
                    </a>
                    <ul class="sub-menu">
                        <li><a href="TipoPrecio">Tipo de precio </a></li>
                        <li><a href="Servicio">Servicio </a></li>
                        <li><a href="FormaPago">Forma de Pago</a></li>
                       
                    </ul>
                </li>
                 <!--Gestión de Inmueble-->
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-star"></i> 
                        <span>Front End</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="" target="_blank">Inmueble</a></li>
                        <li><a href="Galeria/create" target="_blank">Galeria</a></li>
    
                    </ul>
                </li>
              
                <!-- begin sidebar minify button -->
                <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                <!-- end sidebar minify button -->
            </ul>
            <!-- end sidebar nav -->
        </div>
        <!-- end sidebar scrollbar -->
    </div>
    <div class="sidebar-bg"></div>
    <!-- end #sidebar -->
    </div>
    <!-- end page container -->

 <!-- Comienzo  de la Seccion para el contenido de la página 
Se "imprime"  lo que se quiere mostrar en un div container 
  -->

 	  <div  class="container">
      @yield('content')
    </div>


  
    <!-- fin Seccion para el contenido de la página  -->

    <!-- Scrip adicionales a la página maestra-->
      @yield('script')

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
	<script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/jquery.flot.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/jquery.flot.time.min.js') }}"></script> 
	<script src="{{ asset('assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/jquery.flot.pie.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('assets/js/admin/demo/dashboard.min.js') }}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
		});
	</script>
</body>
</html>