<?php
	// echo"<pre>";
	// print_r($_POST);
	// echo"</pre>";
				require_once'../model/db1connect.php';
				// print_r($_POST);
				if(isset($_SESSION['pid']))
				{
						// print_r($_POST);
					$p_id=$_POST['productid'];
					// echo $p_id;
					$u_id=$_SESSION['pid'];
					// echo $uid;
					$sql="select count(*) as cnt from wishlist where wi_pid='$p_id' and wi_uid='$u_id' ";
										 // print_r($sql);
					$result = $obj->conn->query($sql) or die($obj->conn->error);
					$ans =$result->fetch_object();
					 //print_r($ans);
					// exit;
					if($ans->cnt==1)
					{
						echo "product exists in wishlist";

					}
					else
					{
						$sql="insert into wishlist(wi_uid, wi_pid) values('$u_id','$p_id')";

					$obj->conn->query($sql) or die($obj->conn->error);

					echo "record added in wishlist";

					}
				}
				else

				{
					echo"plz do login";
				}

?>
