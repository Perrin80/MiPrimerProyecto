@extends('layouts.master')
@section('title','Contacto')

@section('header')
    <h2 class="text-center">Formulario de productos</h2>
@stop

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">SKU</th>
      <th scope="col">nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Categoría</th>
      <th scope="col">Sucursal</th>
    </tr>
  </thead>
  <tbody>
  @foreach($productos as $product)
    <tr>
    <td><a href="/actualizarProducto/{{$product->id}}">{{$product->SKU}}</a></td>
      <td>{{$product["nombre"]}}</td>
      <td>{{$product["descripcion"]}}</td>
      <td>{{$product->categorias->nombre}}</td>
      <td>{{$product->sucursales->nombre ?? 'Sin sucursal'}}</td>
      <td>
        <form method="POST" action="/deleteProducto/{{$product->id}}">
          <button type="summit" class="btn btn-primary">Eliminar</button>
      
        </form>
      
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@stop

@section('footer')
    @parent
@stop