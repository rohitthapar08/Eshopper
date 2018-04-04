<?php
	// echo"<pre>";
	// print_r($_POST);
	// echo"</pre>";
	require_once'../model/db1connect.php';

	$pid=$_POST['productid'];
	// echo $pid;

	$uid=$_SESSION['pid'];
	// echo $uid;

	$sql="delete from wishlist where wi_pid='$pid' and wi_uid='$uid'";
	$obj->conn->query($sql) or die($obj->conn->error);

	echo 1;



?>