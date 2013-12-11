<?php


/* Parametros de Url y Router */
define('URL_INDEX', 'index.php/'); 		//dejar vacio  si usas URL_AMIGABLE || index.php/
define('SITE_URL','http://localhost/helpdesk/'); //tu web http://tusitio.com/path/ para los js,css,img
define('BASE_URL',SITE_URL.URL_INDEX); //sirve para los controladores,soporta si no tienes .htaccess
define('DEFAULT_CONTROLLER','index'); //controlador por defecto Index
define('DEFAULT_LAYOUT', 'bootstrap_flattybs3'); //template por defecto ,bootstrap,default,etc. |default - bootstrap v.3.00|
define('URL_AMIGABLE',false); 		//activar si tienes habilitado el mod_rewrite
//define('SERVER_NODE','https://josephesteban-c9-josephesteban.c9.io/');
define('SERVER_NODE','http://localhost:3000/');
/* Parametros de Url y Router */
/*define('URL_INDEX', 'index.php/'); 		//dejar vacio  si usas URL_AMIGABLE || index.php/
define('SITE_URL','http://soportelive.mastabeats.com/'); //tu web http://tusitio.com/path/ para los js,css,img
define('BASE_URL',SITE_URL.URL_INDEX); //sirve para los controladores,soporta si no tienes .htaccess
define('DEFAULT_CONTROLLER','index'); //controlador por defecto Index
define('DEFAULT_LAYOUT', 'bootstrap_flattybs3'); //template por defecto ,bootstrap,default,etc. |default - bootstrap v.3.00|
define('URL_AMIGABLE',false); 		//activar si tienes habilitado el mod_rewrite
*/
/* Parametros de Aplicacion */

define('APP_NAME', 'Soporte Live V0.001 | Zeusintranet'); //nombre de tu aplicacion
define('APP_SLOGAN', 'Framework App Neo'); //nombre de slogan de la web
define('APP_COMPANY', 'www.Zeusintranet.com'); //nombre de la empresa
define('SESSION_TIME', 0); //tiempo limite de una session de usuario <bool Session:acceso($level)> | 0 = no expira 
define('HASH_KEY', '529b6ccf595d9'); //llave para la clave encritada en "sha1" -> default = 529b6ccf595d9
/* Parametros de Base de datos */ 


define('DB_ACTIVE',true);		//si se esta usando la database | default off=false | usar=true
define('DB_HOST','localhost');  //host del server database
define('DB_USER','root');		//usuario del server database
define('DB_PASS','123');		//password de la database
define('DB_NAME','mydb');		//nombre de la database
define('DB_CHAR','utf8');		//formato de registro database

/*define('DB_HOST','204.93.172.30');
define('DB_USER','neomaster');
define('DB_PASS','peru2013');
define('DB_NAME','zeususer_soportelive');
define('DB_CHAR','utf8');
define('DB_ACTIVE',true);		//si se esta usando la database | default off=false | usar=true
*/
?>