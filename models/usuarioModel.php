<?php

class usuarioModel extends Model{
	public function __construct(){
		parent::__construct();
	}

	public function auth($user,$pass){
		/*$data=$this->_db->query(
			"select * from usuario where usuario='".$user."' and password='".$pass."'"
			);*/
		$data=$this->_db->prepare(
			"select * from usuario where usuario=? and password=?"
			);
		$data->execute(array($user,$pass));
		return $data->fetch() ;
	}

	public function activeOff($user,$active){
		$data=$this->_db->prepare(
			"update usuario set active=0 where idusuario=:id"
			);
		$data->execute(array(
			':id' => $user
			));

	}

	public function activeOn($user,$active){
		$data=$this->_db->prepare(
			"update usuario set active=1 where idusuario=:id"
			);
		$data->execute(array(
			':id' => $user
			));

	}

}


?>