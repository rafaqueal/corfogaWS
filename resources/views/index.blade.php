
@extends('welcome')

@section('content2')

                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Escritorio
                            </li>
                        </ol>
                    </div>
                </div>


                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Reporte de inspector Marco Fallas </strong>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class = "fa fa-truck fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">8</div>
                                        <div> Reporte de Inspecciones </div>
                                    </div>
                                </div>
                            </div>

                            <a href="/vistaConstruccion">
                                <div class="panel-footer">
                                    <span  class="pull-left">Ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-database fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">150</div>
                                        <div>Detalle de Fincas</div>
                                    </div>
                                </div>
                            </div>
                            <a href="/finca">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class = "fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">8</div>
                                        <div> Calendario </div>
                                    </div>
                                </div>
                            </div>

                            <a href="/vistaConstruccion">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>



                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Actividad </h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">hace 5min</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendario Actualizado
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">hace 4 min</span>
                                        <i class="fa fa-fw fa-comment"></i> Comentarios a una inspección
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">hace 25 min</span>
                                        <i class="fa fa-fw fa-truck"></i> Revisión Inspecciones
                                    </a>
                                    
                                    <a href="#" class="list-group-item">
                                        <span class="badge">hace 1 hora </span>
                                        <i class="fa fa-fw fa-user"></i> Creación de perfil de usuario
                                    </a>
                                   
                                    <a href="#" class="list-group-item">
                                        <span class="badge">hace 2 días</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "Insertar Animales de ASOCEBU"
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="/vistaConstruccion">Ver toda la actividad <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                  

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



    </div>

    
@endsection
   