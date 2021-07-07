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
			<th>No</th>
			<th>Vendor </th>
			<th>Paket </th>
			<th>Tanggal Acara</th>
			<th>Harga </th>
			<!-- <th> Status </th> -->

			<!-- <th colspan="2">Aksi</th> -->
		</tr>
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
			</tr>

			<?php $i++; ?>


		<?php endforeach; ?>
		<tr>
			<td colspan="4"><strong>Total</strong>
			</td>
			<td>
				Rp.<?php echo $this->cart->format_number($this->cart->total()); ?>
			</td>

		</tr>
	</table>
	</div>

	</div>
	</div>
	</div>
	<fieldset id="edd_purchase_submit ">
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