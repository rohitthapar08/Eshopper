<?php

	$pid=$_POST['productid'];
		// echo $pid;

		$cookiedata=$_COOKIE['product'];
		// echo $cookiedata;

		$ans=explode(",",$cookiedata);
		// print_r($ans);

		$pos=array_search($pid, $ans);
		// echo $pos;

		unset($ans[$pos]);
		// print_r($ans);

		$newdata=implode(",", $ans);
		// echo $newdata;

		setcookie("product",$newdata,time()+3600,"/");

	
?>