<?php
	session_start();

	if(!isset($_SESSION['id'])){
		include "indeks.html";
	}else {
		include "post.html";
	}
?>