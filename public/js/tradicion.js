$(document).ready(function() {	
	tradicion($("#titulo"));
});

function tradicion(titulo){
	titulo.html("Some text and markup")
}

function getContent(url, id){
	$.post( url, { id: id }, function( data ) {
		  console.log( data.titulo );
		  console.log( data.contenido );
		}, "json");
}func