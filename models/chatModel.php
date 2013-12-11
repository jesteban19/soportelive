<?php

class ChatModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function getMsg($timestamp=false)
	{
		$data=$this->_db->query(
			'SELECT idchat,mensaje,timestap FROM CHAT where timestap>=FROM_UNIXTIME('.$timestamp.');'
		);

		return $data->fetchAll();
	}

	public function getChat($id){
		$data=$this->_db->prepare(
			"select nombre,mensaje,timestap from  chat where idticket=?"
			);
		$data->execute(array($id));
		return $data->fetchAll();
	}

	
}
?>