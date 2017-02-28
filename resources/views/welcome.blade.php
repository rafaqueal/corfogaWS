<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PNEMG Corfoga</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/sb-admin.css') }}" rel="stylesheet">

 
    <!-- Custom Fonts -->
    <link href=" {{URL::asset('/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">



</head>

<body>

           
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/home">PNEMG CORFOGA</a>
            </div>
            

            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="/vistaConstruccion">
                                <div class="media">
                                    
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Marco Fallas</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Ayer at 4:32 PM</p>
                                        <p>Detalles del proyecto TEC</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="/vistaConstruccion">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Eder Naranjo</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Hoy at 4:32 PM</p>
                                        <p>Minuta TEC Semana 4</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                
                        <li class="message-footer">
                            <a href="/vistaConstruccion">Bandeja de correo</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        
                        
                        <li>
                            <a href="/vistaConstruccion">Reunión ASOCEBU <span class="label label-danger">Importante</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/vistaConstruccion">Todas las alertas</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                   

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  <i class="fa fa-user"></i>   {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="/vistaConstruccion"><i class="fa fa-fw fa-user"></i> Perfil </a>
                        </li>
                        <li>
                            <a href="/vistaConstruccion"><i class="fa fa-fw fa-envelope"></i> Mensajes </a>
                        </li>
                        <li>
                            <a href="/vistaConstruccion"><i class="fa fa-fw fa-gear"></i> Ajustes </a>
                        </li>
                        <li class="divider"></li>
                         <li>
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                        </form>

                    </li>
                    </ul>
                </li>
            </ul>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="/home"><i class="fa fa-fw fa-dashboard"></i> Escritorio</a>
                    </li>

                     <li>
                        <a data-toggle="collapse" data-parent="#" href="#collapseAnimales" "><i class="fa fa-paw"></i> Gestionar Animales <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="collapseAnimales" class="collapse">
                            <li>
                                <a href="/cargar">Cargar Animal</a>
                            </li>
                            <li>
                                <a href="/animales/">Visualizar Animales</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a data-toggle="collapse" data-parent="#" href="#collapseUsuario" "><i class="fa fa-user"></i> Gestionar Usuarios <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="collapseUsuario" class="collapse">
                            <li>
                                <a href="/usuario/create">Crear Usuario</a>
                            </li>


                            <li>
                                <a href="/usuario">Visualizar Usuarios Registrados</a>
                            </li>

                        </ul>
                    </li>


                    <li>
                        <a data-toggle="collapse" data-parent="#" href="#collapsePropietario" "><i class="fa fa-home"></i> Gestionar Criadores <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="collapsePropietario" class="collapse">
                            <li>
                                <a href="/propietario/create">Crear Criador</a>
                            </li>


                            <li>
                                <a href="/propietario">Visualizar Criadores</a>
                            </li>


                        </ul>
                    </li>

                    <li>
                        <a data-toggle="collapse" data-parent="#" href="#collapseFinca" "><i class="fa fa-truck"></i> Gestionar Fincas <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="collapseFinca" class="collapse">
                            <li>
                                <a href="/finca/create">Crear Finca</a>
                            </li>


                            <li>
                                <a href="/finca">Visualizar Finca</a>
                            </li>

                        </ul>
                    </li>


            

                    <li>
                        <a href="/vistaConstruccion"><i class="fa fa-list-alt"></i> Reporte de Pedrigrí </a>
                    </li>



                    <li>
                        <a data-toggle="collapse" data-parent="#" href="#collapseInspectores" "><i class="fa fa-search"></i> Gestionar Inspectores <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="collapseInspectores" class="collapse">
                            <li>
                                <a href="/vistaConstruccion">Crear Inspector</a>
                            </li>

                            <li>
                                <a href="/vistaConstruccion">Visualizar Inspectores Registrados</a>
                            </li>

                            <li>
                                <a href="/vistaConstruccion">Visualizar Inspecciones</a>
                            </li>

                        </ul>
                    </li>



                    <li>

                    <li>
                        <a href="/vistaConstruccion"><i class="fa fa-users"></i> Adm Usuarios</a>
                    </li>

                    <li>
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                        </form>

                    </li>
            
                    <li>
                        <a href="/vistaConstruccion"><i class="fa fa-fw fa-gear"></i> Ajustes </a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">
                            <img src="{{URL::asset('/img/logo.jpg')}}" width="90" height="90">
                            PNEMG<small>
                        </h1>

                         @yield('content') <!-- index de Animal -->

                         @yield('content1') <!-- cargar Animales -->


                        @yield('content2') <!-- index principal -->

                      

                    </div>

                   
                </div>


                <!-- /.row -->

                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



    </div>

    <footer class="footer-distributed">

            
    <div align="center" style='color:white;'>
    <br>
        <a href="mailto:informacion@corfoga.org">E-mail informacion@corfoga.org</a>
        <p>Tel: (506) 4070 - 1011 Fax: (506) 2234 - 2576</p>
        <p>Copyright © 2017 CORFOGA. Todos los derechos reservados.</p> 
    </div>
   
    </footer>



    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>



</body>

</html>
