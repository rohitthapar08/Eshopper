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
						<h2>Change Password</h2>
						<form id="pa_form">
							<input placeholder="Current Password" type="text" name="log_cpass">
							<input placeholder="New Password" type="text" name="log_npass">
							<input placeholder="Confirm password" type="text" name="log_cnpass">
							

							<button type="button" class ="btn btn-default pa_btn">Change Password</button>
						</form>
						<div class="err_pa">err</div>
					</div><!--/login form-->
				</div>
			
			</div>
		</div>
	</section>
<?php
	require_once'footer.php';
?>