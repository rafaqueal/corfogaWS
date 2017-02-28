@extends('welcome')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-0">
            <div class="panel panel-default">
              
                 <div class="panel-body">

					  <p><b>Código:</b> {{ $animales->codigo }}</p>

					  <p><b>Registo:</b> {{ $animales->registro }}</p>

					  <p><b>Raza:</b> {{ $animales->raza }}</p>

					  <p><b>Fecha Nacimiento:</b> {{ $animales->fecha_nacimiento }}</p>

					  <p><b>Sexo:</b> {{ $animales->sexo }}</b></p>

		    	</div>
		    </div>
		</div>
	</div>
</div>
@endsection 