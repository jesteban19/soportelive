<?php

/*
	Framework NeoApp v.000.1
	esteban.programador@gmail.com
	Model.php
*/

class Model
{
	private $_registry;
	protected $_db;
	
	public function __construct(){
		$this->_registry=Registry::getInstancia();
		$this->_db=$this->_registry->_db;
	}
}
?>