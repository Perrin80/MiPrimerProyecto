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

Route::get('/asignar', 'App\Http\Controllers\ProductosController@asignar')->name('asignar');
Route::post('/guardarAsignacion', 'App\Http\Controllers\ProductosController@guardarAsignacion')->name('guardarAsignacion');
Route::get('/encontrarProducto', 'App\Http\Controllers\ProductosController@encontrarProducto')->name('encontrarProducto');

Route::resource('productos', 'App\Http\Controllers\ProductosController');
Route::resource('sucursales', 'App\Http\Controllers\SucursalesController');