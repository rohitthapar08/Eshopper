<?php
session_start();
if(isset($_SESSION['pname'])):
	header("location:index.php");
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
						<h2>Login to your account</h2>
						<form id="login_form">
							<input placeholder="Email address" type="text" name="log_email">
							<input placeholder="Password" type="password" name="log_pass">

							<button type="button" class ="btn btn-default login_btn">Login</button>
						</form>
						<div class="login_err">err</div>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form id="register_form">
							<input placeholder="Name" type="text" name="log_name">
							<input placeholder="Mobile Number" type="text" name="log_mobile">

							<input placeholder="Email Address" type="email" name="log_email">
							<input placeholder="Password" type="password" name="log_pass">
							<input placeholder="Confirm Password" type="password" name="log_cpass">

							<button type="button" class="btn btn-default register_btn">Signup</button>
						</form>
						<div class="err_register">test</div>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section>
<?php
	require_once'footer.php';
?>