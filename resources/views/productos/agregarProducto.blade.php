@extends('layouts.master')
@section('title','Agregar Producto')

@section('header')
    <h2 class="text-center mt-3">Agrega tu producto</h2>
@stop

@section('content')

<form method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="SKU" class="form-label fw-bold">SKU</label>
        <input type="text" class="form-control" id="SKU" name="SKU" placeholder="Codigo del producto">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label fw-bold">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label fw-bold">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción del producto">
    </div>
    <div>
     <label for="categoria" class="form-label fw-bold">Categoria</label>
        <select class="form-select" aria-label="Default select example" name="categoria_id" value="" >
        @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
            @endforeach
        </select>
    </div><br>
    <div class="mb-3">
        <label for="imagenproducto" class="form-label fw-bold">Imagen de Producto</label>
        <input type="file" class="form-control" id="imagenproducto" name="imagenproducto" accept=".png, .jpg, .jpeg">
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