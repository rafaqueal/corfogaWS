@extends('welcome')

@section('content')

<div class="container">
	<h5>
		Información general del usuario seleccionado
	</h5>

	<br>
    <div class="row">
        <div class="col-md-4 col-md-offset-0">
            <div class="panel panel-default">
        
                 <div class="panel-body">

					  <p><b>Id:</b> {{ $usuario->id }}</p>

					  <p><b>Nombre:</b> {{ $usuario->nombre }}</p>


					  <p><b>Email:</b> {{ $usuario->email }}</p>

					 
					  <p><b>Telefono:</b> {{ $usuario->telefono }}</p>


					  <p><b>Rol:</b> {{ $usuario->rol}}</p>

		    	</div>
		    </div>
		</div>
	</div>
</div>
@endsection 