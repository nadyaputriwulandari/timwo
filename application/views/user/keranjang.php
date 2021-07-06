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
<fieldset id="edd_checkout_user_info">
	<table border="1">
		<tr>
			<th> Nama Pemesan </th>
			<th> Nama Vendor </th>
			<th> Paket </th>
			<th> Harga </th>
			<th> Tanggal </th>
			<th> Status </th>

			<th colspan="2">Aksi</th>
		</tr>
		<?php $i = 1; ?>

		<?php foreach ($this->cart->contents() as $items) : ?>

			<?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

			<tr>
				<td><?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
				<td>
					<?php echo $items['name']; ?>

					<?php if ($this->cart->has_options($items['rowid']) == TRUE) : ?>

						<p>
							<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value) : ?>

								<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

							<?php endforeach; ?>
						</p>

					<?php endif; ?>

				</td>
				<td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
				<td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
			</tr>

			<?php $i++; ?>

		<?php endforeach; ?>


	</table>
	</div>

	</div>
	</div>
	</div>
	<br><br>
	<fieldset id="edd_purchase_submit">
		<input type="hidden" name="edd_action" value="purchase">
		<input type="hidden" name="edd-gateway" value="manual">
		<input type="submit" class="edd-submit button" id="edd-purchase-button" name="edd-purchase" value="Checkout">
	</fieldset>
	</section>
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