$(document).ready(function() {

	var path = 'http://192.168.0.16/webtradicion/public';

	$(".rslides").responsiveSlides({
  		auto: true,
        pager: false,
        nav: true,
        speed: 500,
        maxwidth: 800,
        namespace: "large-btns"
	});

	getHistoria('gethistoria', 1 );
	$(document).on('click','.menuhistoria', function(e){
		getHistoria('gethistoria', $(this).attr('valor') );
	});

	$(document).on('mouseover','.menu-arbol-historia', function(e){
		getHistoria('gethistoria', $(this).attr('valor'));
	});

	$(document).on('click', '.item-menu', function(e){
		getItem('getitem',$(this).attr('valor'), path);
	});
});


function getHistoria(url, id){
	$("#imgloader").show();

	$.ajax({
		type: "POST",
		dataType: "json",
		url: url,
		data: {id: id},
		success: function(data){
			$("#titulo").html(data['titulo']);
			$("#Historia-contenido").html(data['contenido']);
		}

	});

}


function getItem(url, id, path){
	$.ajax({
		type: "POST",
		dataType: "json",
		url: url,
		data: {id: id},
		success: function(data){
			if((data['urlimage'] != "") || (data['urlimage'] != "null")){
			 	$("#img-producto >img").attr("src", path + data['urlimage']);
			}else{
				$("#img-producto >img").attr("src", '');
			}



			printContent($("#img-pie"), data['pieimagen']);
			printContent($("#producto-titulo"), data['titulo']);
			printContent($("#producto-descripcion"), data['descripcion']);
			printContent($("#p-subtitulo"), data['subtitulo']);
			printContent($("#p-subdescripcion"), data['subdescripcion']);
			printContent($("#a-titulo"), data['tituloacta']);
			printContent($("#aleft"), data['contenidoacta1']);
			printContent($("#aright"), data['contenidoacta2']);

			validaCampo($("#a-titulo"), data['tituloacta'],'Producto-titulo');

			 
		}

	});
}

function printContent(ele, valor){
	if(valor == ""){
		ele.html("");
	}else{
		ele.html(valor);
	}
}

function validaCampo(ele, valor, clasecss){
	if(valor == ""){
		ele.removeClass(clasecss);
	}else{
		ele.addClass(clasecss);
	}
}