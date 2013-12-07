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

	
}
?>