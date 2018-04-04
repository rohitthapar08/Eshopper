<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						
				
							<div class="panel panel-default">
							<?php
							$sql= "select ca_id,ca_name from category order by ca_name asc";

							$result =$obj->conn->query($sql) or die($obj->conn->error);

							// echo "<pre>";
							// print_r($result);
							// echo"</pre>";

							if($result->num_rows>0):
								while($ans=$result->fetch_object()):
									// echo "<pre>";
							// print_r($result);
							// echo"</pre>";

							?>




								<div class="panel-heading">
									<h4 class="panel-title">
									<a href="#" for="<?php echo $ans->ca_id;?>" class="category_data">
									<?php
										echo $ans->ca_name;
									?>
									</a>
									</h4>
								</div>
									<?php
									endwhile;
									endif;
									?>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									
									

							<?php
							$sql= "select br_id,br_name from brand order by br_name asc";

							$result =$obj->conn->query($sql) or die($obj->conn->error);

							// echo "<pre>";
							// print_r($result);
							// echo"</pre>";

							if($result->num_rows>0):
								while($ans=$result->fetch_object()):
									// echo "<pre>";
							// print_r($result);
							// echo"</pre>";

							?>
							<li>
									<a href="#" for="<?php echo $ans->br_id;?>" class="brand_data">

							<span class="pull-right">(50)</span>


							<?php echo $ans->br_name;
							?>

							</a></li>
							<?php
							endwhile;
							endif;
							?>



								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="../assets/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>