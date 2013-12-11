<?php


class panelController extends Controller
{
	private $_ticket;
	private $_usuario;
	public function __construct(){
		parent::__construct();

		if(!Session::get('login')){
			$this->redireccionar();
		}

		$this->_ticket=$this->loadModel('ticket');
		$this->_usuario=$this->loadModel('usuario');
	}

	public function index(){
		$this->_view->setJs(array('app','socket.io','app_notificacion'));
		$this->_view->assign('titulo','CPANEL | Sistema Chat en Vivo! V 0.1');
		$login=Session::get('login');
		$this->_view->assign('nombre',$login['nombre']);
		$this->_view->renderizar('index',false,false,'template_panel');
	}

	public function historial(){
		$login=Session::get('login');
		$this->_view->assign('nombre',$login['nombre']);
		$this->_view->assign('titulo','HISTORIAL | '.APP_NAME);
		$this->_view->assign('data',$this->_ticket->getHistorial());
		$this->_view->renderizar('historial',false,false,'template_panel');
		//print_r($this->_ticket->getHistorial());
	}

	public function chat($ticket){
		$this->_view->setJs(array('socket.io','chat'));
		$login=Session::get('login');
		$this->_view->assign('titulo','Chat #'.$ticket." | Sistema Chat en Vivo! V 0.1");
		$this->_view->assign('login',$login);
		$this->_view->assign('ticket',$ticket);
		$this->_view->assign('data',$this->_ticket->get($ticket));
		$this->_view->renderizar('chat',false,'chat');

	}

	public function logout(){
		$login=Session::get('login');
		$this->_usuario->activeOff($login['idusuario'],0);
		Session::destroy('login');
		$this->redireccionar();
	}

	/* AJAX POST*/
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
		if($this->getInt('id')=='3'){
			$this->_ticket->setTime_end($this->getInt('id'));
		}

		$this->_ticket->updateState($this->getInt('id'),$this->getInt('state'));
	}

	public function updateChangeTime(){
		if(!$this->getInt('id') && !$this->getInt('time')){
			exit;
		}
		$tiempo_min=$this->getInt('time');
		$tiempo_seg=$tiempo_min*60;
		$this->_ticket->updateTiempo($this->getInt('id'),$tiempo_seg);
	}

	public function setTimeInit(){
		if(!$this->getInt('id')){
			exit;
		}
		$this->_ticket->setTime_init($this->getInt('id'),$tiempo_seg);		
	}

	public function updateChange(){
		if(!$this->getInt('id')){
			exit;
		}
		$login=Session::get('login');
		$this->_ticket->updateChange($this->getInt('id'),$login['idusuario'],2);
	}



	

}

?>