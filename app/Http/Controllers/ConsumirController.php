<?php

namespace App\Http\Controllers;

use App\Models\estudiante;
use Illuminate\Http\Request;
//use App\Http\Controllers\ConsumirController;
use Illuminate\Support\Facades\Http;


class ConsumirController extends Controller
{
    //
    public function index(){
        $response=Http::get('http://localhost/quintoSOA/models/selecta.php');
        $data= $response->json();
         //return view('inicio', compact('data'));
         return view('inicioNew', compact('data'));
    }
    public function create(){
        return view('newEstudent');

    }
    public function store(Request $request){
        $response =Http::asForm()->post('http://localhost/quintoSOA/models/guardar.php',
        [
            'est_cedula'=>$request->cedula,
            'est_nombre'=>$request->nombre,
            'est_apellido'=>$request->apellido,
            'est_telefono'=>$request->telefono,
            'est_direccion'=>$request->direccion,
            

        ]);
        return redirect()->route(('pag.index'));
        
    }


   
    
    public function createUp($cedula){
        $est= estudiante::find($cedula);
        return view('editar', compact('est'));

    }

    public function update(Request $request){
        $response = Http::asForm()->post('http://localhost/quintoSOA/models/editar.php',
        [
            'est_cedula'=>$request->cedula,
            'est_nombre'=>$request->nombre,
            'est_apellido'=>$request->apellido,
            'est_telefono'=>$request->telefono,
            'est_direccion'=>$request->direccion,


        ]);
        return redirect()->route(('pag.index'));

    }
    public function destroy( $est_cedula){
        $response = Http::asForm()->post('http://localhost/quintoSOA/models/eliminar.php',
        [
            'est_cedula'=>$est_cedula
            
        ]);
        return redirect()->route(('pag.index'));
    }
}
