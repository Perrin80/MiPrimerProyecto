<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        return view('productos')
        ->with('productos', array('Lechuga', 'Tomate', 'Papa', 'Palta'));
    }

    public function agregar(){
        return view('agregarProductos');
    }

    public function eliminar(){
        return "eliminar";
    }

    public function guardar(Request $request){
        //dd($request);
        return "SKU: ". $request->input("SKU"). ", Nombre: ". $request->input("nombre")
        ;
    }
}



