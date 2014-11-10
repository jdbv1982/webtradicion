@extends('layouts/layout')

@section('content')
<nav>	
    <ul class="menu">
        <li><a href="{{ route('inicio') }}">Inicio</a></li>
        <li><a class="decoration-left" href="{{ route('historia')  }}">La Tradicion</a></li>
        <li><a class="decoration-left" href="{{ route('proceso')  }}">Nuestro Proceso</a></li>
        <li><a class="decoration-left" href="{{ route('productos')  }}">Nuestros Productos</a></li>
        <li><a class="decoration-left" href="{{ route('contacto')  }}">Contacto</a></li>
    </ul>
</nav>
	<div>
     @yield('sub-content')		
	</div>
@stop