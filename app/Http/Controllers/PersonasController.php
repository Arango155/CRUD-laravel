<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index (){
        $datos=Persona::all();
        return view('inicio', compact('datos'));
    }

    public function create (){

        return view('create');
    }

    public function edit (){}

}

