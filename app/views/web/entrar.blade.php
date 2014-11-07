@extends('layouts/layout')

@section('content')
    <ul class="menu">
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li><a href="{{ route('historia')  }}">La Tradicion</a></li>
        <li><a href="">Nuestro Proceso</a></li>
        <li><a href="">Nuestros Productos</a></li>
        <li><a href="">Contacto</a></li>
    </ul>
@stop