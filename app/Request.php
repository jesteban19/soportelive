<?php

/*
	Framework NeoApp v.000.1
	esteban.programador@gmail.com
	Request.php
*/
class Request{
	private $_controlador;
	private $_metodo;
	private $_argumentos;

	public function __construct()
	{
		if(URL_AMIGABLE) //cuando tenemos posibilidades de usar el .htaccess usamos url amigables
		{
			if(isset($_GET['url'])){ //la variable 'url' puede cambiar en el .htaccess
				$url=filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);
				$url=explode('/', $url);
				$url=array_filter($url);
				$this->_controlador=strtolower(array_shift($url));
				$this->_metodo=strtolower(array_shift($url));
				$this->_argumentos=$url;
			}
		}else{ //cuando no podemos activar el .htaccess usamos este metodo.
			$url=$_SERVER['PATH_INFO'];
			//eliminar el /index.php
			$url=preg_replace('/^(\/)/','',$url);
			$url=explode('/',$url);
			$url=array_filter($url);
			$this->_controlador=strtolower(array_shift($url));
			$this->_metodo=strtolower(array_shift($url));
			$this->_argumentos=$url;
		}

		if(!$this->_controlador){
			$this->_controlador=DEFAULT_CONTROLLER;
		}

		if(!$this->_metodo){
			$this->_metodo='index';
		}

		if(!isset($this->_argumentos)){
			$this->_argumentos=array();
		}
	}

	public function getControlador(){
		return $this->_controlador;
	}

	public function getMetodo(){
		return $this->_metodo;
	}

	public function getArgs(){
		return $this->_argumentos;
	}


}
?>