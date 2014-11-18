@extends('web/menu')

@section('sub-content')
	<div class="Historia">
		<div class="Historia-arbol">
			<div valor="6" class="menu-arbol menu-arbol-historia"></div>
			<div valor="5" class="menu-arbol menu-arbol-historia"></div>
			<div valor="4" class="menu-arbol menu-arbol-historia"></div>
			<div valor="3" class="menu-arbol menu-arbol-historia"></div>
			<div valor="2" class="menu-arbol menu-arbol-historia"></div>
		</div>
		<div class="Historia-texto">
			<div class="Historia-titulo" id="titulo"><div class="loader" id="imgloader"></div>LA TRADICIÓN</div>
			<div class="Historia-contenido" id="Historia-contenido">
			</div>
			<div class="content-slides">
			<ul class="rslides" id="slider3">
				<li>{{ HTML::image('images/general/1.png', '',['width' => 25 , 'height' => 70]) }}</li>
				<li>{{ HTML::image('images/general/2.png') }}</li>
				<li>{{ HTML::image('images/general/3.png') }}</li>
				<li>{{ HTML::image('images/general/4.png') }}</li>
				<li>{{ HTML::image('images/general/5.png') }}</li>
			</ul>
		</div>
			<div class="Historia-menu">
				<ul>
					<li class="menuhistoria" valor="2">I</li>
					<li class="menuhistoria" valor="3">II</li>
					<li class="menuhistoria" valor="4">III</li>
					<li class="menuhistoria" valor="5">IV</li>
					<li class="menuhistoria" valor="6">V</li>
				</ul>
			</div>
		</div>

		
	</div>
@stop
