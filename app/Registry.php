<?php

/*
	Framework NeoApp v.000.1
	esteban.programador@gmail.com
	Registry.php
*/

class Registry
{
	private static $_instancia;
	private $_data;

	//se asegura que no se pueda instancia la clase
	private function __construct(){}
	

	//singleton
	public static function getInstancia(){
		if(!self::$_instancia instanceof self){
			self::$_instancia=new Registry();
		}

		return self::$_instancia;
	}

	public function __set($_name,$value){
		$this->_data[$_name]=$value;
	}

	public function __get($name){
		if(isset($this->_data[$name])){
			return $this->_data[$name];
		}
		return false;
	}
}


?>