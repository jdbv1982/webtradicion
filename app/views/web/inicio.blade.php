@extends('web/menu')

@section('sub-content')
    <div class="contenido">
    	<div class="generaciones">
    		<div class="titulo">
					AUTÉNTICO MEZCAL CON TRADICIÓN DESDE 1893
    		</div>
    		<div class="generacion">
    			<p>JORGE CHAGOYA SÁNCHEZ <br>
    				1875 - 1915
    			</p>
    			<div class="g1 g-image"></div>
    		</div>
    		<div class="generacion">
    			<p>ERNESTO CHAGOYA LLAGUNO <br>
					1900 - 1975
    			</p>
    			<div class="g2 g-image"></div>
    		</div>
    		<div class="generacion">
    			<p>PORFIRIO CHAGOYA HERNÁNDEZ <br>
					1924 - 1993
    			</p>
				<div class="g3 g-image"></div>
    		</div>
    		<div class="generacion">
    			<p>PORFIRIO RAYMUNDO CHAGOYA MÉNDEZ <br>1948 - Presente</p>
    			<div class="g4 g-image"></div>
    		</div>
    		<div class="generacion">
				<p>EXPENDIO TRADICION <br>
				2013
				</p>
				<div class="g5 g-image"></div>
    		</div>
    	</div>
    	<div class="mezcal"></div>
    	<div class="inicio-subcontenido">
    		<div class="inicio-desc">
    			<div class="img-head"></div>
    			<div class="descripcion">
					{{ trans('contenido.inicio-descripcion') }}
    			</div>
    			<div class="img-footer"></div>
    		</div>
    		<div class="promocion">
                <div class="promocion-img"></div>
                <div class="promocion-nombre">LOS CUERUDOS AÑEJO</div>
    		</div>
    	</div>
    </div>

@stop
