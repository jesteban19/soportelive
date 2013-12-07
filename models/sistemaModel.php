<?php

class sistemaModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getAll(){
		$all=$this->_db->query(
			'SELECT * FROM sistemas where estado=1'
			);
		return $all->fetchAll();
	}
}
?>