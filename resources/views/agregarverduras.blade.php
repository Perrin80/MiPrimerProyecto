@extends('layout.master')
@section('title','Contacto')

@section('header')
    <h2>Formulario de contacto </h2>
@stop

@section('content')

<form method="POST" action="{{ url('/verdurasGuardar') }}">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" class="form-control" id="precio" name="precio">
    </div>
    <button type="summit" class="btn btn-primary">Guardar</button>
</form>

<hr>

<a href="{{ route('AgregarVerduras') }}">Agregar</a>
<a href="{{ route('EliminarVerduras') }}">Eliminar</a>

@stop

@section('footer')
    @parent
    <h4>Creado por Grupo 2</h4>
@stop