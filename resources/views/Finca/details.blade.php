@extends('welcome')

@section('content')

<div class="container">
	<h5>
		Información general la Finca:  <b>{{$finca->nombre}}</b>
	</h5>

    <div class="row">
        <div class="col-md-7 col-md-offset-0">
            <div class="panel panel-default">
                 <div class="panel-body">

					  <p><b>Identificador:</b> {{ $finca->id }}</p>

					  <p><b>Nombre de Finca:</b> {{ $finca->nombre }}</p>

					  <p><b>Región:</b> {{ $finca->region }}</p>

					  @foreach ($criadorFinca as $item)
					  
						  <p><b>Ced. Criador:</b> {{$item->cedula}} </p>

						  <p><b>Criador:</b> {{$item->nombre}}</p>
					 @endforeach

		    	</div>
		    </div>
		</div>
	</div>
</div>
@endsection 