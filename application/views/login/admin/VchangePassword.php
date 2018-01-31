
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="post" id="form1" action="<?= site_url('forgot');?>">
					<span class="login100-form-title p-b-51">
						<img src="<?php echo base_url();?>asset/login/Login_v10/images/logo1.png" class="img-responsive center-block" alt="Nasty" style=width="250" height="150">
						Change Password Ad<u><span style="color : #a4252d;">min</span></u>
					</span>
					<?= msg(); ?>
					<!-- alert-validate -->
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password un-match">
						<input class="input100" type="password" name="pass" id="pass1" placeholder="New Password" required>
						<span class="focus-input100"></span>
					</div>
					<input type="hidden" name="key"  value="<?= $this->mf->en('reset'); ?>">
					<input type="hidden" name="fp_id" value="<?= $this->mf->en($user->fp_id); ?>">
					<div class="wrap-input100 validate-input m-b-16" id="passv" data-validate = "Password not match">
						<input class="input100" type="password" id="pass2" placeholder="Re-Password" required>
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" >
							Reset Password
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#form1').submit(function(event) {
				var pass1 = $('#pass1').val();
				var pass2 = $('#pass2').val();
				if (pass1 != pass2) {
					$('#passv').addClass('alert-validate');
					bootbox.alert('Password Not match');
					event.preventDefault();
				}
			});
		});
	</script>
