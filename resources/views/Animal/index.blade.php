@extends('welcome')

@section('content')

  <div class="container">
    <p>
    Lista de animales insertados mediante el archivo en formato xls suministrado por ASOCEBÚ
    <br>
    <br>
    </p>
    <div class="row">
        <div class="col-md-8 col-md-offset-0">

            <div class="panel panel-default">
              
                <table class="table">
                  <thead>
                          <tr>
                            <th>Código</th>
                            <th>Registro</th>
                            <th>Raza</th>
                            <th>Sexo</th>
                            <th>Fecha de Nacimiento</th>
                          </tr>
                          <br>
                  </thead>

                  <tbody>

                    @foreach ($animales as $animales)
                                  <tr>
                                      <th scope="row">{{ $animales->codigo }}</th>
                                      <td>{{ $animales->registro }}</td>
                                      <td>{{ $animales->raza }}</td>
                                      <td>{{ $animales->sexo}}</td>
                                      <td>{{ $animales->fecha_nacimiento}}</td>
                                      <td>
                                            <a href="/animales/{{$animales->registro}}" class="btn btn-success" role="button">+</a>
                                      </td>
                                    </tr>
                              
                    @endforeach
            </tbody>
            </table>
          </div>
        </div>
      </div>

   </div>



   
   @endsection 