<?php

/*
	Framework NeoApp v.000.1
	esteban.programador@gmail.com
	Autoload.php
*/

/* autocarga de clases */
function autoloadCore($class){
	if(file_exists(APP_PATH.ucfirst($class).'.php')){
		include APP_PATH.ucfirst($class).'.php';
	}
}
function autoloadLibs($class){
	if(file_exists(ROOT.'libs'.DS.'class.'.strtolower($class).'.php')){
		include ROOT.'libs'.DS.'class.'.strtolower($class).'.php';
	}
}

//registra la funcion de autoload por que la funcion __autoload ya es obsoleta
spl_autoload_register('autoloadCore');
spl_autoload_register('autoloadLibs');



?>