<!-- CONTENT =============================-->
<section class="item content">

	<div class="container toparea">
		<div class="underlined-title">
			<div class="editContent">
				<h1 class="text-center latestitems">Booking</h1>
			</div>
			<div class="wow-hr type_short">
				<span class="wow-hr-h">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</span>
			</div>
		</div>
		<div id="edd_checkout_wrap" class="col-md-8 col-md-offset-2">
			<form id="edd_checkout_cart_form" method="post">
				<div id="edd_checkout_cart_wrap">

				</div>
			</form>
			<div id="edd_checkout_form_wrap" class="edd_clearfix">
				<?php

				if ($this->session->userdata('username')) {
				?>
					<form id="edd_purchase_form" class="edd_form" action="<?= base_url('user/booking/tambah_kekeranjang') ?>" method="POST">
						<fieldset id="edd_checkout_user_info">
							<legend>Data Booking</legend>
							<p id="edd-email-wrap">
								<label class="edd-label" for="edd-email">
									Nama Pemesan</label>
								<input class="edd-input required" type="text" name="nama_pemesan" id="edd-email" value="<?= $nama_customer ?>">
							</p>
							<p id="edd-first-name-wrap">
								<label class="edd-label" for="edd-first">
									Nama Vendor
								</label>
								<input class="edd-input required" type="text" name="paket" id="edd-first" value="<?= $data_vendor->nama_vendor ?>" required="">
							</p>
							<p id="edd-first-name-wrap">
								<label class="edd-label" for="edd-first">
									Jenis Paket
								</label>
								<input class="edd-input required" type="text" name="paket" id="edd-first" value="<?= $data_vendor->paket ?>" required="">
								<input class="edd-input required" type="text" name="id_paket" id="edd-first" value="<?= $data_vendor->id_paket ?>" required="">
							</p>
							<p id="edd-first-name-wrap">
								<label class="edd-label" for="edd-first">
									Harga
								</label>
								<input class="edd-input required" type="text" name="harga" id="edd-first" value="<?= $data_vendor->harga ?>" required="">
							</p>
							<p id="edd-last-name-wrap">
								<label class="edd-label" for="edd-last">
									Tanggal Acara</label>
								<input class="edd-input" type="date" name="tgl_pesan" id="edd-last" value="">
							</p>
						</fieldset>
						<fieldset id="edd_purchase_submit">
							<input type="hidden" name="edd_action" value="purchase">
							<input type="hidden" name="edd-gateway" value="manual">
							<input type="submit" class="edd-submit button" id="edd-purchase-button" name="edd-purchase" value="Booking">
						</fieldset>
					</form>
					<br><br>
					<!-- <div class="editContent">
						<h1 class="text-center latestitems">Keranjang</h1>
					</div>
					<div class="wow-hr type_short">
						<span class="wow-hr-h">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</span>
					</div>
					<fieldset id="edd_checkout_user_info"> -->
					<!-- <table border="1">
						<tr>
							<th>ID</th>
							<th>KATEGORI</th>
							<th>NAMA VENDOR</th>
							<th>TANGGAL</th>
							<th>STATUS</th>

							<th colspan="2">AKSI</th>
						</tr>

						<?php
						$no = 1;
						foreach ($booking as $bk) : ?>

							<tr>

								<td><?php echo $no++ ?></td>
								<td><?php echo $bk->jenis_paket ?></td>
								<td><?php echo $bk->harga ?></td>
								<td><?php echo $bk->tgl_pesan ?></td>
								<td><?php echo $bk->status_pembayaran ?></td>


								<td><?php echo anchor('admin/booking/hapus/' . $bk->id_booking, '<div class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></div') ?></td>

							</tr>

						<?php endforeach; ?>

					</table> -->
			</div>

		</div>
	</div>
	</div>

</section>
<div id="edd_checkout_form_wrap" class="edd_clearfix">
	<form id="edd_purchase_form" class="edd_form" method="POST" action="<?php echo site_url('about/input_aksi') ?>">
		</fieldset>
		<fieldset id="edd_purchase_submit">
			<input type="hidden" name="edd_action" value="purchase">
			<input type="hidden" name="edd-gateway" value="manual">
			<input type="submit" class="edd-submit button" id="edd-purchase-button" name="edd-purchase" value="Checkout">
		</fieldset>
	</form>
</div>

<br><br>
<?php

				} else {
?>
	<?= $this->session->flashdata('message'); ?>
<?php } ?>

</div>
</div>
</div>
</section>

<!-- CALL TO ACTION =============================-->