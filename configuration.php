<?php

	//----- Directorio base -----//
	define('APP_BASEDIR', dirname(__FILE__));

	//----- LIBRARYS ----- //
	define('SMARTY_BASEFILE', APP_BASEDIR . '/smarty-3.1.35/Smarty.class.php');

	//----- PATH OBJECTS	
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_KEY' , 'clave');
	define('DB_DATA', 'base_datos');

	require_once APP_BASEDIR . '/models/util/ConexionDB.class.php';
	require_once APP_BASEDIR . '/models/util/Plantilla.class.php';
	
	require_once APP_BASEDIR . '/models/vo/TrabajadorVO.class.php';
	require_once APP_BASEDIR . '/models/dao/TrabajadorDAO.class.php';

	//----- SETTING
	ini_set('default_charset','utf8');
?>