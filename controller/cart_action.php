<?php

	// print_r($_POST);
	$pid=$_POST['productid'];
	// echo $pid;
	// $_COOKIE['product']

	if(isset($_COOKIE['product']))
	{

		$ans=strpos($_COOKIE['product'],$pid);
		if($ans===FALSE)
		{
			$finalpid=$_COOKIE['product'].",".$pid;
			$msg="record added in cookie";

		}
		else
		{
			$finalpid=$_COOKIE['product'];
			$msg="record exists in cookie";
		}
		setcookie("product",$finalpid,time()+3600,"/");

	}
	else
	{
		// echo "first";
		$finalpid=$pid;
		setcookie("product",$finalpid,time()+3600,"/");
		$msg="record added in cookie";

	}
	echo $msg;
	// echo $finalpid;

?>