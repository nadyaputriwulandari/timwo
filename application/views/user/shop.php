<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
</head>
<body>

<!-- HEADER =============================
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>
			<a href="index.html" class="navbar-brand brand"> SCORILO </a>
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone"><a href="index.html">Home</a></li>
				<li class="propClone"><a href="shop.html">Shop</a></li>
				<li class="propClone"><a href="product.html">Product</a></li>
				<li class="propClone"><a href="checkout.html">Checkout</a></li>
				<li class="propClone"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.1s">
						 Shop
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>
-->
<!-- CONTENT =============================-->
<?php

if ($this->session->userdata('username')) {
	?>
<section class="item content">
<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems">PAKET</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					
					<span class="maxproduct"><img src="<?php echo base_url()?>assets_user/images/silver.png" alt=""></span>
				</div>
				<div class="product-details">
					<a href="<?php echo base_url('user/dekor');?>">
					<h1>Dekorasi</h1>
					</a>
					
				</div>
			</div>
		</div>
		<!-- /.productbox -->
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					
					<span class="maxproduct"><img src="<?php echo base_url()?>assets_user/images/fotografer.jpg" alt=""></span>
				</div>
				<div class="product-details">
					<a href="<?php echo base_url('user/fotografer');?>">
					<h1>Fotografer</h1>
					</a>
					
				</div>
			</div>
		</div>
		<!-- /.productbox -->
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					
					<span class="maxproduct"><img src="<?php echo base_url()?>assets_user/images/diamond.png" alt=""></span>
				</div>
				<div class="product-details">
					<a href="<?php echo base_url('user/mc');?>">
					<h1>MC</h1>
					</a>
					
				</div>
			</div>
		</div>
		<!-- /.productbox -->
	<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					
					<span class="maxproduct"><img src="<?php echo base_url()?>assets_user/images/catering.jpg" alt=""></span>
				</div>
				<div class="product-details">
					<a href="<?php echo base_url('user/catering');?>">
					<h1>Catering</h1>
					</a>
					
				</div>
			</div>
		</div>
		<!-- /.productbox -->
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					
					<span class="maxproduct"><img src="<?php echo base_url()?>assets_user/images/diamond.png" alt=""></span>
				</div>
				<div class="product-details">
					<a href="<?php echo base_url('user/mua');?>">
					<h1>MUA</h1>
					</a>
					
				</div>
			</div>
		</div>
		<!-- /.productbox -->
		
		<!-- /.productbox -->
		<?php

}else{
	?>
	<?= $this->session->flashdata('message'); ?>
	<?php } ?>
	
	</div>
</div>
</div>
</section>

<!-- CALL TO ACTION =============================-->
