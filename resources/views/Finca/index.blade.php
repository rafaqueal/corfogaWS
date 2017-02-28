@extends('welcome')

@section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
             
                @section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
             
                <table class="table">
                  <thead>
                          <tr>
                            <th> Identificador de Finca</th>
                            <th> Nombre de Finca</th>
                            <th> Región</th>
                            <th> Id Propietario</th>
                            <th> Propietario</th>
                            <th></th>
                            <th></th>
                            <th></th>

                          </tr>
                          <br>
                  </thead>

                  <tbody>
            
                    @foreach ($finca as $item)
                                  <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->nombreFinca }}</td>
                                        <td>{{ $item->region }}</td>
                                        <td>{{ $item->propietario_id}}</td>
                                        <td>{{ $item->nombre}}</td>
                                        <td>
                                          <a href="/finca/{{$item->id}}" class="btn btn-success btn-sm" role="button"> Detalle </a>
                                        </td>

                                        <td>
                                           <a href="/finca/{{ $item->id }}/edit" class= "btn btn-warning btn-sm" role="button">Editar</a> 

                                        </td>

                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal{{ $item->id}}">Eliminar</button>
                                        </td>
                                           
                        
                                  </tr>

                                    <div class="modal fade" id="myModal{{ $item->id}}" role="dialog">
           
                                      <div class="modal-dialog">

                                       
                                              <div class="modal-content">
                                               
                                                      <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                       
                                                               <h4 class="modal-title"><b>¿Desea Eliminar la finca del sistema?</b> </h4>
                                                       
                                                      </div>
                                                       
                                                       
                                                      <div class="modal-body">
                                                               La finca será eliminado del sistema
                                                      </div>
                                                       
                                                       
                                                      <div class="modal-footer">
                                                      
                                                               <form  action="/finca/{{ $item->id}}" method="post">
                                                                  <input type="hidden" name="_method" value="delete">
                                                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                  <input  class= "btn btn-danger btn-sm"  value="Eliminar" type="submit" name="name" >
                                                                </form>
                                                                

                                                                <button href="/finca" type="button" class="btn btn-primary btn-sm" type="submit" name="name" data-dismiss="modal">Cancelar</button>

                                                      </div>
                                               
                                              </div>
                                       
                                      </div>
           
                              </div>


                                    
                    @endforeach


            </tbody>
            </table>
          </div>
        </div>
      </div>

   </div>



   
   @endsection 
          </div>
        </div>
      </div>

   </div>



   
   @endsection 