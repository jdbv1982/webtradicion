@extends('layouts/layout')

@section('content')
    <ul class="menu">
        <li><a href="{{ route('inicio') }}">Inicio</a></li>
        <li><a href="{{ route('historia')  }}">La Tradicion</a></li>
        <li><a href="{{ route('proceso')  }}">Nuestro Proceso</a></li>
        <li><a href="{{ route('productos')  }}">Nuestros Productos</a></li>
        <li><a href="{{ route('contacto')  }}">Contacto</a></li>
    </ul>
@stop