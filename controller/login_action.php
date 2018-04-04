<?php


    require_once"../model/db1connect.php";
	// echo"<pre>";
	// print_r($_POST);
	// echo"</pre>";

    //email validation
	$reg_email="/^([a-zA-z0-9][a-zA-z0-9_\.]+[a-zA-z0-9])@([a-zA-z0-9][a-zA-z0-9\-]+[a-zA-z0-9])\.([a-zA-z]{2,})(\.[a-zA-z]{2,})?$/";

			$res_email=preg_match($reg_email, $_POST['log_email']);

			if($res_email!=1)
			{
				echo "invalid email id";
			}
			else{
				//pass validation
				$reg_pass="/^[]a-zA-z0-9]{4,12}$/";
				$res_pass=preg_match($reg_pass, $_POST['log_pass']);

				if($res_pass!=1)
				{
					echo"Invalid password";
				}
				else{
					
					$email =$_POST['log_email'];
					// echo $email;
					$pass =$_POST['log_pass'];
					// echo $pass;

					//select log_pass from login where log_email='$email'

					$sql="select log_pass,login_name,log_id from login where log_email='$email'";

					// echo $sql;

					$result = $obj->conn->query($sql) or die ($obj->conn->error);

					// print_r($result);


					if($result->num_rows==0)
					{
						echo "email id does not exist";
					}
					else
					{
						$ans =$result->fetch_object();

						// print_r($ans);
					}
					if(sha1($pass)==$ans->log_pass)
					{
						$_SESSION['pname']=$ans->login_name;
						$_SESSION['pid']=$ans->log_id;


						//print_r($_SESSION);

						echo 1;

					}
					else{
						echo"password invalid";	
					}


				}
			}

?>
