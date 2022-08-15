@extends('layouts.master')
@section('title','Agregar Producto')

@section('header')
    <h2 class="text-center mt-3">Asignar producto a sucursal</h2>
@stop

@section('content')

<form method="POST" action="/guardarAsignacion">
    <div>
     <label for="categoria" class="form-label fw-bold">Productos</label>
        <select class="form-select" aria-label="Default select example" name="producto_id" value="" >
        @foreach($productos as $product)
            <option value="{{$product->id}}">{{$product->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label fw-bold">Precio</label>
        <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio">
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label fw-bold">Cantidad</label>
        <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad">
    </div>
    <div class="input-group">
    <div class="input-group-text">
     <label for="activo" class="form-label fw-bold">Activo</label>
     <br>
        <input class="form-check-input mt-0" type="radio" id="activo" name="activo" aria-label="Radio button for following text input">
    </div>
    </div>
    <div>
     <label for="categoria" class="form-label fw-bold">Sucursales</label>
        <select class="form-select" aria-label="Default select example" name="sucursal_id" value="" >
        @foreach($sucursales as $sucursal)
            <option value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>
            @endforeach
        </select>
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