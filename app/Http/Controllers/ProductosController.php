<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Sucursal;
use App\Models\Categoria;
use App\Models\Stock;
use Symfony\Component\Console\Output\ConsoleOutput;


class ProductosController extends Controller
{    
    public function index(){
        $productos = Producto::get();
        return view('productos.listadoProductos', [
            'productos' => $productos
        ]);

    }

    public function create(){
        $categorias = Categoria::get();
        return view('productos.agregarProducto', [
            'categorias' => $categorias,
        ]);
    }

    public function encontrarProducto(Request $request){
        $req = $request->input('queryProducto');
        $productos = Producto::where('nombre', 'LIKE', '%'.$req.'%')->get();
        return view('productos.listadoProductos', [
            'productos' => $productos
        ]);

    }


    public function asignar(){

        $productos = Producto::get();
        $sucursales = Sucursal::get();

        return view('productos.asignar', [
            'productos' => $productos,
            'sucursales' => $sucursales,
        ]);
    }

    public function guardarAsignacion(Request $request){

        $this -> validate($request, [
            'precio' => 'required', 
            'cantidad' => 'required',
            'sucursal_id' => 'required',
            'producto_id' => 'required', 
        ]);

        $stock = new Stock();

        $stock->precio = $request->precio;
        $stock->cantidad = $request->cantidad;
        $stock->activo = (boolean) $request->activo;
        $stock->sucursal_id = $request->sucursal_id;
        $stock->producto_id = $request->producto_id;

        $stock->save();

        $producto = Producto::where('id', $request->producto_id)->first();
        $producto->sucursal_id = $request->sucursal_id;
        $producto->save();

        $productos = Producto::get();

        return view('productos.listadoProductos', [
        'productos' => $productos
        ]);

    }
    public function store(Request $request){
        $this -> validate($request, [
            'SKU' => 'required', 
            'nombre' => 'required', 
            'descripcion' => 'required',
            'categoria_id' => 'required'
        ]);
        
        $categorias = Categoria::get();
        $producto = new Producto();

        $producto->SKU = $request->SKU;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->categoria_id = $request->categoria_id;
        // $producto->sucursal_id = null;
        $producto->save();
        

        $productos = Producto::get();

        return view('productos.listadoProductos', [
        'productos' => $productos
        ]);
    }


    public function deleteProducto($id){
        $stocks = Stock::where('producto_id', $id)->delete();

        $producto = Producto::where('id', $id)->delete();

        $productos = Producto::get();

        return view('productos.listadoProductos', [
            'productos' => $productos
        ]);
    }

    public function vistaActualizar($id){

        $producto = Producto::where('id', $id)->get();

        if(count($producto)>0){
            return view('productos.actualizarProducto', [
                'producto' => $producto
            ]);    
        }
    }

    public function updateProducto(Request $request){
        $this->validate($request,[
            'SKU' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        Producto::where('id', $request->id)->update([
            'SKU' => $request->SKU,
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]);

        $productos = Producto::get();

        return view('productos.listadoProductos', [
            'productos' => $productos
        ]);

    }

    public function asignarSucursales($id){
        $producto = Producto::where('id', $id)->get();

        $sucursales = Sucursal::get();

        $sucursalesactuales = Sucursal::whereHas('productos', function ($q) use ($id) {
            $q->where('sucursal_id', $id);
        })->get();


        return view('productos.asignarMultiple', [
            'producto' => $producto,
            'sucursalesactuales' => $sucursalesactuales,
            'sucursales' => $sucursales
        ]);    

    }


    public function asignarMultiple(Request $request){

        $producto = Producto::where('id', $request->producto_id)->first();

        $request1 = $request->input('sucursal_id1');
        $request2 = $request->input('sucursal_id2');
        $request3 = $request->input('sucursal_id3');

        $suc = array();

        if($request1 != null){
            array_push($suc, $request1);
        }
        if($request2 != null){
            array_push($suc, $request2);
        }
        if($request3 != null){
            array_push($suc, $request3);
        }

        $producto->sucursales()->attach($suc);

        $productos = Producto::get();

        return view('productos.listadoProductos', [
            'productos' => $productos
        ]);



    }

}