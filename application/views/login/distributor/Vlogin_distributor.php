
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="post">
					<span class="login100-form-title p-b-51">
						<img src="<?php echo base_url();?>asset/login/Login_v10/images/logo3.png" class="img-responsive center-block" alt="Nasty" style=width="250" height="150">
						Login <u><span style="color : #252ba4;">Distr</span></u>ibut<u><span style="color : #252ba4;">o</span></u>r
					</span>
					<?= msg(); ?>
					<?php
					if ($this->session->userdata('user_id')) {
						$this->session->sess_destroy();
						echo msg('danger' , 'Your session is invalid. Please log in again.');
					}
					?>
					<div class="wrap-input100 validate-input m-b-16 " data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<!-- <div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div> -->

						<div>
							<a href="#" class="txt1">
								Forgot password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" >
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
