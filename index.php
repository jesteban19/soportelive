<?php

ini_set('display_errors',1);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'app' . DS);


try{

	require_once APP_PATH.'Config.php';
	require_once APP_PATH.'Autoload.php';
	/*require_once APP_PATH.'Request.php';
	require_once APP_PATH.'Bootstrap.php';
	require_once APP_PATH.'Controller.php';
	require_once APP_PATH.'Model.php';
	require_once APP_PATH.'View.php';	
	require_once APP_PATH.'Database.php';
	require_once APP_PATH.'Session.php';
	require_once APP_PATH.'Hash.php';
	require_once APP_PATH.'Registry.php';
	*/
	Session::init();

	$registry=Registry::getInstancia();
	$registry->_request=new Request();
	$registry->_db=new Database();
	Bootstrap::run($registry->_request);
	
}
Catch(Exception $e){
	echo $e->GetMessage();
}


?>