@extends('layouts/layout')

@section('content')
<nav>
    <ul class="menu">
        <li><a href="{{ route('inicio') }}">{{ trans('menu.inicio')}}</a></li>
        <li><a valor="1" class="decoration-left menuhistoria" href="{{ route('historia')  }}">{{ trans('menu.tradicion')}}</a></li>
        <li><a class="decoration-left" href="{{ route('proceso')  }}">{{ trans('menu.proceso')}}</a></li>
        <li><a class="decoration-left" href="{{ route('productos')  }}">{{ trans('menu.productos')}}</a></li>
        <li><a class="decoration-left" href="{{ route('contacto')  }}">{{ trans('menu.contacto')}}</a></li>
    </ul>
</nav>
	<div>
     @yield('sub-content')
	</div>
@stop
