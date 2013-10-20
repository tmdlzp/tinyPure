<?php	
	$filedir = str_replace("\\","/",dirname(__FILE__));

	define('TM_ROOT', $filedir . "/",false);	
	define('TM_SRC',TM_ROOT . "source/");
	define('TM_VIEW',TM_ROOT . "view/carry/");
	define('TM_ACTION',TM_ROOT . "action/");
	define('TM_LOG',TM_ROOT . "log/");
	define('TM_MODEL' ,TM_ROOT . "model/");	
	define('TM_CONFIG' ,TM_ROOT . "config/");	
	
	define('TM_PROJECT_NAME',"/tinyPure/");
	define('TM_PATH',"http://" . $_SERVER['SERVER_NAME'] . TM_PROJECT_NAME );
	define('CARRY_EXT',"pure");
?>