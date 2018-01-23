<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login <?= title; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url();?>asset/login/Login_v10/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login/Login_v10/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login/Login_v10/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login/Login_v10/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login/Login_v10/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login/Login_v10/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login/Login_v10/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login/Login_v10/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login/Login_v10/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login/Login_v10/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login/Login_v10/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php
	$msg = "";
		if ($this->session->flashdata('success')) {
			$msg .= '<div class="login100-form alert alert-success" style="display : none;"><i class="fa fa-check" aria-hidden="true"></i> Success : '.$this->session->flashdata('success').' </div>';
			// TODO: sambung sini dong
		}if ($this->session->flashdata('warning')) {
			$msg .= '<div class="login100-form alert alert-warning" style="display : none;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Warning : '.$this->session->flashdata('warning').' </div>';
		}if ($this->session->flashdata('info')) {
			?>
			<div class="login100-form alert alert-info" style="display : none;"><i class="fa fa-info" aria-hidden="true"></i> Info : <?= $this->session->flashdata('info'); ?></div>
			<?php
			$msg .= '<div class="login100-form alert alert-success" style="display : none;"><i class="fa fa-check" aria-hidden="true"></i> Success : '.$this->session->flashdata('success').' </div>';
		}if ($this->session->flashdata('default')) {
			?>
			<div class="login100-form alert alert-default" style="display : none;"><i class="fa fa-hashtag" aria-hidden="true"></i> Note : <?= $this->session->flashdata('default'); ?></div>
			<?php
			$msg .= '<div class="login100-form alert alert-success" style="display : none;"><i class="fa fa-check" aria-hidden="true"></i> Success : '.$this->session->flashdata('success').' </div>';
		}if ($this->session->flashdata('primary')) {
			?>
			<div class="login100-form alert alert-primary" style="display : none;"><i class="fa fa-check" aria-hidden="true"></i> Information : <?= $this->session->flashdata('primary'); ?></div>
			<?php
			$msg .= '<div class="login100-form alert alert-success" style="display : none;"><i class="fa fa-check" aria-hidden="true"></i> Success : '.$this->session->flashdata('success').' </div>';
		}if ($this->session->flashdata('danger')) {
			?>
			<div class="login100-form alert alert-danger" style="display : none;"><i class="fa fa-check" aria-hidden="true"></i> Error : <?= $this->session->flashdata('danger'); ?></div>
			<?php
			$msg .= '<div class="login100-form alert alert-success" style="display : none;"><i class="fa fa-check" aria-hidden="true"></i> Success : '.$this->session->flashdata('success').' </div>';
		}
	?>
