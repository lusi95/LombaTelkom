<?php
	session_start();

	if(!isset($_SESSION['id'])){
		include "main_homeview.php";
	}else {
		include "post.php";
	}
?>