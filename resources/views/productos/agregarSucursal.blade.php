@extends('layouts.master')
@section('title','Agregar Producto')

@section('header')
    <h2 class="text-center mt-3">Agrega tu sucursal</h2>
@stop

@section('content')

<form method="POST" action="{{ route('sucursales.store') }}">
    <div class="mb-3">
        <label for="nombre" class="form-label fw-bold">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la sucursal">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label fw-bold">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección de la sucursal">
    </div>
    <br> 
    <button type="summit" class="btn btn-primary">Guardar</button>
</form>

@if($errors->any())
<div class="alert alert-danger">
<ul>
	@foreach($errors->all() as $error)
	<li>{{$error}}</li>
	@endforeach
</ul>
</div>
@endif

<hr>

<a href="{{ route('productos.index') }}" class="btn btn-info text-white">Regresar</a>

@stop