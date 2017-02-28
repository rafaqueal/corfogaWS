<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\genealogiaModel;
use App\progenitorModel;
use App\animalModel;
use App\usuariosModel;
use App\propietarioModel;
use App\registroASOCEBUModel;
use App\Http\Requests;
use Storage;
use Illuminate\Support\Facades\Validator;
use Excel;



class animalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //IMPORTANTE: ruta de prueba localhost:8000/animal(nombre ruta)
        $animal = animalModel::all();
        return json_encode($animal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
           //dd($request);
       $archivo = $request->file('archivo');
       $nombre_original=$archivo->getClientOriginalName();
       $extension=$archivo->getClientOriginalExtension();
       $r1=Storage::disk('archivos')->put($nombre_original,  \File::get($archivo) );
       $ruta  =  storage_path('archivos') ."/". $nombre_original;
       if($r1){
          
            Excel::selectSheetsByIndex(0)->load($ruta,function($hoja) {
                $hoja->skip(1);
                $hoja->each(function($fila) {
                // dd($fila);
                                       

                      $usersemails=animalModel::where("registro","=",$fila->registro)->first();
                    if(count( $usersemails)==0){
                        
                        $animal=new animalModel;
                       
                        $animal->registro= $fila->registro;
                        $animal->codigo= $fila->codigo;
                        $animal->nombre= $fila->nombre;
                        $animal->raza= $fila->raza;
                        $animal->fecha_nacimiento= $fila->fecnac ;
                        $animal->sexo= $fila->sx;
                        $animal->origen_reproductivo= null;
                        $animal->fecha_destete= null;
                        $animal->foto= null;
                      
                        $animal->save();
                         }


                         $registro=new registroASOCEBUModel;
                         $registro->fecha_emitido=null;
                         $registro->propietario_id=null;
                         $registro->animal_registro= $fila->registro;

                        $registro->save();       

                $datomadre=progenitorModel::where("registro","=",$fila->regmadre)->first();
                     if(count( $datomadre)==0)  {
                         $madre=new progenitorModel;
                         $madre->registro=$fila->regmadre;
                         $madre->codigo=$fila->codmadre;
                         $madre->sexo='H';

                         $madre->save();
                        
                } 

                 $datopadre=progenitorModel::where("registro","=",$fila->regpadre)->first();
                     if(count( $datopadre)==0)  {
                        $padre=new progenitorModel;
                         $padre->registro=$fila->regpadre;
                         $padre->codigo=$fila->codpadre;
                         $padre->sexo='M';

                         $padre->save();
                       
                } 

                        $genealogia=new genealogiaModel;
                        $genealogia->animal_registro=$fila->registro;
                        $genealogia->registro_padre=$fila->regpadre;
                        $genealogia->registro_madre=$fila->regmadre;
                        $genealogia->save();
                     });

            });
              
            $usuario=usuariosModel::where("id","=",$request->codigo)->first();
            if (count($usuario)==0) {
                $N_usuario= new usuariosModel;
                $N_usuario->id=$request->codigo;
                $N_usuario->nombre=$request->propietario;
                $N_usuario->contrasenia=null;
                $N_usuario->email=null;
                $N_usuario->telefono=null;
                $N_usuario->rol='criador';
                //dd($N_usuario);
                $N_usuario->save();
            }

             $pro=propietarioModel::where("id","=",$request->codigo)->first();
             if (count($pro)==0) {
                
                $propietario=new propietarioModel;
                $propietario->id=$request->codigo;
                $propietario->usuario_cedula=$request->codigo;
                $propietario-> save();

             }
       }
       
        $registroNom=registroASOCEBUModel::all();

    
        foreach ($registroNom as $reg ) {
            if ($reg->propietario_id==null) {
                $reg->fecha_emitido=$request->fecha_emitido;
                $reg->propietario_id=$request->codigo;
                $reg->animal_registro= $reg->animal_registro;
   
        $reg->save();

            }

        
         
}
       return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
