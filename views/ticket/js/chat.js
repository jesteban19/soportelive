	var titleDoc=document.title;
	var timetitle=null;
	var timetitleClear=null;
	var nombre='';
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
		$.cookie('chat_init',true);
	});

	socket.on('bienvenido',function(data){
		//console.log(data.text);
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
		$('#modal-puntuacion').modal({
		  backdrop: 'static',
		  keyboard: true
		});
	});

	socket.on('message', function(message){
        var html=''
        //console.log(message);
        message.forEach(function (data) {
        	// create a new javascript Date object based on the timestamp
			// multiplied by 1000 so that the argument is in milliseconds, not seconds
			
			//html=html+data.mensaje + ' a las '+formattedTime + '<br/>';
			var nombre=$("#authenticity_name").val();
			var body="<li class='message'> " +
					"<div class='avatar'> " +
					"<img alt='Avatar' height='23' src='"+SITE_URL+"views/layout/bootstrap_flattybs3/img/avatar.jpg' width='23'>" +
					"</div>" +
					"<div class='name-and-time'>" +
					"<div class='name pull-left'>" +
					"<small>" +
					"<a class='text-contrast' href='#''>"+data.nombre+"</a>" +
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
			html=html+body;

		});
		$("#chat_messages").html(html);
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
		$("#btn_guardar_star").click(function(event) {
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
					$("#success_puntos").fadeIn();
					setTimeout(redirect,2000);
				});

			event.preventDefault();
		});
		
    });