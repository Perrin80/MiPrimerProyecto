@extends('layout.master')
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
      <th scope="col">precio</th>
      <th scope="col">cantidad</th>
      <th scope="col">categoria</th>
      <th scope="col">sucursal</th>

    </tr>
  </thead>
  <tbody>
  @foreach($allProducts as $product)
    <tr>
      <td>{{json_encode($product["SKU"])}}</td>
      <td>{{json_encode($product["nombre"])}}</td>
      <td>{{json_encode($product["precio"])}}</td>
      <td>{{json_encode($product["cantidad"])}}</td>
      <td>{{json_encode($product["categoria"])}}</td>
      <td>{{json_encode($product["sucursal"])}}</td>
    </tr>
    @endforeach

  </tbody>
</table>

@stop

@section('footer')
    @parent
@stop