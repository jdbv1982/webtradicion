@extends('layouts/layout')

@section('content')
    <div class="div-pregunta">
            ¿Tienes la edad legal mínima para consumir bebidas alcohólicas en el país en el que resides?
    </div>
    <div class="respuesta">
        <a href="{{ route('inicio') }}">SI</a>
    </div>
    <div class="respuesta">
        <a href="{{ route('salir')  }}">NO</a>
    </div>
@stop