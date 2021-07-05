

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
<section class="item content">
<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems">PAKET DEKORASI</h1>
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
		<?php 
			foreach ($dekorasi as $dkr) :?>
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					<span class="maxproduct"><img src="<?php echo base_url('assets_user/images/'.$dkr->foto) ?>"> </span>
				</div>
				<div class="product-details">
					<a href="#">

					<h1>Paket Dekorasi <?php echo $dkr->paket ?></h1>
					<p><?php echo $dkr->keterangan ?><p>
					</a>
					<span class="price">
					<span class="edd_price">Rp. <?php echo $dkr->harga ?></span>
					<fieldset id="edd_purchase_submit">
					<input type="hidden" name="edd_action" value="purchase">
					<input type="hidden" name="edd-gateway" value="manual">
					<a href = "<?php echo base_url('user/about')?> ">
					<input type="submit" class="edd-submit button" id="edd-purchase-button" name="edd-purchase" value="Booking" ></a>
				</fieldset>
					</span>
					
				</div>
			</div>
		</div>
		<?php endforeach ?>
		
	</div>
</div>
</div>
</section>