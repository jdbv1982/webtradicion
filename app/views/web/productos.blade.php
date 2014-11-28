@extends('web/menu')

@section('sub-content')
    <div class="contenido">
    	<div class="menuproductos">
    		<div valor="1" class="menu item-menu">Donají Joven</div>
    		<div valor="2" class="menu item-menu">Donají Añejo</div>
    		<div valor="3" class="menu item-menu">Los Cuerudos Blanco</div>
    		<div valor="4" class="menu item-menu">Los Cuerudos con Gusano</div>
    		<div valor="5" class="menu item-menu">Los Cuerudos Reposado</div>
    		<div valor="6" class="menu item-menu">Los Cuerudos Añejo</div>
    		<div valor="7" class="menu item-menu">Tehuana con Gusano</div>
    		<div valor="8" class="menu item-menu">Licor de Café Huatulco</div>
    		<div valor="9" class="menu item-menu">Margarita Huatulco</div>
    	</div>
    	<div class="Producto">
    		<div class="imagen-producto"  id="img-producto">
	    		{{ HTML::image('images/general/productos/mezcal-donaji-joven.jpg') }}
	    		<div class="Producto-img-pie" id="img-pie">Donají es un tributo a la pureza del ‘Alma Grande’ de la princesa que murió para dar paz a los pueblos en discordia.
	    		</div>
	    	</div>
	    	<div class="contenido-producto">
	    	<div class="Producto-titulo" id="producto-titulo">DONAJÍ JOVEN</div>
	    	<div class="Producto-descripcion" id="producto-descripcion">
	    		Donají Joven es una bebida cristalina y pura que muestra la franqueza y calidad del emblemático agave espadín utilizado para su elaboración. Se caracteriza por la claridad de los tonos herbales que realzan su frescura, prueba de que un buen mezcal no necesita pasar por madera para ser suave.
	    	</div>
	    	<div class="Producto-subtitulo" id="p-subtitulo">
	    		Experiencia Donají Joven
	    	</div>
	    	<div class="Producto-subdescripcion" id="p-subdescripcion">
	    		<p>A la vista: Es cristalino, brillante y limpio, con una textura tersa y un perlado uniforme de duración media.</p>

				<p>Al olfato: Se advierte un suave aroma a tierra, hierbas frescas y un discreto ahumado.</p>

				<p>Al gusto: Al principio podemos percibir el sabor del agave recién cortado que va dando paso a tonos minerales y terrosos que derivan en un sabor herbal que permanece largo tiempo en la boca. Al final podemos apreciar en el retrogusto los matices ahumados que identificamos con el olfato previamente.</p>
	    	</div>
	    	</div>
    	</div>

    	<div class="Acta">
    		<div class="Acta-titulo Producto-titulo" id="a-titulo">ACTA DE ORIGEN</div>
    		<div class="Acta-left" id="aleft">
    			<p>
					<em>Tipo de mezcal:</em> Joven.<br>
					<br>
					<em>Magueyes empleados:</em> Espadín (Angustifolia Haw), especie con un peso promedio de 95 kilos.<br>
					<em>Tipo de horno:</em> Horno cónico de piedra.<br>
					<br>
					<em>Tipo de molienda:</em> Tahona, piedra cilíndrica de metro y medio de alto, tirada por un caballo.<br>
					<br>
					<em>Tipo de tina de fermentación:</em> Madera de sabino.<br>
				</p>
    		</div>
    		<div class="Acta-right" id="aright">
    			<p>
					<em>Tipo de destilador:</em> Alambique de cobre.<br>
					<br>
					<em>Número de destilaciones:</em> Dos.<br>
					<br>
					<em>Riqueza alcohólica:</em> 40%.<br>
					<br>
					<em>Estado:</em> Oaxaca.<br>
					<br>
					<em>Población:</em> Paraje el Pipe, Tlacolula de Matamoros.
				</p>
    		</div>
    	</div>
    </div>
@stop
