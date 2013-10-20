<?php
	include_once(TM_ACTION . "act_common.php");	

	class UserAction extends CommonAction{
		function __construct($model_name,$php_temp){
			parent::__construct($model_name,$php_temp);		
		}	
	}
	if(!isset($userAction)){
	   /*
		* model: user
		* temp : main
		*/
		$userAction = new UserAction("user","main"); 
	
	}
	if($act == "register"){		
		$userAction->gotoView("register");
	}
	

?>