<?php
	// echo"<pre>";
	// print_r($_POST);
	// echo"</pre>";
				require_once'../model/db1connect.php';

				//pass validation
				$reg_br="/^[]a-zA-Z][a-zA-Z]+[a-zA-Z]$/";
				if(preg_match($reg_br, $_POST['br_name']!=1))

	
				{
					echo"Invalid brand";
				}
				else
				{
					// echo"ok";
					$brdata =$_POST['br_name'];

					$str="insert into brand (br_name) values ('$brdata')";

					$obj->conn->query($str) or die($obj->$conn->error);
					echo "record added in brand"; 
				}
			

?>
