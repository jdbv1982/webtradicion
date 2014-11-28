@extends('layouts/layout')

@section('content')
<nav>
    <ul class="menu">
        <li><a href="{{ route('inicio') }}">{{ trans('menu.inicio')}}</a></li>
        <li><a valor="1" class="decoration-left menuhistoria" href="{{ route('historia')  }}">{{ trans('menu.tradicion')}}</a></li>
        <li><a class="decoration-left" href="{{ route('proceso')  }}">{{ trans('menu.proceso')}}</a></li>
        <li><a class="decoration-left" id="vermenuproductos" href="#">{{ trans('menu.productos')}}</a>
        </li>
        <li><a class="decoration-left" href="{{ route('contacto')  }}">{{ trans('menu.contacto')}}</a></li>
    </ul>
</nav>
    <div class="submenu" id="submenu">
        <ul>
                <li><a href="{{ route('producto', 1)}}">Donají Joven</a></li>
                <li><a href="{{ route('producto', 2)}}">Donají Añejo</a></li>
                <li><a href="{{ route('producto', 3)}}">Los cuerudos Blanco</a></li>
                <li><a href="{{ route('producto', 4)}}">Los Cuerudos con Gusano</a></li>
                <li><a href="{{ route('producto', 5)}}">Los Cuerudos Reposado</a></li>
                <li><a href="{{ route('producto', 6)}}">Los Cuerudos Añejo</a></li>
                <li><a href="{{ route('producto', 7)}}">Tehuana con Gusano</a></li>
                <li><a href="{{ route('producto', 8)}}">Licor de Cafe Huatulco</a></li>
                <li><a href="{{ route('producto', 9)}}">Margarita Huatulco</a></li>
            </ul>
    </div>
	<div>
     @yield('sub-content')
	</div>
@stop
