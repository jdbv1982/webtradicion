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
                <li><a valor="1" class="menu item-menu" href="#">Donají Joven</a></li>
                <li><a valor="2" class="menu item-menu" href="#">Donají Añejo</a></li>
                <li><a valor="3" class="menu item-menu" href="#">Los cuerudos Blanco</a></li>
                <li><a valor="4" class="menu item-menu" href="#">Los Cuerudos con Gusano</a></li>
                <li><a valor="5" class="menu item-menu" href="#">Los Cuerudos Reposado</a></li>
                <li><a valor="6" class="menu item-menu" href="#">Los Cuerudos Añejo</a></li>
                <li><a valor="7" class="menu item-menu" href="#">Tehuana con Gusano</a></li>
                <li><a valor="8" class="menu item-menu" href="#">Licor de Cafe Huatulco</a></li>
                <li><a valor="9" class="menu item-menu" href="#">Margarita Huatulco</a></li>
            </ul>
    </div>
	<div>
     @yield('sub-content')
	</div>
@stop
