<?php

	session_start();
	session_regenerate_id(true);

	unset($_SESSION['pname']);
	unset($_SESSION['pid']);
	

	session_destroy();

	header("location:login.php");

	
?>