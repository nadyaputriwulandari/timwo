<div class="editContent">
	<br>
	<h1 class="text-center latestitems">Keranjang</h1>
</div>
<div class="wow-hr type_short">
	<span class="wow-hr-h">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
	</span>
</div>


<div id="edd_checkout_wrap" class="col-md-8 col-md-offset-2">
	<form id="edd_checkout_cart_form" method="post">
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
						<td> Rp.<?= $this->cart->format_number($items['price']); ?></td>
						<td class="edd_cart_actions">
							<a class="edd_cart_remove_item_btn" href="<?php echo base_url('user/keranjang/delete'); ?>">Remove</a>
						</td>
					</tr>

					<?php $i++; ?>


				<?php endforeach; ?>


				</tr>
				</tbody>
				<tfoot>
					<!-- <tr class="edd_cart_footer_row">
						<th colspan="5">
							<a class="edd-cart-saving-button edd-submit button " id="edd-save-cart-button" href="#">Save Cart</a>
						</th>
					</tr> -->
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
		</div>
	</form>
	<div id="edd_checkout_form_wrap" class="edd_clearfix">
		<form id="edd_purchase_form" class="edd_form" action="#" method="POST">
			<fieldset id="edd_checkout_user_info">
				<legend>Personal Info</legend>
				<p id="edd-email-wrap">
					<label class="edd-label" for="edd-email">
						Email <span class="edd-required-indicator">*</span></label>
					<input class="edd-input required" type="email" name="edd_email" placeholder="Email" id="edd-email" name="email">
				</p>
				<p id="edd-first-name-wrap">
					<label class="edd-label" for="edd-first">
						Nama Lengkap <span class="edd-required-indicator">*</span>
					</label>
					<input class="edd-input required" type="text" name="edd_first" placeholder="Nama Lengkap" id="edd-first" name="nama" required="">
				</p>
				<p id="edd-last-name-wrap">
					<label class="edd-label" for="edd-last">
						No HP </label>
					<input class="edd-input" type="text" name="edd_last" id="edd-last" placeholder="No HP" name="no_hp">
				</p>
			</fieldset>
			<fieldset id="edd_purchase_submit">
				<p id="edd_final_total_wrap">
					<strong>Total Pembayaran:</strong>
					<span class="edd_cart_amount" data-subtotal="11.99" data-total="11.99">Rp.<?php echo $this->cart->format_number($this->cart->total()); ?></span>
				</p>
				<input type="hidden" name="edd_action" value="purchase">
				<input type="hidden" name="edd-gateway" value="manual">
				<input type="submit" class="edd-submit button" id="edd-purchase-button" name="edd-purchase" value="Purchase">
			</fieldset>
		</form>
	</div>
</div>



<fieldset id="">






	<!-- <div id="edd_checkout_form_wrap" class="edd_clearfix">
<form id="edd_purchase_form" class="edd_form" method="POST" action="<?php echo site_url('about/input_aksi') ?>"> 
</fieldset>
				<fieldset id="edd_purchase_submit">
					<input type="hidden" name="edd_action" value="purchase">
					<input type="hidden" name="edd-gateway" value="manual">
					<input type="submit" class="edd-submit button" id="edd-purchase-button" name="edd-purchase" value="Checkout">
				</fieldset>
			</form>
		</div>

<br><br> -->