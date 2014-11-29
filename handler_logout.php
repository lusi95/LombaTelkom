<?php
 session_start();
 session_unset(); 
 session_destroy();
 setcookie("username", "", 1);
 header('Location: index.php');
?>