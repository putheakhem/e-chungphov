<?php
	$hostname		= 'localhost';
	$username		= 'root';
	$password 		= 'icydemon';
	$dbname			= 'e_chongphov';
	$con = new mysqli($hostname, $username, $password, $dbname);

	$con->set_charset('utf8');
?>