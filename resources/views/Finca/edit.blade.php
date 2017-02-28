@extends('welcome')

@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-0">
            <div class="panel panel-default">
                
                 <div class="panel-body">

                      <form class="form-horizontal" action="/finca/{{ $finca->id}}" method="post">
                      
                     <div class="form-group">
                            <label for="nombre" class="col-md-3 control-label">Nombre</label>

                            <div class="col-md-4">
                                <input class="form-control" type="text" name="nombre" value="{{$finca->nombre}}" placeholder="" required>
                                {{ ($errors->has('nombre')) ? $errors->first('nombre') : '' }}
                            </div>
                        </div>



                          <div class="form-group">
                              <label for="region" class="col-md-3 control-label">Region</label>
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


                         <div class="form-group">
                            <label class="col-md-3 control-label" for="propietario">Identificación de Criador </label>
                              <div class="col-md-4">
                                  <select class="form-control" id="propietario_id" name="propietario_id">
                                      @foreach ($propietario as $propietario)
                                         <option>
                                              {{$propietario->id}}
                                         </option>
                                      @endforeach
                                  </select>
                              </div>
                        </div>

                        <div align="center" class="form-group">
                            <input type="hidden" name="_method" value="put">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-info" name="name" value="Editar">
                        </div>

                      


                  </form>
                </div>

            </div>

        </div>

    </div>
  
  </div>

 
@endsection







