<div class="container-fluid">
	
	<form method="POST" action="<?php echo site_url('vendor/dekorasi/input_aksi')?>">
		
		<div class="form-group">
			<label>paket</label>
			<input type="text" name="paket" placeholder="Masukkan paket " class="form-control">
			 ?>

		</div>
			<div class="form-group">
			<label>harga</label>
			<input type="text" name="harga" placeholder="Masukkan harga " class="form-control">

		</div>
		<div class="form-group">
			<label>foto</label>
			<input type="file" name="foto" class="form-control">

		</div>


		<div class="form-group">
			<label>Keterangan</label>
			<input type="text" name="keterangan" placeholder="Masukkan Keterangan " class="form-control">
			

		</div>

		<button type="submit" class="btn btn-primary">Simpan</button>

	</form>
</div>