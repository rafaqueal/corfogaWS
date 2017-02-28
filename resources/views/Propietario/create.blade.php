@extends('welcome')

@section('content')

<div class="container">
<p><b>Registro de Propietarios:</b> Para que el numero de cédula del propietario este disponible debe ser agregado primero como <u>Usuario</u></p>
    <div class="row">
        <div class="col-md-6 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-body">
                   
                        <form class="form-horizontal" role="form" action="/propietario" method="post">

                        <div class="form-group">
                            <label for="id" class="col-md-2 control-label">Código de criador</label>

                            <div class="col-md-4">
                                <input class="form-control" type="text" name="id" value="" placeholder="">
                                {{ ($errors->has('id')) ? $errors->first('id') : '' }}
                            </div>
                        </div>

                         <div class="form-group">
                              <label  class="col-md-2 control-label" for="usuario_cedula"> Cédula del Propietario</label>
                              <div class="col-md-4">
                                  <select class="form-control" id="usuario_cedula"  name="usuario_cedula">
                                        @foreach ($usuario as $usuario2)
                                           <option>
                                                {{$usuario2->cedula}}
                                           </option>
                                    
                                        @endforeach
                                    </select>
                              </div>
                              
                        </div>

        
                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-2">
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
          
                            <div class="box-footer">
                                <a href="/propietario" class="btn btn btn-info" role="button" style="float:right;">Ver Criadores</a>
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
</div>

@endsection