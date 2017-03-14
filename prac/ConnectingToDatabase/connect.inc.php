<?php
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '123';
	$mysql_db = 'a_database';
	
	$conn_error = 'Can\'t connect to database';
	
	if(! @mysql_connect($mysql_host, $mysql_user, $mysql_pass) || ! @mysql_select_db($mysql_db)){
		die($conn_error);
	}else{
		echo 'Connected';
	}
	
?>