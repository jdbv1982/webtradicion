@extends('web/menu')

@section('sub-content')
    <div class="contenido">
    	<div class="Producto">
    		<div class="imagen-producto"  id="img-producto">
	    		{{ HTML::image($producto->urlimage) }}
	    		<div class="Producto-img-pie" id="img-pie">{{ $producto->pieimagen }}</div>
	    	</div>
	    	<div class="contenido-producto">
	    	<div class="Producto-titulo" id="producto-titulo">{{ $producto->titulo}}</div>
	    	<div class="Producto-descripcion" id="producto-descripcion">
	    		{{ $producto->descripcion }}
	    	</div>
	    	<div class="Producto-subtitulo" id="p-subtitulo">
	    		{{$producto->subtitulo}}
	    	</div>
	    	<div class="Producto-subdescripcion" id="p-subdescripcion">
	    		{{ $producto->subdescripcion }}
	    	</div>
	    	</div>
    	</div>

    	<div class="Acta">
    		<div class="Acta-titulo Producto-titulo" id="a-titulo">{{ $producto->tituloacta }}</div>
    		<div class="Acta-left" id="aleft">
    			{{ $producto->contenidoacta1 }}
    		</div>
    		<div class="Acta-right" id="aright">
    			{{ $producto->contenidoacta2 }}
    		</div>
    	</div>
    </div>
@stop
