<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Sucursal;
use App\Models\Categoria;
use App\Models\Stock;


class SucursalesController extends Controller
{    
    public function index(){
        $sucursales = Sucursal::get();
        return view('productos.listadoSucursales', [
            'sucursales' => $sucursales
        ]);

    }

    public function create(){
        $sucursales = Sucursal::get();

        return view('productos.agregarSucursal', [
            'sucursales' => $sucursales,
        ]);
    }

    public function store(Request $request){
        $this -> validate($request, [
            'nombre' => 'required', 
            'direccion' => 'required',
        ]);

        $sucursal = new Sucursal();
        $sucursal->nombre = $request->nombre;
        $sucursal->direccion = $request->direccion;
        $sucursal->save();

        $sucursales = Sucursal::get();

        return view('productos.listadoSucursales', [
        'sucursales' => $sucursales
        ]);
    }
}