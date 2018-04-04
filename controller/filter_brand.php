<?php
	// echo"<pre>";
	// print_r($_POST);
	// echo"</pre>";
				require_once'../model/db1connect.php';

				// print_r($_POST);
				$cid=$_POST['brandid'];
				// echo $cid;

				$sql="select br_name from brand where br_id='$cid'";
				$result=$obj->conn->query($sql) or die($obj->conn->error);
				$ans=$result->fetch_array(MYSQL_NUM);

				echo "<h2>".$ans[0]."</h2> <hr/>";

		$sql="select p_id,p_name,p_mrp,round((p_mrp)-(p_mrp*p_dis/100)) as discount,p_imgpath from product where p_brid='$cid' order by p_id desc";

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
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php
						endwhile;
						endif;
 


?>