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
			<div style="display:none" class="quintag" id="quintag"><img src="" alt=""  ></div>
			<div class="Historia-contenido" id="Historia-contenido">
			</div>
			<div class="Historia-img" style="display:none">
				{{ HTML::image('/images/general/historia/1g.png') }}
			</div>
			<!--div class="content-slides" id="content-slides" style="display:none">
				<ul class="rslides" id="slider3">
					<li><img id="img1" src="" alt=""></li>
					<li><img id="img2" src="" alt=""></li>
					<li><img id="img3" src="" alt=""></li>
					<li><img id="img4" src="" alt=""></li>
				</ul>
			</div-->
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
