@extends('layout.master')
@section('title','Contacto')

@section('header')
    <h2>Formulario de contacto </h2>
@stop

@section('content')

@foreach($verduras as $verdura)
    <p> {{ $verdura }}
@endforeach

<hr>

<a href="{{ route('AgregarVerduras') }}">Agregar</a>
<a href="{{ route('EliminarVerduras') }}">Eliminar</a>

@stop

@section('footer')
    @parent
    <h4>Creado por Grupo 2</h4>
@stop