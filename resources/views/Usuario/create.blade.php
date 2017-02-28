@extends('welcome')

@section('content')

<div class="container">

    <p><b>Registro de usuarios</b></p>
    <br>
            <div class="row">
                <div class="col-md-6 col-md-offset-0">
                    <div class="panel panel-default">

                        <div class="panel-body">
                           
                            <form class="form-horizontal" role="form" action="/usuario" method="post">

                                

                                <div class="form-group">
                                    <label for="nombre" class="col-md-2 control-label">Nombre</label>

                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre Completo">
                                        {{ ($errors->has('nombre')) ? $errors->first('nombre') : '' }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="id" class="col-md-2 control-label">Id</label>

                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="id" value="" placeholder="ingrese id">
                                        {{ ($errors->has('id')) ? $errors->first('id') : '' }}
                                    </div>
                                </div>

                               
                                <div class="form-group">
                                    <label for="email" class="col-md-2 control-label">Correo electonico</label>

                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="email" value="" placeholder="Correo electronico">
                                        {{ ($errors->has('email')) ? $errors->first('email') : '' }}
                                    </div>
                                </div>


                                 <div class="form-group">
                                    <label for="contrasenia" class="col-md-2 control-label">Contraseña</label>

                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="contrasenia" value="" placeholder="Contraseña">
                                        {{ ($errors->has('contrasenia')) ? $errors->first('contrasenia') : '' }}
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="cedula" class="col-md-2 control-label">Identidicador o Cédula</label>

                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="cedula" value="" placeholder="">
                                        {{ ($errors->has('cedula')) ? $errors->first('cedula') : '' }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="telefono" class="col-md-2 control-label">Telefono</label>

                                    <div class="col-md-4">
                                        <input class="form-control" type="text" name="telefono" value="" placeholder="Formato sin guíon">
                                        {{ ($errors->has('telefono')) ? $errors->first('telefono') : '' }}
                                    </div>
                                </div>


                                <div class="form-group">
                                      <label for="rol" class="col-md-2 control-label">Rol</label>
                                      <div class="col-md-4">
                                          <select class="form-control" id="rol" control-label" name="rol">
                                            <option>admin</option>
                                            <option>criador</option>
                                            <option>inspector</option>
                                          </select>
                                       </div>
                                </div>

                                
                                <br>
                                <div class="form-group">
                                    <div class="col-md-2 col-md-offset-3">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input class="btn btn-primary btn-block" type="submit" name="name" value="Crear">
                                    </div>
                                </div>

                            </form>
                            @if (session('message'))
                                  <div class="content2" >
                                      <p>{{ session('message') }}</p>
                                      <br><br>
                                  </div>
          
                                  <div class="box-footer" >
                                        <a href="/usuario" class="btn btn btn-info" role="button" style="float:right;">Ver Usuarios Agregados</a>
                                  </div>
                            @endif 

                             <script type="text/javascript" src="../js/jquery.js"></script>
                             <script type="text/javascript">
                                $(document).ready(function() {   
                                    setTimeout(function() {
                                        $(".content2").fadeOut(1500);
                                    },3000);
                                });
                             </script>

                        </div>
                    </div>
                </div>
            </div>

            <br>
            
            
</div>

   



@endsection