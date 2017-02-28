@extends('welcome')

@section('content')

  <div class="container">
  <p>En esta sección se muestran todos los Criadores registrados en el sistema </p>
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
               
                <table class="table">
                  <thead>
                          <tr>
                            <th>Código criador</th>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                          <br>
                  </thead>

                  <tbody>
                    @foreach ($propietario as $item)
                                  <tr>
                                        <td scope="row">{{ $item->id }}</td>
                                        
                                        <td>{{ $item->cedula}}</td>

                                        <td>{{ $item->nombre}}</td>

                                        <td> 
                                          <a href="/propietario/{{$item->id }}" class="btn btn-success btn-sm" role="button"> Detalle </a>
                                        </td>

                                        <td>
                                          <a href="/propietario/{{$item->id }}/edit" class="btn btn-warning btn-sm" class= "btn btn-warning" role="button">Editar</a> 
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
                                                       
                                                               <h4 class="modal-title"><b>¿Desea Eliminar el Criador del sistema?</b> </h4>
                                                       
                                                      </div>
                                                       
                                                       
                                                      <div class="modal-body">
                                                               El Criador será eliminado del sistema
                                                      </div>
                                                       
                                                       
                                                      <div class="modal-footer">
                                                      
                                                               <form  action="/propietario/{{ $item->id}}" method="post">
                                                                  <input type="hidden" name="_method" value="delete">
                                                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                  <input  class= "btn btn-danger btn-sm"  value="Eliminar" type="submit" name="name" >
                                                                </form>
                                                                

                                                                <button href="/propietario" type="button" class="btn btn-primary btn-sm" type="submit" name="name" data-dismiss="modal">Cancelar</button>

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