@extends('layout.master')
@section('title','Contacto')

@section('header')
    <h2>Formulario de productos</h2>
@stop

@section('content')

@foreach($productos as $producto)
<p>
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> {{ $producto }} </li>
  </ul>
</div>
@endforeach

<hr>

<a class="btn btn-primary" href="{{ route('AgregarProductos') }}" role="button">Agregar</a>
<a class="btn btn-danger" href="{{ route('EliminarProductos') }}" role="button">Eliminar</a>

@stop

@section('footer')
    @parent
    <h4>Creado por Grupo 2</h4>
@stop