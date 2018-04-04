<?php
	// echo"<pre>";
	// print_r($_POST);
	// echo"</pre>";
	require_once'../model/db1connect.php';

//////name validation
	$reg_name="/^[a-zA-z][a-zA-z]+[a-zA-z]$/";
	$res_name=preg_match($reg_name, $_POST['log_name']);


	//echo $res_name;

	if($res_name!=1)
	{
		echo"Invalid name";
	}
	else
	{
		//mobile validation
		$reg_mob="/^[0-9]{10}$/";
		$res_mob=preg_match($reg_mob, $_POST['log_mobile']);

		if($res_mob!=1)
		{
			echo "Invalid mobile";
		}
		else
		{
			//email validation
			$reg_email="/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/";

			$res_email=preg_match($reg_email, $_POST['log_email']);

			if($res_email!=1)
			{
				echo "invalid email id";
			}
			else
			{
				//pass validation
				$reg_pass="/^[]a-zA-z0-9]{4,12}$/";
				$res_pass=preg_match($reg_pass, $_POST['log_pass']);

				if($res_pass!=1)
				{
					echo"Invalid password";
				}
				elseif($_POST['log_pass']!=$_POST['log_cpass'])
				{
					echo"password mismatch";
				}
				else{
					// echo"ok";
					$name=$_POST['log_name'];
					$mobile=$_POST['log_mobile'];

					$email=$_POST['log_email'];
					$pass= sha1($_POST['log_pass']);


					$str="select count(*) from login where log_email='$email'";
					$result=$obj->conn->query($str) or die($obj->conn->error);
					$ans=$result->fetch_array(MYSQL_NUM);

					if($ans[0]==1)
					{
						echo "email id in use";
					}
					else
					{




					$str="insert into login (login_name,log_mobile,log_email,log_pass) values('$name','$mobile','$email','$pass')";

					$obj->conn->query($str) or die($obj->conn->error);
					echo "record added";
					}
				}
			}

		}

	}




?>