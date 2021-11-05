<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="generator" content="">
	<link href="<?= base_url(''); ?>assets_user/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= base_url(''); ?>assets_user/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
	<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-2kPcMiP4WxjEppBL"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<!-- HEADER =============================-->

<body>
	<header class="item header margin-top-0">
		<div class="wrapper">
			<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
							<i class="fa fa-bars"></i>
							<span class="sr-only">Toggle navigation</span>
						</button>
						<a href="index.html" class="navbar-brand brand"> Tukang Pintar </a>
					</div>
					<div id="navbar-collapse-02" class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="propClone"><a href="<?php echo base_url('home'); ?>">Home</a></li>
							<li class="propClone"><a href="<?php echo base_url('user/shop'); ?>">Services</a></li>
							<li class="propClone"><a href="<?php echo base_url('galeri'); ?>">Gallery</a></li>
							<li class="propClone"><a href="<?php echo base_url('kontak'); ?>">Contact</a></li>
							<li class="propClone"><a href="<?php echo base_url('user/keranjang'); ?>">Cart</a></li>

							<?php
							if ($this->session->userdata('username')) {
							?>
								<li class="propClone"><a href="<?php echo base_url('admin/auth/logout'); ?>">Log Out</a></li>

							<?php

							} else {
							?>
								<li class="propClone"><a href="<?php echo base_url('admin/auth'); ?>">Log In</a></li>

							<?php
							}
							?>
						</ul>
					</div>
				</div>
			</nav>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="text-homeimage">
							<div class="maintext-image" data-scrollreveal="enter top over 1.5s after 0.1s">
								Your Trusted Building Solutions
							</div>
							<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.3s">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>