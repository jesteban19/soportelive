$(function(){
	$('<audio id="sound_alert"><source src="'+SITE_URL+'public/sound/sound_alert.mp3" type="audio/mpeg"></audio>').appendTo("body");

	/*Uso de sockets para la llamada y carga instantanea*/
	var socket=io.connect(SERVER_NODE);
	socket.on('notificacion_new_user',function(ticket){
		$.jGrowl("El ticket #"+ticket+" est&aacute; esperando en la sala!",{ header: 'Usuario Esperando' ,sticky : true });
		$('#sound_alert')[0].play();//reproducimos el sonido
	});
	/*fin del socket*/
});