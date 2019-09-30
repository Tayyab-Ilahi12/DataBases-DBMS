<?php
	//php code here
	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "bloodbank";

	$con = new MySQLi($server, $user, $pass, $dbname);

	if ($con->connect_error) 
		echo "Error: ".$con->connect_error;
?>