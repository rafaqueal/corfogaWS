@extends('welcome')

@section('content')

<div class="container">
<h5>Registro de Fincas</h5>
    <div class="row">
        <div class="col-md-6 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-body">
                   
                        <form class="form-horizontal" role="form" action="/finca" method="post">

                        <div class="form-group">
                            <label for="nombre" class="col-md-2 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="nombre" value="" placeholder="Ingrese el nombre">
                                {{ ($errors->has('nombre')) ? $errors->first('nombre') : '' }}
                            </div>
                        </div>

                        <div class="form-group">
                              <label class="col-md-2 control-label" for="criador">Criador</label>
                              <div class="col-md-5">
                                   <select class="form-control" id="criador" name="criador">
                                       @foreach ($propietario as $propietario)
                                           <option>
                                                {{$propietario->cedula}}
                                           </option>
                                
                                        @endforeach
                                    </select>
                              </div>
                             
                        </div>


                        <div class="form-group">
                            <label for="id" class="col-md-2 control-label">Identificador</label>

                            <div class="col-md-4">
                                <input class="form-control" type="text" name="id" value="" placeholder="Identificador">
                                {{ ($errors->has('id')) ? $errors->first('id') : '' }}
                            </div>
                        </div>



                        
                        <div class="form-group">
                              <label for="region" class="col-md-2 control-label">Region</label>
                              <div class="col-md-4">
                                 <select class="form-control" id="region1" class="col-md-4 control-label" name="region">
                                    <option>Central</option>
                                    <option>Chorotega</option>
                                    <option>Brunca</option>
                                    <option>Pacífico Central</option>
                                    <option>Huetar Norte</option>
                                    <option>Huetar Atlántica</option>
                                </select>

                              </div>
                              
                        </div>


                         

                        <br>
        
                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-2">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input class="btn btn-primary btn-block" type="submit" name="name" value="Agregar Finca">
                            </div>
                        </div>
                    </form>
                    @if (session('message'))
                                  <div class="content2" >
                                      <p>{{ session('message') }}</p>
                                      <br><br>
                                  </div>
          
                                  <div class="box-footer" >
                                        <a href="/finca" class="btn btn btn-info" role="button" style="float:right;">Ver Fincas</a>
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