	var titleDoc=document.title;
	var timetitle=null;
	var timetitleClear=null;
	var nombre='';
	var close_ticket=false;
	function timetoDate(tiempo){
		var date = new Date(tiempo*1000);
		// hours part from the timestamp
		var hours = date.getHours();
		// minutes part from the timestamp
		var minutes = date.getMinutes();
		// seconds part from the timestamp
		var seconds = date.getSeconds();

		// will display time in 10:30:23 format
		return  hours + ':' + minutes + ':' + seconds;
	}
	
	var animateTitle=function(){
		document.title=nombre+" dice : ";
	};

	var socket=io.connect(SERVER_NODE);

	socket.on('connect',function(){
		socket.emit('adduser',$("#authenticity_ticket").val());

		if($.cookie('chat_init')==undefined){
			var _message="Bienvenido al chat del Soporte de ZeusIntranet. ¿En qué puedo ayudarle el día de Hoy?";
			socket.emit('insert',_message,$("#authenticity_ticket").val(),"System");
			$.cookie('chat_init',true);	
		}
	});
	/**
	 * depues de conectar nos manda esta funcion para saber si ya hay mas de 2 conectados!
	 * @param  {[object]} total de conectados
	 * @return {[void]} void
	 */
	socket.on("waiting",function(count){
		if(count<2){
			//bloqueamos el chat
			$("#modal-bloqued").modal({
				backdrop : 'static',
				keyboard : false
			});
		}else{
			$("#modal-bloqued").modal('hide');
		}
	});

	socket.on('writing',function(message){
		$("#writing").html('<b>'+message+'</b> esta escribiendo...');
	});

	socket.on('writing_end',function(name){
		$('#audio_fb')[0].play();//reproducimos el sonido
		$("#writing").html('');
		nombre=name;
		//$.jGrowl("holaaaaaaaa");
		setTimeout(animateTitle,500);
	});

	socket.on('close_ticket',function(e){
		close_ticket=true;
		$('#modal-terminado').modal({
		  backdrop: 'static',
		  keyboard: false
		});
	});

	socket.on('message', function(message){
        var html=''
        //console.log(message);
        message.forEach(function (data) {
        	// create a new javascript Date object based on the timestamp
			// multiplied by 1000 so that the argument is in milliseconds, not seconds
			
			//html=html+data.mensaje + ' a las '+formattedTime + '<br/>';
			var classColor=(data.nombre==$('#authenticity_name').val() ? 'text-contrast' : 'text-danger');
			var nombre=$("#authenticity_name").val();
			var body="<li class='message'> " +
					"<div class='avatar'> " +
					"<img alt='Avatar' height='23' src='"+SITE_URL+"views/layout/bootstrap_flattybs3/img/avatar.jpg' width='23'>" +
					"</div>" +
					"<div class='name-and-time'>" +
					"<div class='name pull-left'>" +
					"<small>" +
					"<a class='"+classColor+"' href='#''>"+data.nombre+" dice :</a>" +
					"</small>" +
					"</div>" +
					"<div class='time pull-right'>" +
					"<small class='date pull-right text-muted'>" +
					"<span class='timeago  has-tooltip' data-placement='top' title='"+timetoDate(data.fecha_stamp)+"'> "+timetoDate(data.fecha_stamp)+" </span>" +
					" <i class='icon-time'></i> " +
					"</small>" +
					"</div>" +
					"</div>" +
					"<div class='body'>" +data.mensaje+
					"</div>" +
					"</li>";
			html=body+html;

		});
		$("#chat_messages").html(html);
		$(".scrollable").slimScroll({
              scrollTo: $(".scrollable").data("scrollable-height") + "px"
         });
    }); 



	function sendMessage() {
		socket.emit('insert',$("#message_body").val(),$("#authenticity_ticket").val(),$("#authenticity_name").val());
		socket.emit('writing_end',$("#authenticity_ticket").val(),$("#authenticity_name").val());
    }
    function writing(){
    	socket.emit('writing',$("#authenticity_name").val(),$("#authenticity_ticket").val());
    }

    /**
     * Document.Ready , iniciando el documento 
     * @return {void}
    */
    $(function(){
    	$('<audio id="audio_fb"><source src="'+SITE_URL+'public/sound/sound_chat.mp3" type="audio/mpeg"></audio>').appendTo("body");


    	$("#message_body" ).keypress(function( event ) {
    	  if ( event.which == 13 ) {		  	
		    event.preventDefault();
		    if($(this).val().length>0){
		    	sendMessage();
		    	$(this).val('');
		    }
		    
		  }

		  if($(this).val().length>0)
		  	writing();
		}).focusin(function(event) {
			document.title=titleDoc;
		});

		$(".btn-success[type='submit']").click(function(e){
			e.preventDefault();
			sendMessage();
			$("#message_body").val('');
		});

		var redirect=function(){
			location.href=BASE_URL;
		}

		$("#btn-close-ticket").click(function(event) {
			/* CLOSE MODALS */
			$("#message_body").attr('disabled','disabled').addClass('disabled');
			$("#modal-bloqued").modal('hide');
			$("#modal-terminado").modal('hide');
		});
		$("a.close_ticket").click(function(e) {
			e.preventDefault();
			/* para mostrar la puntuacion */
			$('#modal-puntuacion').modal({
		  		backdrop: 'static',
		  		keyboard: true
			});
		});

		$("#btn_guardar_star").click(function(event) {
			$(this).hide();
			var puntos=0;
			if($("#form-puntuacion input[name=star_point]").val()!='')
				puntos=$("#form-puntuacion input[name=star_point]").val();

			$.post(BASE_URL+'ticket/star',
				{ 
					'id' : $("#authenticity_ticket").val(),
					'star_point' : $("#form-puntuacion input[name=star_point]").val(),
					'comentario' :  $("#form-puntuacion textarea[name=comentario]").val()
				}
				, function(data) {
					$.removeCookie('chat_init');
					$("#success_puntos").fadeIn();
					setTimeout(redirect,2000);
				});

			if($("#form-puntuacion textarea[name=email]").val()!=''){
				/*Enviamos el correo en un handle aparte*/
				$.post(BASE_URL+'ticket/sendChat',
				{
				 	'email'		: $("#form-puntuacion input[name=email]").val(),
				 	'ticket'	: $("#authenticity_ticket").val()
				},function(data) {					
				});
			}
			event.preventDefault();
		});

		/* confirmacion de mensaje al cerrar la ventana para cerrar el ticket y el chat*/
		$(window).on("beforeunload", function(eEvent) {
			if(!close_ticket)
				return "Cancelaras el Chat?, si lo cierras no podras puntuar!";
		});

		$(window).on('unload', function(){

			$.removeCookie('chat_init');
			$.post(BASE_URL+'panel/updateState',
			{'id' : $("#authenticity_ticket").val(),'state' : 3},
			 function(data) {
								
			});
		});

		function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
		// To disable f5
		$(document).bind("keydown", disableF5);
    });