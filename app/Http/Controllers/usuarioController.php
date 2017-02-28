<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarioModel;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $usuario = usuarioModel::all();
          return view('Usuario.index',['usuario'=> $usuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new usuarioModel;
        $usuario->cedula = $request->cedula;
         $usuario->id = $request->id;
        $usuario->nombre = $request->nombre;
        $usuario->contrasenia = $request->contrasenia;
        $usuario->email = $request->email;
        $usuario->rol = $request->rol;
        $usuario->telefono = $request->telefono;
        $usuario->save();

      return redirect('../usuario/create')->with('message','El registro del usuario fue éxitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = usuarioModel::find($id);
        return view('Usuario.detail')->with('usuario',$usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = usuarioModel::find($id);
       
        return view('Usuario.edit')->with('usuario',$usuario);
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
        $usuario = usuarioModel::find($id);
        $usuario->cedula = $request->cedula;
        $usuario->nombre = $request->nombre;
        $usuario->rol = $request->rol;
        $usuario->contrasenia = $request->contrasenia;
        $usuario->email = $request->email;
        $usuario->telefono = $request->telefono;
        $usuario->save();

        return redirect('../usuario')->with('message','data has been edit!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $usuario = usuarioModel::where("cedula","=", $id)->get()->first();
        $usuario->delete();
        return redirect('../usuario')->with('message','data has been deleted!');
    }
}
