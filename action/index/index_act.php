<?php
	include_once(TM_ACTION . "act_common.php");	

class IndexAction extends CommonAction{	
	function __construct($model_name,$php_temp){
		parent::__construct($model_name,$php_temp);		
	}
}

	if(!isset($indexAction)){
	   /*
		* model: user
		* temp : main
		*/
	$indexAction = new indexAction("index","main"); 

	}
	$indexAction->gotoView("show");	
?>