@extends('layouts.master')
@section('title','Actualizar Producto')

@section('header')
    <h2 class="text-center mt-3">Actualizar producto</h2>
@stop

@section('content')

<form method="POST" action="/updateProducto">
    <div class="mb-3">
        <input type="hidden" class="form-control" name="id" id="id" value="{{ $producto[0]->id }}">
        <label for="SKU" class="form-label fw-bold">SKU</label>
        <input type="text" class="form-control" id="SKU" name="SKU" value="{{$producto[0]->SKU}}" placeholder="Codigo del producto">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label fw-bold">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$producto[0]->nombre}}" placeholder="Nombre del producto">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label fw-bold">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$producto[0]->descripcion}}" placeholder="Descripción del producto">
    </div>
    <div>
    <button type="summit" class="btn btn-primary">Actualizar</button>
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