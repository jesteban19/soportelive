var close_window=false;

$(document).ready(function($) {
	close_window=false;

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
	globales();
	progreso();

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
		var idticket=$(this).data('ticket')
		
		$.post(BASE_URL+'panel/setTimeInit',
		 {'id' : idticket},
		 function(data) {
			//success update	
		});

		var options = "height=600,width=500,scrollTo,resizable=1,scrollbars=1,location=0";
	    nueva=window.open(BASE_URL+'panel/chat/'+idticket, 'chat #'+idticket, options);
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

	//refresh
	$("#refresh_iniciados").live('click',function(e){
		$("#iniciados").html(load);
		iniciados();
		e.preventDefault();
	});
	$("#refresh_progreso").live('click',function(e){
		$("#progreso").html(load);
		progreso();
		e.preventDefault();
	});
	$("#refresh_globales").live('click',function(e){
		$("#globales").html(load);
		globales();
		e.preventDefault();
	});

	$("a").click(function(e) {
		e.preventDefault();
		close_window=true;
		location.href=$(this).attr('href');
	});

	/* confirmacion de mensaje al cerrar la ventana para cerrar el ticket y el chat*/
	$(window).on("beforeunload", function(eEvent) {
		if(!close_window)
			return "Deseas cerrar la ventana?, primero cierra tu sesion!. Asi evitaras conflictos con los tickets...";
	});

	function enabledF5(e) { if ((e.which || e.keyCode) == 116) close_window=true; };
		// To disable f5
	$(document).bind("keydown", enabledF5);

});