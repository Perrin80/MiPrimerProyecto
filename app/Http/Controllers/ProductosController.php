<?php

namespace App\Http\Controllers;

use Cache;

use Illuminate\Http\Request;


class ProductosController extends Controller

{
    protected $allProducts = array(
            array(
                "SKU" => "1",
                "nombre" => "Ampolleta",
                "precio" => "100",
                "cantidad" => "1",
                "categoria" => "Iluminacion",
                "sucursal" => "Norte",
            )
    );    
    
    public function index(){
        if(is_null(Cache::get('allProducts'))){
            Cache::put('allProducts', $this->allProducts);        
        } else{
            $this->allProducts = Cache::get('allProducts');
        }

        return view('productos', [ "allProducts" => $this->allProducts ]);
    }

    public function agregar(){
        $this->allProducts = Cache::get('allProducts');
        return view('agregarProductos', [ "allProducts" => $this->allProducts ]);
    }

    public function eliminar(){
        return "eliminar";
    }

    public function guardar(Request $request){
        $this->allProducts = Cache::get('allProducts');
        array_push($this->allProducts,[
            "SKU" => $request->input("SKU"),
            "nombre" => $request->input("nombre"),
            "precio" => $request->input("precio"),
            "cantidad" => $request->input("cantidad"),
            "categoria" => $request->input("categoria"),
            "sucursal" => $request->input("sucursal"),
    ]);
        Cache::put('allProducts', $this->allProducts);
        // print(json_encode($this->allProducts));
        return view('productos', [ "allProducts" => $this->allProducts ]);
    }
}



