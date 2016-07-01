<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('title')

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('assets/bower_components/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{URL::asset('assets/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{{URL::asset('assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{URL::asset('assets/bower_components/datatables-responsive/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">


    <link href="{{URL::asset('assets/bower_components/datatables-buttons/css/buttons.dataTables.min.css')}}" rel="stylesheet">

    <link href="{{URL::asset('assets/bower_components/datatables-buttons/css/buttons.bootstrap.css')}}" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.css">



    <!-- Custom CSS -->
    <link href="{{URL::asset('assets/css/sb-admin-2.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/animate.css')}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{URL::asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
#preloader  {
     position: absolute;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background-color: #fefefe;
     z-index: 99;
    height: 100%;
 }

#status  {
     width: 200px;
     height: 200px;
     position: absolute;
     left: 50%;
     top: 50%;
     background-image: url(http://cdn.allevents.in/new/images/hex-loading.gif);
     background-repeat: no-repeat;
     background-position: center;
     margin: -100px 0 0 -100px;
 }
 </style>
</head>
    <body>

<div id="preloader">
  <div id="status">&nbsp;</div>
</div>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">HuBu!</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file-image-o fa-fw"></i> Multimedia<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ URL::to('archivo') }}">Archivos</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('comentario') }}">Comentarios</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('contenido') }}">Contenidos</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('archivo') }}">Extenciones</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('galeria') }}">Galerias</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('archivo') }}">Tipo de Archivo</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('contenido') }}">Tipo de Contenido</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('galeria') }}">Tipo de Galeria</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Ventas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ URL::to('producto') }}">Bodegas</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('despacho') }}">Despachos</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('pedido') }}">Estado Pedidos</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('pedido') }}">Pedidos</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('despacho') }}">Tipo de Despacho</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                        <li>
                            <a href="#"><i class="fa fa-barcode fa-fw"></i> Articulos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ URL::to('producto') }}">Productos</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('servicio') }}">Servicios</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('catalogo') }}">Catalogo</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('producto/estado') }}">Estado Producto</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('fabricante') }}">Fabricantes</a>
                                </li>
                                  <li>
                                    <a href="{{ URL::to('proveedor') }}">Proveedores</a>
                                </li>
                                     <li>
                                    <a href="{{ URL::to('categoria') }}">Categorias</a>
                                </li>
                                     <li>
                                    <a href="{{ URL::to('categoria') }}">Tipo Categoria</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Informaciones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ URL::to('direccion') }}">Paises</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('direccion') }}">Comunas</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('direccion') }}">Ciudades</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('contacto') }}">Contactos</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('direccion') }}">Direcciones</a>
                                </li>
                                  <li>
                                    <a href="{{ URL::to('direccion') }}">Regiones</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Personas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ URL::to('usuario') }}">Tipo Cuenta</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('rol') }}">Roles</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('privilegio') }}">Privilegios</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('persona') }}">Personas</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('cliente') }}">Clientes</a>
                                </li>
                                  <li>
                                    <a href="{{ URL::to('persona') }}">Estado Civil</a>
                                </li>
                                     <li>
                                    <a href="{{ URL::to('usuario') }}">Usuarios</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
         @yield('content')
        
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!-- jQuery -->
    <script src="{{URL::asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{URL::asset('assets/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{URL::asset('assets/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>

    <script src="{{URL::asset('assets/bower_components/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/bower_components/datatables-buttons/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/bower_components/datatables-buttons/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/bower_components/datatables-buttons/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/bower_components/datatables-buttons/js/buttons.html5.min.js')}}"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.js"></script>

    <!-- Latest compiled and minified Locales -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/locale/bootstrap-table-es-SP.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{URL::asset('assets/js/sb-admin-2.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap-notify.js')}}"></script>    

         @yield('javascript')
<script type="text/javascript">
    jQuery(window).load(function() { // makes sure the whole site is loaded
    jQuery("#status").fadeOut(); // will first fade out the loading animation
    jQuery("#preloader").delay(1000).fadeOut("slow"); // will fade out the white DIV that covers the website.
});
</script>
    </body>
</html>