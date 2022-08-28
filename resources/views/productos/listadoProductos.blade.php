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
      <th scope="col">Imagen Producto</th>
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
      @if(Storage::disk('images')->has($product->imagenproducto))
      <td><img src="{{ url('imagenproductos/'.$product->imagenproducto) }}" width=200 alt="..."></td>
      @else
        <td><img src="{{$product['imagenproducto']}}" width=200 alt="..."></td>
      @endif
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