@extends('welcome')

@section('content1')
  
   <p>
   En esta vista se debe seleccionar el archivo en formato excel que es enviado por ASOCEBÚ, los datos Fecha Emitido, Nombre y Código de Propietario(Criador) se encuentran disponibles en el archivo subministrado por la Asociación.
   </p>


   <br>
   <br>
		<form  id="f_cargar_datos_usuarios" name="f_cargar_datos_usuarios" method="post"  action="{{action('animalController@store')}}" class="formarchivo form-horizontal" enctype="multipart/form-data" >                
                                      
                                      
        <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 

        <div class="box-body">
             
             <div class="form-group">
             
	             <label for="fecha_emitido" class="col-md-2 control-label">Fecha Emitido</label>

	                <div class="col-md-5">
	                	<input class="form-control" type="date" name="fecha_emitido" value=""  required>
	               </div>
            </div>

            <br>
            <h6>Datos del Propietario requeridos: </h6>
            <br>

            <div class="form-group">
                <label for="propietario" class="col-lg-2 control-label">Nombre</label>
                    <div class="col-lg-5">
                         <input type="propietario" class="form-control" id="propietario" name="propietario"
                                         placeholder="Propietario" required>
                    </div>
            </div>


            <div class="form-group">
               
              	<label for="Codigo" class="col-lg-2 control-label">Código</label>
	            
	            <div class="col-lg-5">
	             	<input type="codigo" class="form-control" id="codigo" placeholder="Código" name="codigo" required>
	            </div>

           </div>


        <br>

	      <div class="form-group col-xs-12"  >
	             <label>Agregar Archivo de Excel </label>
	              <input name="archivo" id="archivo" type="file"   class="archivo form-control"  required/><br /><br />
	      </div>

          <br>
      	  <div class="box-footer" >
              <button type="submit" class="btn btn-primary">Cargar Datos</button>
      	  </div>
     </div>

     </form>

     <br>
     <br>
     @if (session('message'))
          <div class="content2" >
              <p>{{ session('message') }}</p>
              <br><br>
          </div>
          
          <div class="box-footer" >
                <a href="/animales" class="btn btn btn-info" role="button">Ver Animales Cargados</a>
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

@endsection