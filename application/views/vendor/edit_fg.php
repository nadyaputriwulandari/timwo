<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA DEKORASI</h3>

	<?php foreach ($fg as $f) : ?>

		<form method="post" action="<?php echo base_url(). 'vendor/fotographer/update_aksi' ?>">
			

			<div class="form-group">
				<label>Id</label>
				<input type="text" name="id_fg"  class="form-control" value="<?php echo $f->id_fg?>">
			</div>
			<div class="for-group">
				<label>Paket</label>
				<input type="text" name="paket" class="form-control"value="<?php echo $f->paket ?>">
			</div>
			<div class="for-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control"value="<?php echo $f->harga ?>">
			</div>
			<div class="for-group">
				<label>Foto</label>
				<input type="file" name="foto" class="form-control"value="<?php echo $f->foto ?>">
			</div>
			
			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>



		</form>

	<?php endforeach; ?>
</div>