$(document).ready(function() {

	//var path = 'http://192.168.0.16/webtradicion/public';
	//var path = 'http://192.168.0.16/webtradicion/public';
	var path = 'http://192.168.0.26/webtradicion/public';

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

	$(document).on('click', '.Proceso-item-menu', function(e){
		getProceso('getproceso',$(this).attr('valor'), path);
	});

/*animaciones*/
rotate ('#mod-proceso-maguey1');
rotate ('#mod-proceso-maguey2');
rotate ('#mod-proceso-maguey3');

jQuery("#mod-proceso-humo").dynamiccloudeffect ({demo:"demo3"});

jQuery('#mod-proceso-fuego').fire({
		maxPow:0,
		speed:20,
		fireTransparency:35,
		globalTransparency:10,
		minPow:0,
		gravity:5,
		fadingFlameSpeed:3,
		yOffset:0,
		flameHeight:1,
		maxPowZone:"center",
		flameWidth:3
	});

});

function getProceso(url, id, path){
	$.ajax({
		type: "POST",
		dataType: "json",
		url: url,
		data: {id: id},
		success: function(data){
			$("#proceso-modal-contenido").hide();
			$("#proceso-img").hide();

			 $("#proceso-img >img").attr("src", path + data['urlimage']);
			 $("#proceso-modal-titulo").html(data['titulo']);
			 $("#proceso-modal-texto").html(data['contenido']);
			$("#proceso-modal-contenido").slideDown(500);
			$("#proceso-img").slideDown(500);

		}

	});

}


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


function rotate (elementID) {

    var rota = jQuery(elementID),
        degree = 0,
        timer;

    function spin() {
        rota.css({ transform: 'rotate(' + degree + 'deg)'});
		plusOrMinus = Math.random() < 0.5 ? -1 : 1;
		randAngle = Math.floor(Math.random()*70+50) * plusOrMinus;
		randDelay = Math.floor(Math.random()*1000+2000);
        timer = setTimeout(function() {
            degree += randAngle;
            spin(); // loop it
        },randDelay);
    }

    spin();    // run it!

};
