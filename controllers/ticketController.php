<?php

class ticketController extends Controller
{
	private $_chat;
	private $_ticket;
	public function __construct(){
		parent::__construct();
		$this->_chat=$this->loadModel('chat');
		$this->_ticket=$this->loadModel('ticket');

		$this->_view->setJs(array('socket.io','chat'));
	}

	public function index(){
		/*validamos la session del usuario en el ticket*/
		if(!Session::get('idticket')){
			$this->redireccionar();
		}else{
			$dat=$this->_ticket->get(Session::get('idticket'));
			if(!isset($dat['usuario'])){ //si no existe el ticket o ya se cerro.				
				Session::destroy('idticket');
				$this->redireccionar();
				exit;
			}
		}

		$this->_view->assign('titulo','Conectado | Sistema Chat en Vivo! V 0.1');
		$this->_view->assign('datos',$this->_ticket->getNombreTicket(Session::get('idticket')));
		$this->_view->renderizar('index');
	}


	public function star(){
		if(!Session::get('idticket')){
			$this->redireccionar();
		}

		if(!$this->getInt('id') && !$this->getInt('star_point') && !$this->getSql('comentario')){
			exit;
		}

		$this->_ticket->addRating(
			$this->getInt('id'),
			$this->getInt('star_point'),
			$this->getSql('comentario')
			);
		//cierro el ticket
		$this->_ticket->updateState($this->getInt('id'),3);
		$this->_ticket->setTime_end($this->getInt('id'));
		
	}

	public function sendChat(){
		if(!$this->getInt('ticket')){

			exit;
		}

		$correo=urldecode($this->getPostParam('email'));
		$ticket=$this->getInt('ticket');

		$dataTicket=$this->_chat->getChat($ticket);
		//peparamos el cuerpo del chat
		$bodyChat='<h3>Historial del chat #'.$ticket.'</h3><br/><ol>';

		for($i=0;$i<count($dataTicket);$i++){
			$bodyChat.='<li><strong>'.utf8_decode($dataTicket[$i]['nombre']).'</strong> dice : '.utf8_decode($dataTicket[$i]['mensaje']).' | Fecha y Hora : '.$dataTicket[$i]['timestap'].'</li>';
		}
		$bodyChat.='</ol>';

		//Instanciamos un objeto de la clase phpmailer
		$mail = new phpmailer();
		 
		//Indicamos a la clase phpmailer donde se encuentra la clase smtp
		$mail->PluginDir = "";
		 
		//Indicamos que vamos a conectar por smtp
		$mail->Mailer = "smtp";
		 
		//Nuestro servidor smtp. Como ves usamos cifrado ssl
		$mail->Host = "mastabeats.com";
		 
		//Puerto de mastabeats 25
		$mail->Port="25";
		 
		//Le indicamos que el servidor smtp requiere autenticación
		$mail->SMTPAuth = true;
		 
		//Le decimos cual es nuestro nombre de usuario y password
		$mail->Username = "soporte@mastabeats.com";
		$mail->Password = "@z3uss0p0rt3Z";
		 
		//Indicamos cual es nuestra dirección de correo y el nombre que
		//queremos que vea el usuario que lee nuestro correo
		$mail->From = "robot.send@soporte.com";
		$mail->FromName = APP_NAME;
		 
		//El valor por defecto de Timeout es 10, le voy a dar un poco mas
		$mail->Timeout=30;
		 
		//Indicamos cual es la dirección de destino del correo.
		$mail->AddAddress($correo);
		 
		//Asignamos asunto
		$mail->Subject = "Historial del chat #".$ticket;
		 
		//Cuerpo del mensaje. Puede contener html
		$mail->Body =$bodyChat;
		$mail->IsHTML(true);
		//Si no admite html
		//$mail->AltBody = "Cuerpo de mensaje solo texto";
		//Envia en email
		if($mail->Send())
		{
			$resultado = "Enhorabuena el mensaje ha sido enviado con éxito a $correo";
		}else{
			$resultado = "Lo siento ha habido un error al enviar el mensaje a $correo";
		}
		echo $resultado;
	}

}

?>