<?php
	session_destroy();
	session_start();
	$_SESSION['username']="";
	$_SESSION['id']="";
	header("location:login.php");
?>