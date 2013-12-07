<?php

class indexController extends Controller
{
	private $_sistema;
	private $_ticket;
	private $_usuario;
	public function __construct(){
		parent::__construct();
		$this->_sistema=$this->loadModel('sistema');
		$this->_ticket=$this->loadModel('ticket');
		$this->_usuario=$this->loadModel('usuario');

	}
	public function log(){
		$this->_ticket->close(Session::get('idticket'));
		Session::destroy('idticket');
		$this->redireccionar();
	}

	//login usuario , solo se permiten administradores por el momento	
	public function login(){
		if(!$this->getSql('usuario') &&	!$this->getSql('password')){
			exit;
		}

		$log=$this->_usuario->auth($this->getSql('usuario'),$this->getSql('password'));
		if(is_array($log)>0){
			$data['usuario']=$log['usuario'];
			$data['idrole']=$log['idrole'];
			$data['nombre']=$log['nombre'];
			$data['idusuario']=$log['idUsuario'];
			Session::set('login',$data);
			echo true;
		}else{
			echo false;
		}
	}

	public function index()
	{			
		$this->_view->setJs(array('app'));

		

		if(!Session::get('idticket')){ //si no ha registrado un ticket
			$this->_view->assign('titulo','Sistema Chat en Vivo! V 0.1');
			$data['sistema']=$this->_sistema->getAll();
			$this->_view->assign('data',$data);
			$this->_view->renderizar('index',false,false,'template_login');		
		}else{ //si ya registro un ticket
			$this->_view->assign('titulo','Ticket #'.Session::get('idticket').' | Sistema Chat en Vivo! V 0.1');

			
			$dat=$this->_ticket->get(Session::get('idticket'));

			if(!isset($dat['usuario'])){ //si no existe el ticket o ya se cerro.
				Session::destroy('idticket');
				$this->redireccionar();
				exit;
			}
			
			$ticket=$this->_ticket->get(Session::get('idticket'));
			$data=$this->_ticket->pointRest(Session::get('idticket'),$ticket[0]['usuario']);			
			if(!is_array($data)){
				$data['tiempo']=0;
			}else{
				if($data['tiempo']<0)
					$data['tiempo']=0;
			}

			$this->_view->assign('support',$ticket['nombre']);
			$this->_view->assign('online',count($this->_ticket->usuariosOnline()));
			$this->_view->assign('segundos',$data['tiempo']);
			$this->_view->assign('retro',$this->secondsToFormat($data['tiempo']));

			$this->_view->renderizar('generado',false,false,'template_login');
		}
				
	}


	public function generatingTicket(){
		if(!$this->getInt('sistema') &&	!$this->getSql('nombre') &&	!$this->getSql('mensaje')){
			exit;
		}

		//generar support a atender
		$min=9999999;
		$support=-1;
		$users=$this->_ticket->usuariosOnline();

		for($i=0;$i<count($users);$i++){			
			$t=$this->_ticket->timebyUser($users[$i]['idusuario']);
			if($t['total']<$min){
				$min=$t['total'];
				$support=$users[$i]['idusuario'];
			}
		}

		//si hay soportes en linea
		if(count($users)>0){//si hay usuarios online agregar el ticket
			$id=$this->_ticket->agregarIniciado(
				$this->getInt('sistema'),
				$this->getSql('nombre'),
				$this->getSql('mensaje'),
				$support);
				Session::set('idticket',$id[0]);
		}
		
	}



	public function nextSteep()
	{	
		if(!Session::get('idticket')){
			
		}else{
			$ticket=$this->_ticket->get(Session::get('idticket'));
			$data=$this->_ticket->pointRest(Session::get('idticket'),$ticket[0]['usuario']);			
			if(!is_array($data)){
				$data['tiempo']=0;
			}else{
				if($data['tiempo']<0)
					$data['tiempo']=0;
			}
			$this->_view->assign('support',$ticket['nombre']);
			$this->_view->assign('online',count($this->_ticket->usuariosOnline()));
			$this->_view->assign('segundos',$data['tiempo']);
			$this->_view->assign('retro',$this->secondsToFormat($data['tiempo']));
			$this->_view->renderizar('index',false,'esperando');
		}
		
	}

	private function secondsToFormat($seg_ini){
		$horas = floor($seg_ini/3600);
		$minutos = floor(($seg_ini-($horas*3600))/60);
		$segundos = $seg_ini-($horas*3600)-($minutos*60);
		return $horas.'h:'.$minutos.'m:'.$segundos.'s';
	}

}
?>