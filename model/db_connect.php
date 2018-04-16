<?php
class DBLoger {
		private $host="192.168.100.67";
		private $user="mysql";
    	private $pass="mysql"; 
		private $db_name="zavd";

public function DBlog()
	{	$link=mysqli_connect($this->host,$this->user,$this->pass,$this->db_name);
		echo "Connection to BD is succesfull!";
		 if (!$link) 
	{ printf("Error! Подключение к бд невозможно. Код ошибки: %s\n", mysqli_connect_error());
	exit; 	
	}
	
}}

?>