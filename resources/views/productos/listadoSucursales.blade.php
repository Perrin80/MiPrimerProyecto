@extends('layouts.master')
@section('title','Contacto')

@section('header')
    <h2 class="text-center">Formulario de productos</h2>
@stop

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Dirección</th>

    </tr>
  </thead>
  <tbody>
  @foreach($sucursales as $sucursal)
    <tr>
      <td>{{$sucursal["nombre"]}}</td>
      <td>{{$sucursal["direccion"]}}</td>

    </tr>
    @endforeach

  </tbody>
</table>

@stop

@section('footer')
    @parent
@stop