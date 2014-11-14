$(document).ready(function() {	
	getContent('gethistoria',1, $('.contenido'));
});

function tradicion(titulo){
	titulo.html("Some text and markup")
}

function getContent(url, id, sel){
	 $.post(url,{id:id})
        .done(function(data){
            sel.html("jsjsj");
            sel.html("nooooooooo");
        });
}