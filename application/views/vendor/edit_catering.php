<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA CATERING</h3>

	<?php foreach ($catering as $ct) : ?>

		<form method="post" action="<?php echo base_url(). 'vendor/catering/update_aksi' ?>">
			

			<div class="form-group">
				<label>Id</label>
				<input type="text" name="id_catering"  class="form-control" value="<?php echo $ct->id_catering?>">
			</div>
			<div class="for-group">
				<label>Paket</label>
				<input type="text" name="paket" class="form-control"value="<?php echo $ct->paket ?>">
			</div>
			<div class="for-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control"value="<?php echo $ct->harga ?>">
			</div>
			
			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>



		</form>

	<?php endforeach; ?>
</div>