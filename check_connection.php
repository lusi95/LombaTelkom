<?php
	$servername = "localhost";
	$username = "root";
	$password = "pisang";
	$dbname = "lomba";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error) {
		die("Connection aborted : ".$conn->connect_error);
	}
?>