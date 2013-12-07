$(document).ready(function($) {

	var load="<div class='col-sm-2'><img src='"+SITE_URL+"public/img/ajax-loaders/4.gif'></div>";
	
	var iniciados=function(){
		$.post(BASE_URL+'panel/iniciados',
		 function(data) {
			$("#iniciados").html(data);
			setTimeout(iniciados,1000*10);
			$('.popover').remove();
		});
	};

	var progreso=function(){
		$.post(BASE_URL+'panel/progreso',
		 function(data) {
			$("#progreso").html(data);
			setTimeout(progreso,1000*10);
			$('.popover').remove();
		});
	};

	var globales=function(){
		$.post(BASE_URL+'panel/globales',
		 function(data) {
			$("#globales").html(data);
			setTimeout(globales,1000*10);
			$('.popover').remove();
		});
	};

	$("#iniciados").html(load);
	$("#progreso").html(load);
	$("#globales").html(load);
	iniciados();
	progreso();
	globales();

	//handles de btn
	$(".btn-iniciado").live('click',function(e){
		$("#iniciados").html(load);
		$("#progreso").html(load);

		$.post(BASE_URL+'panel/updateState',
			{'id' : $(this).data('ticket') ,'state' : 2}
			,function(data) {
				iniciados();
				progreso();
		});
		e.preventDefault();
	});

	$(".btn-progreso").live('click',function(e){
		e.preventDefault();

	});

	$(".btn-globales").live('click',function(e){
		$("#progreso").html(load);
		$("#globales").html(load);
		var idticket=$(this).data('ticket');
		$.post(BASE_URL+'panel/updateChange',
			{'id' : idticket }
			,function(data) {
				progreso();
				globales();
		});
		
		e.preventDefault();
	});

});