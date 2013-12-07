<?php

class ticketController extends Controller
{
	private $_chat;
	private $_ticket;
	public function __construct(){
		parent::__construct();
		$this->_chat=$this->loadModel('chat');
		$this->_ticket=$this->loadModel('ticket');

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
		
		$this->_view->setJs(array('socket.io','chat'));
	}

	public function index(){
		$this->_view->assign('titulo','Conectado | Sistema Chat en Vivo! V 0.1');
		$this->_view->assign('datos',$this->_ticket->getNombreTicket(Session::get('idticket')));
		$this->_view->renderizar('index');
	}

	public function getChat(){
		print_r($this->_chat->getMsg(strtotime("now")));
	}
}

?>