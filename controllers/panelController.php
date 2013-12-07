<?php


class panelController extends Controller
{
	private $_ticket;
	public function __construct(){
		parent::__construct();
		if(!Session::get('login')){
			$this->redireccionar();
		}

		$this->_ticket=$this->loadModel('ticket');
	}

	public function index(){
		$this->_view->setJs(array('app'));
		$this->_view->assign('titulo','CPANEL | Sistema Chat en Vivo! V 0.1');
		$login=Session::get('login');
		$this->_view->assign('nombre',$login['nombre']);
		$this->_view->renderizar('index',false,false,'template_panel');
	}

	public function iniciados(){
		$login=Session::get('login');
		$data=$this->_ticket->getTicketsbySupportIniciado($login['idusuario']);
		for($i=0;$i<count($data);$i++){
			$ticket=$this->_ticket->tiempoRestanteTicket($data[$i]['idticket'],$login['idusuario']);
			$data[$i]['segundos']=$ticket['segundos'];
		}
		$this->_view->assign('data',$data);
		$this->_view->renderizar('iniciados',false,'iniciados');
	}

	public function progreso(){
		$login=Session::get('login');
		$data=$this->_ticket->getTicketsbySupportProgreso($login['idusuario']);
		for($i=0;$i<count($data);$i++){
			$ticket=$this->_ticket->tiempoRestanteTicket($data[$i]['idticket'],$login['idusuario']);
			$data[$i]['segundos']=$ticket['segundos'];
		}		
		$this->_view->assign('data',$data);
		$this->_view->renderizar('progreso',false,'progreso');
	}

	public function globales(){
		$login=Session::get('login');
		$data=$this->_ticket->getTicketsbySupportGlobales($login['idusuario']);
		for($i=0;$i<count($data);$i++){
			$ticket=$this->_ticket->tiempoRestanteTicket($data[$i]['idticket'],$data[$i]['idusuario_support']);
			$data[$i]['segundos']=$ticket['segundos'];
		}
		$this->_view->assign('data',$data);
		$this->_view->renderizar('globales',false,'globales');
	}

	public function updateState(){
		if(!$this->getInt('id') && !$this->getInt('state')){
			exit;
		}

		$this->_ticket->updateState($this->getInt('id'),$this->getInt('state'));
	}

	public function updateChange(){
		if(!$this->getInt('id')){
			exit;
		}
		$login=Session::get('login');
		$this->_ticket->updateChange($this->getInt('id'),$login['idusuario'],2);
	}

	public function chat($ticket){
		$this->_view->setJs(array('socket.io','chat'));
		$login=Session::get('login');
		$this->_view->assign('titulo','Chat #'.$ticket." | Sistema Chat en Vivo! V 0.1");
		$this->_view->assign('login',$login);
		$this->_view->assign('ticket',$ticket);
		$this->_view->renderizar('chat',false,'chat');
	}

	public function logout(){
		Session::destroy('login');
		$this->redireccionar();
	}

}

?>