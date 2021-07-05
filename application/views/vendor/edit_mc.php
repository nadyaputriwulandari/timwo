<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA MC</h3>

	<?php foreach ($mc as $m) : ?>

		<form method="post" action="<?php echo base_url(). 'vendor/mc/update_aksi' ?>">
			

			<div class="form-group">
				<label>Id</label>
				<input type="text" name="id_mc"  class="form-control" value="<?php echo $m->id_mc?>">
			</div>
			<div class="for-group">
				<label>Paket</label>
				<input type="text" name="paket" class="form-control"value="<?php echo $m->paket ?>">
			</div>
			<div class="for-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control"value="<?php echo $m->harga ?>">
			</div>
			<div class="for-group">
				<label>Foto</label>
				<input type="file" name="foto" class="form-control"value="<?php echo $m->foto ?>">
			</div>
			
			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>



		</form>

	<?php endforeach; ?>
</div>