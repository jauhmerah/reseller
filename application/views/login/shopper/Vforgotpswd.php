<script>
		var myEvent = window.attachEvent || window.addEventListener;
		var chkevent = window.attachEvent ? 'onbeforeunload' : 'beforeunload'; /// make IE7, IE8 compatable

		myEvent(chkevent, function(e) { // For >=IE7, Chrome, Firefox
			var confirmationMessage = ' ';  // a space
			(e || window.event).returnValue = confirmationMessage;
			return confirmationMessage;
		});
</script>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="post">
					<span class="login100-form-title p-b-51">
						<img src="<?php echo base_url();?>asset/login/Login_v10/images/logo1.png" class="img-responsive center-block" alt="Nasty" style=width="250" height="150">
						Ad<u><span style="color : #a4252d;">min</span></u> Reset Password
					</span>
					<?php $msg = msg();
					if ($msg == '') { ?>
						<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
							<input class="input100" type="email" name="email" placeholder="Email">
							<span class="focus-input100"></span>
						</div>
						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn">
								Reset Password
							</button>
						</div>
					<?php }else{
						echo $msg;
					}
					?>
				</form>
			</div>
		</div>
	</div>	
