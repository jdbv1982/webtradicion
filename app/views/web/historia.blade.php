@extends('web/menu')

@section('sub-content')
	<div class="Historia">
		<div class="Historia-arbol"></div>
		<div class="Historia-texto">
			<div class="Historia-titulo" id="titulo"><div class="loader" id="imgloader"></div>LA TRADICIÓN</div>
			<div class="Historia-contenido" id="Historia-contenido">
			</div>
			<div class="Historia-menu">
				<ul>
					<li><a class="menuhistoria" valor="2" href="#">I</a></li>
					<li><a class="menuhistoria" valor="3" href="#">II</a></li>
					<li><a class="menuhistoria" valor="4" href="#">III</a></li>
					<li><a class="menuhistoria" valor="5" href="#">IV</a></li>
					<li><a class="menuhistoria" valor="6" href="#">V</a></li>
				</ul>
			</div>
		</div>
	</div>
@stop
