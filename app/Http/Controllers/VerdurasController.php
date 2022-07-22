<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerdurasController extends Controller
{
    public function index(){
        return view('verduras')
        ->with('verduras', array('Lechuga', 'Toamte', 'Papa', 'Palta'));
    }

    public function agregar(){
        return view('agregarverduras');
    }

    public function eliminar(){
        return "eliminar";
    }

    public function guardar(Request $request){
        //dd($request);
        return "Nombre: ". $request->input("nombre"). ", Precio: $". $request->input("precio")
        ;
    }
}

