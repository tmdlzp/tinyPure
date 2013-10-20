<?php		
	function __autoload($class_name){
		include_once(TM_MODEL . $class_name . "_model.php");	
	}	
	
	$action = array(
		'user' => new User()	
	);
	function get_action($index_str){
		return $GLOBALS['action'][$index_str];
	};

	class CommonAction{
		function __construct($model_name,$php_temp){
			$this->view = TM_VIEW . $model_name . "/";
			$this->php_temp = $php_temp;
		}
		function select_php_temp($type){
			$this->php_temp = "common_" . $type . ".php";
		}
		function gotoView($view_name){
			$content = $this->view . $view_name. "." . CARRY_EXT;		
			include_once TM_VIEW . "common/common_".$this->php_temp.".php";
		}
		function get_param($index){
			if(array_key_exists($index,$_GET)){
				return $_GET[$index];
			}
			if(array_key_exists($index,$_POST)){
				return $_POST[$index];
			}
			return "";		
		}
	}
?>