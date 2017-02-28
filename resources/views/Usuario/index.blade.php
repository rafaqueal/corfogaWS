@extends('welcome')

@section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
             
                <table class="table">
                  <thead>
                          <tr>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Rol</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                          <br>
                  </thead>

                  <tbody>

                               @foreach ($usuario as $usuario2)
                                  <tr>
                                      <th scope="row">{{ $usuario2->cedula }}</th>
                                      <td>{{ $usuario2->nombre }}</td>
                                      <td>{{ $usuario2->email }}</td>
                                      <td>{{ $usuario2->telefono}}</td>
                                      <td>{{ $usuario2->rol}}</td>
                                      <td>
                                        <a href="/usuario/{{$usuario2->id}}" class="btn btn-success btn-sm" role="button"> Detalle </a>
                                      </td>

                                      <td>
                                        <a href="/usuario/{{ $usuario2->id }}/edit" class= "btn btn-warning btn-sm" role="button">Editar</a> 
                                      </td>

                                      <td>
                                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal{{ $usuario2->id}}">Eliminar</button>

  
                                      </td>
                                      
                                      
                                  </tr>


                            
                                <div class="modal fade" id="myModal{{ $usuario2->id}}" role="dialog">
           
                                      <div class="modal-dialog">

                                       
                                              <div class="modal-content">
                                               
                                                      <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                       
                                                               <h4 class="modal-title"><b>¿Desea Eliminar el Usuario del sistema?</b> </h4>
                                                       
                                                      </div>
                                                       
                                                       
                                                      <div class="modal-body">
                                                               El Usuario será eliminado del sistema
                                                      </div>
                                                       
                                                       
                                                      <div class="modal-footer">
                                                      
                                                               <form  action="/usuario/{{ $usuario2->cedula}}" method="post">
                                                                  <input type="hidden" name="_method" value="delete">
                                                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                  <input  class= "btn btn-danger btn-sm"  value="Eliminar" type="submit" name="name" >
                                                                </form>
                                                                

                                                                <button href="/usuario" type="button" class="btn btn-primary btn-sm" type="submit" name="name" data-dismiss="modal">Cancelar</button>

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