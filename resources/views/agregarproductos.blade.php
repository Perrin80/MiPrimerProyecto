@extends('layout.master')
@section('title','Agregar Producto')

@section('header')
    <h2 class="text-center mt-3">Agrega tu producto</h2>
@stop

@section('content')

<form method="POST" action="{{ url('/productos') }}">
    <div class="mb-3">
        <label for="nombre" class="form-label fw-bold">SKU</label>
        <input type="text" class="form-control" id="SKU" name="SKU" placeholder="Codigo del producto">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label fw-bold">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label fw-bold">Precio</label>
        <input type="number" class="form-control" id="nombre" name="precio" placeholder="$ - Precio del producto">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label fw-bold">Cantidad</label>
        <input type="number" class="form-control" id="nombre" name="cantidad" placeholder="Cantidad del producto">
    </div>
    <div>
     <label for="categoria" class="form-label fw-bold">Categoria</label>
        <select class="form-select" aria-label="Default select example" name="categoria" value="" required>
            <option value="">Selecciona la categoria del producto.</option>
            <option value="1">Iluminacion</option>
            <option value="2">Tecnologia</option>
            <option value="3">Electronica</option>
        </select>
    </div><br> 
    <div>
        <label for="sucursal" class="form-label fw-bold">Sucursal</label>
        <select class="form-select" aria-label="Default select example" name="sucursal" value="" required>
            <option value="">Selecciona la sucursal del producto.</option>
            <option value="norte">Norte</option>
            <option value="centro">Centro</option>
            <option value="sur">Sur</option>
        </select>
    </div><br>   
    <button type="summit" class="btn btn-primary">Guardar</button>
</form>

<hr>

<a href="{{ route('home') }}" class="btn btn-info text-white">Regresar</a>

@stop