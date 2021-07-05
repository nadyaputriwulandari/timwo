<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA BOOKING</h3>

	<?php foreach ($book as $bk) : ?>

		<form method="post" action="<?php echo base_url(). 'admin/booking/update' ?>">
			<?php echo $id; ?>

			<div class="form-group">
				<label>Id</label>
				<input type="text" name="id_booking"  class="form-control" value="<?php echo $bk->id_booking?>">
			</div
			<div class="for-group">
				<label>Kategori</label>
				<input type="text" name="kategori" class="form-control"value="<?php echo $bk->kategori ?>">
			</div>
			<div class="for-group">
				<label>Nama Vendor</label>
				<input type="text" name="nama_vendor" class="form-control"value="<?php echo $bk->nama_vendor ?>">
			</div>
			<div class="for-group">
				<label>Tanggal</label>
				<input type="date" name="tanggal" class="form-control"value="<?php echo $bk->tanggal ?>">
			</div>

			
			
			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>



		</form>

	<?php endforeach; ?>
</div>