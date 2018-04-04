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
						<h2>Add category</h2>
						<form id="ca_form">
							<input placeholder="Mens wear" type="text" name="ca_name">
							

							<button type="button" class ="btn btn-default ca_btn">Add category</button>
						</form>
						<div class="err_ca">err</div>
					</div><!--/login form-->
				</div>
			
			</div>
		</div>
	</section>
<?php
	require_once'footer.php';
?>