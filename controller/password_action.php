<?php
	// echo"<pre>";
	// print_r($_POST);
	// echo"</pre>";
	require_once'../model/db1connect.php';


				//pass validation
				$reg_pass="/^[]a-zA-Z][a-zA-Z]+[a-zA-Z]$/";
				$res_pass= preg_match($reg_pass, $_POST['log_cpass']);

				if($res_pass!=1)
				{
					echo"Invalid current password";
				}
				else if(preg_match($reg_pass, $_POST['log_npass'])!=1)
				{
					echo"Invalid new password";
				}
					else if($_POST['log_npass']!=$_POST['log_cnpass'])
				{
					echo"confirm new pass mismatch";
				}
					else if($_POST['log_npass']==$_POST['log_cpass'])
				{
					echo"new pass should be diff then curr pass";
				}
				else{
					// echo"ok";
					$cur_pass= sha1($_POST['log_cpass']);
					// echo $cur_pass;
					// print_r($_SESSION);

					$id=$_SESSION['pid'];

					//select log_pass from login where log_id='$id'

					$sql="select log_pass from login where log_id='$id'";
					$result=$obj->conn->query($sql) or die($obj->conn->error);

						// echo"<pre>";
						// print_r($_POST);
						// echo"</pre>";

					$ans=$result->fetch_array(MYSQL_ASSOC);



					if($cur_pass==$ans['log_pass'])
					{
						// echo 1;
						$newpass=sha1($_POST['log_npass']);

						$sql="update login set log_pass='$newpass' where log_id='$id'";

						$obj->conn->query($sql) or die($obj->conn->error);
						echo"password updated";
					}
					else
					{
						echo "Invalid current password";
					}

					
				}
			
			

?>
