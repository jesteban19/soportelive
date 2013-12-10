<?php


/* Parametros de Url y Router */
define('URL_INDEX', 'index.php/'); 		//dejar vacio  si usas URL_AMIGABLE || index.php/
define('SITE_URL','http://chat.mastabeats.com/'); //tu web http://tusitio.com/path/ para los js,css,img
define('BASE_URL',SITE_URL.URL_INDEX); //sirve para los controladores,soporta si no tienes .htaccess
define('DEFAULT_CONTROLLER','index'); //controlador por defecto Index
define('DEFAULT_LAYOUT', 'bootstrap_flattybs3'); //template por defecto ,bootstrap,default,etc. |default - bootstrap v.3.00|
define('URL_AMIGABLE',false); 		//activar si tienes habilitado el mod_rewrite


/* Parametros de Aplicacion */

define('APP_NAME', 'Framework CodeNeo V.001.1'); //nombre de tu aplicacion
define('APP_SLOGAN', 'Framework App Neo'); //nombre de slogan de la web
define('APP_COMPANY', 'www.neoapp.com'); //nombre de la empresa
define('SESSION_TIME', 0); //tiempo limite de una session de usuario <bool Session:acceso($level)> | 0 = no expira 
define('HASH_KEY', '529b6ccf595d9'); //llave para la clave encritada en "sha1" -> default = 529b6ccf595d9
/* Parametros de Base de datos */ 

define('DB_HOST','204.93.172.30');
define('DB_USER','neomaster');
define('DB_PASS','peru2013');
define('DB_NAME','zeususer_soportelive');
define('DB_CHAR','utf8');
define('DB_ACTIVE',true);		//si se esta usando la database | default off=false | usar=true




?>