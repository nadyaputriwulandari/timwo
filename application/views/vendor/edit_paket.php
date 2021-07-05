<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA </h3>

	<?php foreach ($tb_paket as $dkr) : ?>

		<form method="post" action="<?php echo base_url(). 'vendor/paket/update_aksi' ?>">
			

			<div class="form-group">
				<label>Id</label>
				<input type="text" name="id_paket"  class="form-control" value="<?php echo $dkr->id_paket?>">
			</div>
			<div class="for-group">
				<label>Paket</label>
				<input type="text" name="paket" class="form-control"value="<?php echo $dkr->paket ?>">
			</div>
			<div class="for-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control"value="<?php echo $dkr->harga ?>">
			</div>
			<div class="for-group">
				<label>Deskripsi</label>
				<input type="text" name="deskripsi" class="form-control"value="<?php echo $dkr->deskripsi ?>">
			</div>
			<div class="for-group">
				<label>Foto</label>
				<input type="file" name="foto" class="form-control"value="<?php echo $dkr->foto ?>">
			</div>
			
			
			
			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>



		</form>

	<?php endforeach; ?>
</div>