$(document).ready(function() {
	getHistoria('gethistoria', 1 );
	$(document).on('click','.menuhistoria', function(e){
		getHistoria('gethistoria', $(this).attr('valor') );
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
			$("#imgloader").hidde();
		}

	});


	/*$.post(url,{id: id}, function(data) {
	//	$("#loader").hidde();
		$("#titulo").html(data['titulo']);
		$("#Historia-contenido").html(data['contenido']);
	});*/

}
