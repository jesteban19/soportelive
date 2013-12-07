<?php

class ticketModel extends Model
{
	public function __construct(){
		parent::__construct();
	}
	/*--------desde aqui nueva implementacion------------*/
	public function usuariosOnline(){
		$data=$this->_db->query(
			'select idusuario,nombre,usuario from usuario where active=1'
			);
		return $data->fetchAll();
	}

	public function timebyUser($iduser){
		$data=$this->_db->query(
			"select IFNULL(sum(tiempo-(time_to_sec(now())-time_to_sec(fecha))),0)'total' from ticket where idusuario_support=".$iduser." and idestado_ticket!=3"
			);
		return $data->fetch();
	}



	public function pointRest($id,$support){
		$data=$this->_db->query(
			"select IFNULL(sum(tiempo-(time_to_sec(now())-time_to_sec(fecha))),0)'tiempo' from ticket where idticket<".$id." and idestado_ticket!=3 and idusuario_support=".$support.
			" "
			);

		return $data->fetch();
	}

	

	public function get($id){
		$data=$this->_db->query(
			"select idusuario_support'usuario',u.nombre from ticket as t inner join usuario as u on u.idUsuario=t.idUsuario_support where idestado_ticket!=3 and idticket=".$id
			);

		return $data->fetch();
	}

	public function close($id){
		$this->_db->query(
			"update ticket set idestado_ticket=3 where idticket=".$id
			);
	}

	public function getId($id){
		$data=$this->_db->query(
			"select usuario.idusuario,usuario.usuario,
			case when
			sum(TIME_TO_SEC(TIMEDIFF(adddate(ticket.fecha,interval (ticket.tiempo/60) minute),now())))<0 then 0 else 
			IFNULL(sum(TIME_TO_SEC(TIMEDIFF(adddate(ticket.fecha,interval (ticket.tiempo/60) minute),now()))),0) end'total'
			from usuario
			left join ticket on usuario.idUsuario=ticket.idUsuario_Support
			where ticket.idticket=".$id."  
			group by usuario.idUsuario,usuario.usuario"
			);
		return $data->fetch(); 
	}

	public function getNombreTicket($idticket)
	{
		$data=$this->_db->query(
			"select t.idticket,t.nombre'name',u.nombre'support' from ticket as t inner join  usuario as u on t.idUsuario_support=u.idUsuario where t.idticket=".$idticket
		);
		return $data->fetch();
	}


	/*visualiza el tiempo que le queda mirando hacia atras*/
	public function tiempoRestanteTicket($id,$support){
		$data=$this->_db->prepare(
			"select if(IFNULL(sum(tiempo-(time_to_sec(now())-time_to_sec(fecha))),0)<0,0,IFNULL(sum(tiempo-(time_to_sec(now())-time_to_sec(fecha))),0))'segundos'
			 from ticket where idticket<?
			  and idestado_ticket!=3 and idusuario_support=?
			 "
			);
		$data->execute(array($id,$support));
		return $data->fetch();
	}

	/* tickets iniciados asignados al soporte */
	public function getTicketsbySupportIniciado($idSupport){
		$data=$this->_db->prepare(
				"select idticket,nombre,mensaje from ticket where idestado_ticket=1 and idusuario_support=?"
			);
		$data->execute(array($idSupport));

		return $data->fetchAll();
	}

	/* tickets en progreso asignados al soporte*/
	public function getTicketsbySupportProgreso($idSupport){
		$data=$this->_db->prepare(
				"select idticket,nombre,mensaje from ticket where idestado_ticket=2 and idusuario_support=?"
			);
		$data->execute(array($idSupport));

		return $data->fetchAll();
	}

	/* tickets iniciados asignados a otro diferente del soporte*/
	public function getTicketsbySupportGlobales($idSupport){
		$data=$this->_db->prepare(
				"select idusuario_support,idticket,nombre,mensaje from ticket where idusuario_support!=? and idestado_ticket=1"
			);
		$data->execute(array($idSupport));

		return $data->fetchAll();
	}

	/* insert,update,delete*/
	public function agregarIniciado($idsistema,$nombre,$mensaje,$idUsuarioSupport){
		$this->_db->prepare(
			"insert into ticket(idticket,idsistemas,nombre,mensaje,idUsuario_support,idestado_ticket,fecha,tiempo)values(
				LAST_INSERT_ID(),
				:idsistema,
				:nombre,
				:mensaje,
				:idUsuarioSupport,
				1,
				now(),
				:tiempo)"
			)->execute(array(
				':idsistema' =>$idsistema ,
				':nombre'=>$nombre,
				':mensaje'=>$mensaje,
				':idUsuarioSupport'=>$idUsuarioSupport,
				':tiempo' => 60*15 //60 segundos por 15 minutos
				));
		$id=$this->_db->query("SELECT LAST_INSERT_ID()");
		return $id->fetch();
	}

	public function updateState($id,$state){
		$this->_db->prepare(
			"update ticket set idestado_ticket=:state where idticket=:id"
			)->execute(array(
				':state' => $state,
				':id' => $id
			));
	}

	public function updateChange($id,$idsupport,$state){
		$this->_db->prepare(
			"update ticket set idestado_ticket=:state,idusuario_support=:support where idestado_ticket=1 and  idticket=:id"
			)->execute(array(
				':state' => $state,
				':id' => $id,
				':support' =>$idsupport
			));
	}


}
?>