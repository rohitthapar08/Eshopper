


<?php
	require_once'header.php';
?>

	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php
						require_once'aside.php';
					?>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Wishlist page</h2>


						<?php
						$uid=$_SESSION['pid'];
						// echo $uid;
						$sql="select wi_pid from wishlist where wi_uid='$uid'";

						$result=$obj->conn->query($sql) or die($obj->conn->error);

						// print_r($result);
						if($result->num_rows>0):
							$pid="";
						while($ans=$result->fetch_object()):
							// print_r($ans);
						$pid=$pid . $ans->wi_pid .",";
						endwhile;
						$pid =rtrim($pid,",");
						//echo $pid;
	

				$sql="select p_id,p_name,p_mrp,round((p_mrp)-(p_mrp*p_dis/100)) as discount,p_imgpath from product where p_id in($pid) order by p_id desc";

						$result=$obj->conn->query($sql) or die($obj->conn->error);

						if($result->num_rows>0):
							while($ans=$result->fetch_object()):
						?>


						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">

										<!--change here-->
											<img src="<?php echo $ans->p_imgpath;?>" alt="" />
											<h2><del><?php echo $ans->p_mrp;?></del><?php echo $ans->discount;?></h2>
											<p><?php echo $ans->p_name;?></p>

										<!--change here-->
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
											<h2><del><?php echo $ans->p_mrp;?></del><?php echo $ans->discount;?></h2>
											<p><?php echo $ans->p_name;?></p>
												
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#" class="delete-wishlist" for="<?php echo $ans->p_id;?>"><i class="fa fa-plus-square"></i>delete</a></li>
										
<!-- 
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> -->
									</ul>
								</div>
							</div>
						</div>
						<?php
						endwhile;
						endif;

						endif;

					
						?>
					</div><!--features_items-->
					
			
				</div>
			</div>
		</div>
	</section>
	
	<?php
		require_once'footer.php';
	?>
