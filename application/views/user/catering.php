<section class="item content">
	<div class="container toparea">
		<div class="underlined-title">
			<div class="editContent">
				<h1 class="text-center latestitems">PAKET CATERING</h1>
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
			$index = 0;
			foreach ($catering as $key => $dkr) :
				if ($index % 3 == 0) {		?>
					<div class="row">
					<?php } ?>
					<div class="col-md-4">
						<div class="productbox">
							<div class="fadeshop">
								<h1 text align="center">VENDOR : <?php echo $dkr->nama_vendor ?></h1>
								<span class="maxproduct"><img src="<?php echo base_url('assets_user/images/' . $dkr->foto) ?>"> </span>
							</div>
							<div class="product-details">
								<a href="#">

<<<<<<< HEAD
									<h1>Paket Catering <?php echo $dkr->paket ?></h1>
									<p><?php echo $dkr->deskripsi ?><p>
								</a>
								<span class="price">
									<span class="edd_price">Rp. <?php echo $dkr->harga ?></span>
									<fieldset id="edd_purchase_submit">
										<input type="hidden" name="edd_action" value="purchase">
										<input type="hidden" name="edd-gateway" value="manual">
										<a href="<?php echo base_url('user/booking/index/' . $dkr->kode_vendor . '/' . $dkr->id_paket) ?> ">
											<input type="button" class="edd-submit button" id="edd-purchase-button" name="edd-purchase" value="Booking"></a>
									</fieldset>
								</span>
=======
								<h1>Paket Catering <?php echo $dkr->paket ?></h1>
								<p><?php echo $dkr->deskripsi ?><p>
							</a>
							<span class="price">
								<span class="edd_price">Rp <?= number_format($dkr->harga, 0, ",", "."); ?></span>
								<fieldset id="edd_purchase_submit">
									<input type="hidden" name="edd_action" value="purchase">
									<input type="hidden" name="edd-gateway" value="manual">
									<a href="<?php echo base_url('user/booking/index/' . $dkr->kode_vendor . '/' . $dkr->id_paket) ?> ">
										<input type="button" class="edd-submit button" id="edd-purchase-button" name="edd-purchase" value="Booking"></a>
								</fieldset>
							</span>
>>>>>>> 566589a38ed54a5c589748a935ee5301e28bcf76

							</div>
						</div>
					</div>
					<?php if ($index % 3 == 2) {		?>
					</div>
			<?php }
					$index++;
				endforeach ?>
		</div>
	</div>
	</div>
</section>