<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Distributor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo Base_url();?>Assets/Login_v10/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Base_url();?>Assets/Login_v10/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Base_url();?>Assets/Login_v10/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Base_url();?>Assets/Login_v10/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Base_url();?>Assets/Login_v10/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Base_url();?>Assets/Login_v10/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Base_url();?>Assets/Login_v10/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Base_url();?>Assets/Login_v10/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Base_url();?>Assets/Login_v10/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Base_url();?>Assets/Login_v10/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Base_url();?>Assets/Login_v10/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w">
					<div class="col-md-3 col-md-offset-6"><img src="<?php echo Base_url();?>Assets/Login_v10/images/Logo3.png" alt="Nasty" style=width="250" height="150"></div>
					<span class="login100-form-title p-b-51">
						Login Distributor
					</span>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="<?php echo Base_url();?>Assets/Login_v10/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo Base_url();?>Assets/Login_v10/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo Base_url();?>Assets/Login_v10/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo Base_url();?>Assets/Login_v10/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo Base_url();?>Assets/Login_v10/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo Base_url();?>Assets/Login_v10/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo Base_url();?>Assets/Login_v10/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo Base_url();?>Assets/Login_v10/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo Base_url();?>Assets/Login_v10/js/main.js"></script>

</body>
</html>
