<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Reseller System Home</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
	<div class="container">
		<div class="clearfix">
			&nbsp;
		</div>
		<div class="row ">
			<div class="col-md-4 col-md-offset-4">
				<img src="http://localhost/reseller/asset/login/Login_v10/images/logo4.png" alt="" class="img-responsive">
			</div>
		</div>
		<div class="clearfix">
			&nbsp;
		</div>
		<?= msg(); ?>
			<div class="row">
				<div class="col-md-4 col-md-offset-1">
					<a href="<?= site_url('distro'); ?>">
						<img src="http://localhost/reseller/asset/login/Login_v10/images/logo3.png" alt="" class="img-responsive img-thumbnail img-rounded">
					</a>
					<h3><p class="text-center">
						<strong><u><span style="color : #252ba4;">Distr</span></u>ibut<u><span style="color : #252ba4;">o</span></u>r</strong>
					</p></h3><br />
					<a href="<?= site_url('distro'); ?>" type="button" class="btn btn-primary btn-rounded btn-lg btn-block">
						LOGIN
					</a>
				</div>
				<div class="col-md-4 col-md-offset-2">
					<a href="<?= site_url('shopper'); ?>">
						<img src="http://localhost/reseller/asset/login/Login_v10/images/logo2.png" alt="" class="img-responsive img-thumbnail img-rounded">
					</a>
					<h3><p class="text-center">
						<strong><u><span style="color : #6a4417;">Sh</span>op</u>p<span style="color : #6a4417;">er</span></strong>
					</p></h3><br />
					<a href="<?= site_url('shopper'); ?>" type="button" class="btn btn-primary btn-rounded btn-lg btn-block">
						LOGIN
					</a>
				</div>
			</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("div.alert").delay(300).slideDown(400).delay(3000).slideUp(400);
		});
	</script>
</body>

</html>
