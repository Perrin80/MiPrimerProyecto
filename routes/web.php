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

Route::get('/productos', 'App\Http\Controllers\ProductosController@index')->name('home');
Route::get('/productosAgregar', 'App\Http\Controllers\ProductosController@agregar')->name('AgregarProductos');
/*
Route::get('/productosEliminar', 'App\Http\Controllers\ProductosController@eliminar')->name('EliminarProductos');
*/
Route::post('/productos', 'App\Http\Controllers\ProductosController@guardar');
