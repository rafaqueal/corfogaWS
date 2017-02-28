<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fincaModel;
use App\propietarioModel;
use App\usuarioModel;
use DB;

class fincaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $finca = DB::table('fincas')
            ->select('fincas.id','fincas.nombre as nombreFinca','fincas.region', 'fincas.propietario_id', 'usuarios.nombre')
            ->join('propietarios', 'fincas.propietario_id', '=', 'propietarios.id')
            ->join('usuarios', 'propietarios.usuario_cedula', '=', 'usuarios.id')
            ->get('');

        return view('Finca.index', ['finca'=>$finca]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        
        $propietario = usuarioModel::where("rol","=",'criador')->get();
        return view('Finca.create', ['propietario'=>$propietario]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $finca = new fincaModel;
        $finca->id = $request->id;
        $finca->nombre= $request->nombre;
        $finca->region= $request->region;
        $usuario = usuarioModel::where("cedula","=",$request->criador)->get()->first();
        $propietario = propietarioModel::where("usuario_cedula", "=", $usuario->id)->get()->first();

        $finca->propietario_id = $propietario->id;
             
        
        
        
        $finca->save();
        return redirect('../finca/create')->with('message','La finca se ha agregado con éxito');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $finca = fincaModel::find($id);
        $criadorFinca = usuarioModel::where("id", '=' ,$finca->propietario_id)->get();
        
        return view('Finca.details', ['finca'=>$finca,'criadorFinca'=>$criadorFinca]);

     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $finca = fincaModel::find($id);
        $propietario = propietarioModel::all();
       
        return view('Finca.edit', ['finca'=>$finca,'propietario'=>$propietario]);
        
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
          $finca = fincaModel::find($id);
          $finca->propietario_id = $request->propietario_id;
          $finca->nombre= $request->nombre;
          $finca->region= $request->region;
          $finca->save();

      return redirect('../finca/')->with('message','data has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $finca = fincaModel::find($id);
        
        $finca->delete();
        return redirect('../finca/')->with('message','data has been deleted!');
    }
}
