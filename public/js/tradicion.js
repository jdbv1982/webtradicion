$(document).ready(function() {

	//var path = 'http://192.168.0.11/webtradicionlocal/public';
	var path = 'http://192.168.0.13/tradicion/public';
	//var path = 'http://172.17.68.211/tradicion/public';

	var url = window.location.pathname;
	var segmentos = url.split("/");
	var seccion = segmentos[segmentos.length -1];

//	$("#proceso-img").hide();

	$(".rslides").responsiveSlides({
  		auto: true,
        pager: false,
        nav: true,
        speed: 500,
        maxwidth: 800,
        namespace: "large-btns"
	});

	getHistoria('gethistoria', 1, path, seccion );
	$(document).on('click','.menuhistoria', function(e){
		getHistoria('gethistoria', $(this).attr('valor'), seccion );
	});

	$(document).on('mouseover','.menu-arbol-historia', function(e){
		getHistoria('gethistoria', $(this).attr('valor'), path, seccion);
	});

	/*$(document).on('click', '.item-menu', function(e){
		getItem('getitem',$(this).attr('valor'), path);
	});*/
	getProceso('getproceso',1, path, seccion);
	$(document).on('click', '.Proceso-item-menu', function(e){
		getProceso('getproceso',$(this).attr('valor'), path, seccion);
	});


	/*menu productos*/

	$(document).on('mouseover', '#vermenuproductos', function(e){
		e.preventDefault();
		$("#submenu").slideDown();
	});

	$(document).on('mouseleave', '#submenu', function(e){
		e.preventDefault();
		$("#submenu").slideUp();
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

function getProceso(url, id, path, seccion){
	$.ajax({
		type: "POST",
		dataType: "json",
		url: url,
		data: {id: id, seccion:seccion},
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


function getHistoria(url, id, path, idioma){
	$("#imgloader").show();

	$.ajax({
		type: "POST",
		dataType: "json",
		url: url,
		data: {id: id, idioma: idioma},
		success: function(data){
			$("#titulo").html(data['titulo']);
			$("#Historia-contenido").html(data['contenido']);
			 $(".Historia-img").hide();

			if(id > 1 && id < 6){
			 	$(".Historia-img").show();
			 	$("#quintag").hide();
			}

			$(".Historia-img >img").attr("src", path + data['img1']);

			if(id == 6){
				$("#quintag >img").attr("src", path + data['img1']);
				$("#quintag").show();
			}


			/*

			 if(id < 6) {
			 	$("#img1").attr("src", path + data['img1']);
			 	$("#img2").attr("src", path + data['img2']);
			 	$("#img3").attr("src", path + data['img3']);
			 	$("#img4").attr("src", path + data['img4']);
			 	$("#quintag").hide();

			 }

			 if(id == 6){
			 	$("#content-slides").hide();

			 	$("#quintag > img").attr("src", path + data['img1']);
			 	$("#quintag").show();
			 }*/

		}

	});

}


/*function getItem(url, id, path){
	var url = window.location.href;
	var segmentos = url.split("/");
	var seccion = segmentos[segmentos.length-1];
	if(seccion != "productos" || seccion != "productos#"){
		window.location.href = path + '/productos';
	}
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
			$("#submenu").slideToggle();
		}

	});
}*/

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
