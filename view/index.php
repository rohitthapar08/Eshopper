

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
						<h2 class="title text-center">Featured Items</h2>

						<?php
						$sql="select p_id,p_name,p_mrp,round((p_mrp)-(p_mrp*p_dis/100)) as discount,p_imgpath from product order by p_id desc";

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
											<p><a href="single_product.php?pid=<?php echo $ans->p_id;?>"> <?php echo $ans->p_name;?></p>
												
												<a href="#" for="<?php echo $ans->p_id;?>" class="btn btn-default add-to-cart cartdata"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#" class="add-wishlist" for="<?php echo $ans->p_id;?>"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										
<!-- 
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> -->
									</ul>
								</div>
							</div>
						</div>
						<?php
						endwhile;
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