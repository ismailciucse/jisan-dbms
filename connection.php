<?php 
	
	//Start Session
	session_start();
	
	//Connection
	define('LOCALHOST', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'dbms');
	$conn = mysqli_connect(LOCALHOST,USERNAME,PASSWORD) or die(mysqli_error());
	$db_select = mysqli_select_db($conn,DATABASE) or die(mysqli_error());
?>