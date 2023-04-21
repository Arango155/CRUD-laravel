<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index (){
        $dates=Persona::all();
        return view('inicio', compact('dates'));
    }

    public function create (){

        return view('create');
    }

    public function update (){

        return view('update');
    }



    public function delete ($id){

        $personas = Persona::find($id);
        return view("delete" , compact('personas'));

    }

    public function edit ($id)
    {

        $personas = Persona::find($id);
        return view("edit" , compact('personas'));

    }

    public function update1 (Request $request, $id){
        $personas = Persona::find($id);
        $personas->apellido_paterno = $request->post('apellido_paterno');
        $personas->apellido_materno = $request->post('apellido_materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("inicio")->with("success", "Actualizado con exito!");
    }


    public function add (Request $request){

        $personas = new Persona();
        $personas->apellido_paterno = $request->post('apellido_paterno');
        $personas->apellido_materno = $request->post('apellido_materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("inicio")->with("success", "Agregado con exito!");

    }

    public function destroy ($id){

        $personas = Persona::find($id);
        $personas->delete();
        return redirect()->route("inicio")->with("success", "Eliminado con exito!");

    }

}

