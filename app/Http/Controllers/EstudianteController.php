<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiante;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        /*
        $estudiante= estudiante::all();
        return $estudiante;*/
        
        
        $data= estudiante::all();
        return view('inicioNew', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guardarApi');
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
        //GUARDAR ESTUDIANTE

        $estudiante= new estudiante();
        $estudiante->est_cedula=$request->est_cedula;
        $estudiante->est_nombre=$request->est_nombre;
        $estudiante->est_apellido=$request->est_apellido;
        $estudiante->est_telefono=$request->est_telefono;
        $estudiante->est_direccion=$request->est_direccion;

        $estudiante->save();
        //return $estudiante;
        return redirect()->route('pag.index');
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
        $estudiante= estudiante::findOrFail($id);
        $estudiante->est_cedula=$request->est_cedula;
        $estudiante->est_nombre=$request->est_nombre;
        $estudiante->est_apellido=$request->est_apellido;
        $estudiante->est_telefono=$request->est_telefono;
        $estudiante->est_direccion=$request->est_direccion;

        $estudiante->save();
        //return $estudiante;
        return redirect()->route('pag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($est_cedula)
    {
        //

        $estudiante= estudiante::destroy($est_cedula);
        if($estudiante==1){
            
            return redirect()->route('pag.index');
        }else{
            return "No se pudo eliminar";

        }

        
        
    }
    public function createup($cedula){
        $est= estudiante::find($cedula);
        return view('editarApi', compact('est'));

    }
}
