<!-- CONTENT =============================-->

<?php
if ($this->session->userdata('username')) {
	if (empty($this->cart->contents())) { ?>
		<section class="item content">
			<div class="container toparea">
				<div class="underlined-title">
					<div class="editContent">
						<h1 class="text-center latestitems">Keranjang</h1>
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
					<div class="col-md-8 col-md-offset-2">
						<?php

						$this->session->set_flashdata('msg_emptycart', '<div class="alert alert-danger" align="center" role="alert">Keranjang Kosong</div>');
						echo $this->session->flashdata('msg_emptycart'); ?>

					</div>
				</div>
			</div>
		<?php	} else { ?>
			<section class="item content">
				<div class="container toparea">
					<div class="underlined-title">
						<div class="editContent">
							<h1 class="text-center latestitems">Keranjang</h1>
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


						<div id="edd_checkout_wrap" class="col-md-8 col-md-offset-2">
							<div id="edd_checkout_cart_wrap">
								<table id="edd_checkout_cart" class="ajaxed">
									<thead>
										<tr class="edd_cart_header_row">
											<th class="edd_cart_item_name">
												No
											</th>
											<th class="edd_cart_item_name">
												Vendor
											</th>
											<th class="edd_cart_item_name">
												Nama Paket
											</th>
											<th class="edd_cart_item_name">
												Tanggal Acara
											</th>
											<th class="edd_cart_item_price">
												Harga
											</th>
											<th class="edd_cart_actions">
												Aksi
											</th>
										</tr>
									</thead>
									<tbody>
										<tr class="edd_cart_item" id="edd_cart_item_0_25" data-download-id="25">
											<?php $i = 1; ?>

											<?php foreach ($this->cart->contents() as $items) : ?>
										<tr>
											<!-- <td><?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td> -->
											<td> <?= $i ?></td>
											<td>
												<?= $this->cart->product_options($items['rowid'])['Nama_Vendor'] ?>
											</td>
											<td> <?= $items['name']; ?></td>
											<td>
												<!-- <?php if ($this->cart->has_options($items['rowid']) == TRUE) :
															foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value) :
																echo $option_value;
															endforeach;
														endif; ?> -->
												<?= $this->cart->product_options($items['rowid'])['Tgl'] ?>
											</td>
											<td><span id="gross_ammount" data-total='<?= $this->cart->format_number($items['price']); ?>'> Rp <?= $this->cart->format_number($items['price']); ?></span></td>
											<td class="edd_cart_actions">
												<a class="edd_cart_remove_item_btn" href="<?php echo base_url('user/keranjang/delete_item/' . $items['rowid']); ?>">Remove</a>
											</td>
										</tr>

										<?php $i++; ?>


									<?php endforeach; ?>


									</tr>
									</tbody>
									<tfoot>
										<tr class="edd_cart_footer_row edd_cart_discount_row" style="display:none;">
											<th colspan="5" class="edd_cart_discount">
											</th>
										</tr>
										<tr class="edd_cart_footer_row">
											<th colspan="6" class="edd_cart_total">
												Total: <span class="edd_cart_amount" data-subtotal="11.99" data-total="11.99">Rp.<?php echo $this->cart->format_number($this->cart->total()); ?></span>
											</th>
										</tr>
									</tfoot>
								</table>
								<div align="right">
									<a href="<?php echo base_url('user/shop')  ?>">
										<div class="btn btn-sm btn-primary">Pesan Lagi
										</div>
									</a>
								</div>
							</div>
							<div id="edd_checkout_form_wrap" class="edd_clearfix">
								<!-- <form id="edd_purchase_form" class="edd_form" action="<?= base_url('user/keranjang/pesan') ?>" method="POST"> -->

								<form id="payment-form" method="post" action="<?= base_url('snap/finish') ?>">


									<input type="hidden" name="result_type" id="result-type" value="">
									<input type="hidden" name="result_data" id="result-data" value="">
									<fieldset id="edd_checkout_user_info">
										<legend>Personal Info</legend>
										<p id="edd-email-wrap">
											<label class="edd-label" for="email">
												Email <span class="edd-required-indicator">*</span></label>
											<input class="edd-input required" type="email" placeholder="Email" id="email" name="email">
										</p>
										<p id="edd-first-name-wrap">
											<label class="edd-label" for="nama">
												Nama Lengkap <span class="edd-required-indicator">*</span>
											</label>
											<input class="edd-input required" type="text" placeholder="Nama Lengkap" id="nama" name="nama" value=" <?= $this->session->userdata('username') ?>" readonly>
										</p>
										<p id="edd-first-name-wrap">
											<label class="edd-label" for="id_username">
												ID <span class="edd-required-indicator">*</span>
											</label>
											<input class="edd-input required" type="hidden" placeholder="Nama Lengkap" id="id_username" name="id_username" value=" <?= $this->session->userdata('id') ?>" readonly>
										</p>
										<p id="edd-last-name-wrap">
											<label class="edd-label" for="edd-last">
												No HP </label>
											<input class="edd-input" type="text" id="no_hp" placeholder="No HP" name="no_hp">
										</p>
										<p id="edd-last-name-wrap">
											<label class="edd-label" for="alamat">
												Alamat </label>
											<textarea class="edd-input" name="alamat" id="alamat"></textarea>
										</p>
									</fieldset>
									<fieldset id="edd_purchase_submit">
										<p id="edd_final_total_wrap">
											<strong>Total Pembayaran:</strong>
											<span class="edd_cart_amount">Rp.<?= $this->cart->format_number($this->cart->total()); ?></span>
										</p>
										<input type="hidden" name="edd_action" value="purchase">
										<input type="hidden" name="edd-gateway" value="manual">
										<!-- <input type="submit" class="edd-submit button" id="edd-purchase-button" name="edd-purchase" value="Purchase"> -->
										<button class="edd-submit button" id="pay-button" data-total="<?= $this->cart->total(); ?>">Pay!</button>
										
									</fieldset>
								</form>
							</div>
						</div>

					</div>
				</div>
		<?php
	}
} else {
	$this->session->flashdata('message');
} ?>