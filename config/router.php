<?php	
	session_start();
	include_once("../path_config.php");		
	$url = $_SERVER['REQUEST_URI'];
	$url_params = explode("/",$url);
    $param_count = count($url_params);	
	
	function g_error_die($err,$url){
		$_SESSION['err'] = $err;
		$_SESSION['url'] = $url;
		header("Location:".TM_PATH."config/error.php");
		die();
		
	}	
	switch((int)$param_count){
		case 0 : {			
			g_error_die("δ֪����0��",$url);//Ӧ�ò��ᵽ������
			break;
		}
		case 1 : {
			g_error_die("δ֪����1��",$url);//Ӧ�ò��ᵽ������
			break;
		}
		case 2 : {
			g_error_die("δ֪���ӣ�",$url);
			break;
		}
		case 3 : {
			$model = $url_params[2];			
			$act = "show";
			$param = "";
			break;
		}
		case 4 : {
			$model = $url_params[2];
			$act = $url_params[3];
			$param = "";
			break;
		}
		case 5 : {
			$model = $url_params[2];
			$act = $url_params[3];
			$param =  $url_params[4];
			break;
		}
		default:{
			g_error_die("���������",$url);			
		}	
	}
	if($model ==  "action"){
		g_error_die("���������",$url);	
	}
	include(TM_ACTION . "{$model}/{$model}_act.php");
?>	