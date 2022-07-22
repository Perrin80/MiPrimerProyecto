@extends('layout.master')


@section('header')
    <h2>Formulario de contacto </h2>
@stop

@section('content')

Bienvenido {{ $nombre }} tiene {{ $edad }} años

{{-- Esto es un comentario --}}

<hr>
<h3>Uso de IF</h3>
@if($edad >= 18)
    <p>Es mayor de edad</p>
@else()
    <p>Es menor de edad</p>
@endif

<hr>
<h3>Uso de For</h3>

@for($i = 1; $i <= 10; $i++)
    {{ '8x'.$i.'='. ($i*8) }}<br>
@endfor

<hr>
<h3>Uso de While</h3>

<?php $a=1; ?>
@while($a<=7)
    {{ $a }} <br>
    <?php $a++; ?>
@endwhile

<hr>
<h3>Uso de Foreach</h3>

@foreach($frutas as $fruta)
    <p> {{ $fruta }}
@endforeach

@stop

@section('footer')
    @parent
    <h4>Creado por Grupo 2</h4>
@stop
