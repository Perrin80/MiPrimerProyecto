@extends('layout.master')
@section('title','Contacto')

@section('header')
    <h2>Formulario de productos</h2>
@stop

@section('content')

@foreach($productos as $producto)
    <p> {{ $producto }}
@endforeach

<hr>

<a href="{{ route('AgregarProductos') }}">Agregar</a>
<a href="{{ route('EliminarProductos') }}">Eliminar</a>

@stop

@section('footer')
    @parent
    <h4>Creado por Grupo 2 22-07-2022</h4>
@stop