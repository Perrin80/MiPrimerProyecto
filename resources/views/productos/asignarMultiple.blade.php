@extends('layouts.master')
@section('title','Agregar Producto')

@section('header')
    <h2 class="text-center mt-3">Asignar sucursales a producto</h2>
@stop

@section('content')

<form method="POST" action="/asignarMultiple">
    <div>
     <label for="categoria" class="form-label fw-bold">Producto</label>
        <label value="{{$producto[0]->nombre}}">{{$producto[0]->nombre}}</label>
        <input type="hidden" class="form-control" name="producto_id" id="producto_id" value="{{ $producto[0]->id }}">
    </div>

    <div>
     <label for="sucursales" class="form-label fw-bold">Sucursales</label>
        @foreach($sucursales as $sucursal)

        <div class="form-check">

            <input class="form-check-input" type="checkbox" id="cbox2" value="{{$sucursal->id}}" name="sucursal_id{{$sucursal->id}}">
            <label class="form-check-label" for="flexCheckDefault">{{$sucursal->nombre}}</label>

        </div>
        @endforeach

    </div>
    <br> 

    <button type="summit" class="btn btn-primary">Asignar</button>
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