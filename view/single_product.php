

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
				<h2> Single product page</h2>
				<?php
				$pid=$_GET['pid'];
				// echo $pid;
				$sql="select p_id,p_name,p_mrp,round((p_mrp)-(p_mrp*p_dis/100)) as discount,p_imgpath,ca_name,br_name,p_desc from product,brand,category where p_id='$pid' and br_id=p_brid and p_caid=ca_id";

				$result=$obj->conn->query($sql) or die($obj->conn->error);
				// print_r($result);
				if($result->num_rows>0):
					$ans=$result->fetch_object();
				// echo"<pre>";
				// print_r($ans);
				// echo"<pre>";
				if(is_object($ans)):
				?>
				<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo $ans->p_imgpath;?>" alt="">
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item active">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="">
								<h2><?php echo $ans->p_mrp;?></h2>
								
								<span>
									<span><del><?php echo $ans->p_mrp;?>
									</del></span>
									<span><?php echo $ans->p_mrp;?>
									</span>



									<button type="button" for="<?php echo $ans->p_id;?>"class="btn btn-fefault cart cartdata">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>

								
								<p><b>Category:</b><?php echo $ans->ca_name;?></p>
								<p><b>Brand:</b> <?php echo $ans->br_name;?></p>
								<p>
									<?php echo $ans->p_desc;?>
								</p>
								
							</div><!--/product-information-->
						</div>
					</div>
				<?php




				endif;
				endif;
				?>
				</div>
			</div>
		</div>
	</section>
	
	<?php
		require_once'footer.php';
	?>