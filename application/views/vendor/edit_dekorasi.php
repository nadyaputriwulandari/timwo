<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA DEKORASI</h3>

	<?php foreach ($dekorasi as $dkr) : ?>

		<form method="post" action="<?php echo base_url(). 'vendor/dekorasi/update_aksi' ?>">
			

			<div class="form-group">
				<label>Id</label>
				<input type="text" name="id_dekorasi"  class="form-control" value="<?php echo $dkr->id_dekorasi?>">
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
				<label>Foto</label>
				<input type="date" name="foto" class="form-control"value="<?php echo $dkr->foto ?>">
			</div>
			<div class="for-group">
				<label>Keterangan</label>
				<input type="text" name="keterangan" class="form-control"value="<?php echo $dkr->keterangan ?>">
			</div>


			
			
			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>



		</form>

	<?php endforeach; ?>
</div>