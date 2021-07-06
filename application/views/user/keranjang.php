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
   <th>ID</th>
   <th>KATEGORI</th>
   <th>NAMA VENDOR</th>
   <th>TANGGAL</th>
   <th>STATUS</th>
 
   <th colspan="2">AKSI</th>
</tr>

<?php
$no=1;
foreach ($booking as $bk) : ?>
 
<tr>

 <td><?php echo $no++ ?></td>
 <td><?php echo $bk->jenis_paket ?></td>
 <td><?php echo $bk->harga ?></td>
 <td><?php echo $bk->tgl_pesan ?></td>
 <td><?php echo $bk->status_pembayaran ?></td>
 
 
 <td><?php echo anchor('admin/booking/hapus/' .$bk->id_booking, '<div class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></div') ?></td>

</tr>

<?php endforeach; ?>

</table>
</div>

		</div>
	</div>
</div>

</section>
<div id="edd_checkout_form_wrap" class="edd_clearfix">
<form id="edd_purchase_form" class="edd_form" method="POST" action="<?php echo site_url('about/input_aksi')?>"> 
</fieldset>
				<fieldset id="edd_purchase_submit">
					<input type="hidden" name="edd_action" value="purchase">
					<input type="hidden" name="edd-gateway" value="manual">
					<input type="submit" class="edd-submit button" id="edd-purchase-button" name="edd-purchase" value="Checkout">
				</fieldset>
			</form>
		</div>

<br><br>