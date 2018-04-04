<?php

	require_once'../model/db1connect.php';
	// echo"<pre>";
	// print_r($_POST);
	// echo"</pre>";


				//pass validation
				$reg_ca="/^[]a-zA-Z][a-zA-Z]+[a-zA-Z]$/";
				if(preg_match($reg_ca, $_POST['ca_name']!=1))

	
				{
					echo"Invalid category";
				}
				else
				{
					// echo"ok";
					$brdata =mysqli_real_escape_string($obj->conn,$_POST['ca_name']);
					$str ="insert into category(ca_name) values ('$brdata')";
					
					//echo $str;
					// insert into category (ca_name) values('mens wear')

					$obj->conn->query($str) or die($obj->conn->error);
					echo "record added in category";

				}
			

?>
