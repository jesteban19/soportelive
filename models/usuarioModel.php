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
}


?>