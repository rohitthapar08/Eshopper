<?php
session_start();
if(!isset($_SESSION['pname'])):
	header("location:logout.php");
endif;
?>
<?php
	require_once'header.php';
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Add product</h2>
						<form id="pro_form">
							<input placeholder="Nike black jeans for men size 42" type="text" name="p_name">
							<input placeholder="2500.70" type="text" name="p_mrp">
							<input placeholder="20 in %" type="text" name="p_dis">
							<select name="p_brid">
							<option value="">please select brand</option>
							<?php
							$sql="select br_id,br_name from brand order by br_name asc";
							$result= $obj->conn->query($sql) or die($obj->conn->error);
							if($result->num_rows>0):
								while($ans=$result->fetch_object()):

							?>
							<option value="<?php echo $ans->br_id;?>"><?php echo $ans->br_name;?></option>
							<?php
							endwhile;
							endif;
							?>
							</select>
							<br/><br/>


							<select name="p_caid">
							<option value="">please select category</option>
							<?php
							$sql="select ca_id,ca_name from category order by ca_name asc";
							$result= $obj->conn->query($sql) or die($obj->conn->error);
							if($result->num_rows>0):
								while($ans=$result->fetch_object()):

							?>
							<option value="<?php echo $ans->ca_id;?>"><?php echo $ans->ca_name;?></option>
							<?php
							endwhile;
							endif;
							?>
							</select>
							<br/><br/>


							<input type="file" name="p_image"/>

							<textarea name="p_desc" placeholder="about product"></textarea>
							

							<button type="button" class ="btn btn-default pro_btn">Add product</button>
						</form>
						<div class="pro_err">err</div>
					</div><!--/login form-->
				</div>
			
			</div>
		</div>
	</section>
<?php
	require_once'footer.php';
?>