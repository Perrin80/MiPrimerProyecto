<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto/{SKU?}/{edad?}', function ($SKU="10002K", $nombre="Tomato") {
    return view('contacto')
        ->with('SKU', $SKU)
        ->with('nombre', $nombre)
        ->with('productos', array('naranja', 'Pera', 'Frutilla', 'Manzana'))
        ;
}) ->where([
    'nombre'    => '[A-Za-z]+',
    //'edad'      => '[0-9]+'
])
;

Route::get('/productos', 'App\Http\Controllers\ProductosController@index');
Route::get('/productosAgregar', 'App\Http\Controllers\ProductosController@agregar')->name('AgregarProductos');
Route::get('/productosEliminar', 'App\Http\Controllers\ProductosController@eliminar')->name('EliminarProductos');

Route::post('/productosGuardar', 'App\Http\Controllers\ProductosController@guardar');
