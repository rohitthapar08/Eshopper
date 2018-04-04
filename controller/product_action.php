<?php

	require_once'../model/db1connect.php';
 echo"<pre>";
 print_r($_POST);
  echo"</pre>";

   echo"<pre>";
 print_r($_FILES);
  echo"</pre>";


  	$reg_name="/^[a-zA-Z0-9][a-zA-Z0-9_\-\'\"]+[a-zA-Z0-9]$/";
  	$result_name=preg_match($reg_name,$_POST['p_name']);

  	if($result_name!=1)
  	{
  		echo "Invalid product name";
  	}
  	else if(!is_numeric($_POST['p_mrp']))
	{
		echo"invalid mrp";
	}
	else if(empty($_POST['p_brid']))
	{
		echo"invalid brand";
	}
	else if(empty($_POST['p_caid']))
	{
		echo"invalid category";
	}
	else if(empty($_FILES['p_image']['name']))
	{
		echo"please select image";
	}
	elseif ($_FILES['p_image']['type']!="image/jpeg" && $_FILES['p_image']['type']!="image/png" && $_FILES['p_image']['type']!="image/gif") 
	{
		echo"please select proper image";
	}
	elseif ($_FILES['p_image']['size']>1024*1024*2) 
	{
		echo"filesize large";
	}
	elseif (strlen($_POST['p_desc'])>5000 || strlen($_POST['p_desc'])<10) 
	{
	echo "invalid description";
	}
	else
	{
		$err=0;
		if(!empty($_POST['p_dis']))
		{
			if(ctype_digit($_POST['p_dis']) && $_POST['p_dis']>0 && $_POST['p_dis']<100)
			{
				$err=0;
			}
			else
			{
				$err=1;
			}
		}
		if($err==1)
		{
			echo"invalid discount";
		}
		else
		{
			if(!is_dir("../assets/product/"))
			{
				mkdir("../assets/product/");
			}
			$name="../assets/product/".time().str_replace(" ","_",$_FILES['p_image']['name']);

			$result=move_uploaded_file($_FILES['p_image']['tmp_name'],$name );
			if($result)
			{
				$pro_name=mysqli_real_escape_string($obj->conn,$_POST['p_name']);
				$desc=mysqli_real_escape_string($obj->conn,$_POST['p_desc']);

				$mrp=$_POST['p_mrp'];
				if(empty($_POST['p_dis']))
				{
					$discount=0;
				}
				else
				{
					$discount=$_POST['p_dis'];
				}

				$brid=$_POST['p_brid'];
				$caid=$_POST['p_caid'];

				$sql="insert into product(p_name,p_mrp,p_dis,p_caid,p_desc,p_brid,p_imgpath) values('$pro_name','$mrp','$discount','$caid','$desc',$brid,'$name')";
				$obj->conn->query($sql) or die($obj->conn->error);
				echo "record added";
			}
			else
			{
				echo"error in file upload";
			}



			}
		}

	
?>