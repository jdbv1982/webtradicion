@extends('layouts/layout')

@section('content')
    <div class="div-mensaje">
    	<div class="div-pregunta">¿Tienes la edad legal mínima para consumir bebidas alcohólicas en el país en el que resides?</div>
    	<div class="div-respuesta "><a href="{{route('inicio')}}">SI</a></div>
    	<div class="div-respuesta borde-lateral-izquierdo"><a href="{{route('salir')}}">NO</a></div>
    	<div class="div-imagen"><img src="" alt=""></div>
    </div>

@stop


