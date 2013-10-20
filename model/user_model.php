<?php
	class User{	
		function __get($property){
			if($property == "name"){
				return $this->name;
			}
			if($property == "sex"){
				return $this->sex;
			}
			if($property == "name"){
				return $this->sex;
			}			
		}
		
		function __set($property,$value){
			if($property == "name"){
				 $this->name = $value;
				 return;
			}	
			if($property == "sex"){
				 $this->sex = $value;
				 return;
			}		
			if($property == "age"){
				 $this->age = $value;
				 return;
			}
		}
	}
?>