@extends('layout.master')
@section('title','Agregar Producto')

@section('header')
    <h2>Agrega tu producto</h2>
@stop

@section('content')

<form method="POST" action="{{ url('/productosGuardar') }}">
    <div class="mb-3">
        <label for="nombre" class="form-label">SKU</label>
        <input type="text" class="form-control" id="SKU" name="SKU" placeholder="Codigo del producto">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" id="nombre" name="precio" placeholder="$ - Precio del producto">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Cantidad</label>
        <input type="number" class="form-control" id="nombre" name="cantidad" placeholder="Cantidad del producto">
    </div>
    <div>
        <select class="form-select" aria-label="Default select example">
            <option selected>Selecciona la categoria del producto.</option>
            <option value="1">Categoria 1</option>
            <option value="2">Categoria 2</option>
            <option value="3">Categoria 3</option>
        </select>
    </div><br> 
    <div>
        <select class="form-select" aria-label="Default select example">
            <option selected>Selecciona la sucursal del producto.</option>
            <option value="norte">Norte</option>
            <option value="centro">Centro</option>
            <option value="sur">Sur</option>
        </select>
    </div><br>   
    <button type="summit" class="btn btn-primary">Guardar</button>
</form>

<hr>

<a class="btn btn-primary" href="{{ route('AgregarProductos') }}" role="button">Agregar</a>
<a class="btn btn-danger" href="{{ route('EliminarProductos') }}" role="button">Eliminar</a>






{{--<a href="{{ route('AgregarProductos') }}">Agregar</a>
<a href="{{ route('EliminarProductos') }}">Eliminar</a>--}}

@stop

@section('footer')
    @parent
    <h4>Creado por Grupo 2</h4>
@stop