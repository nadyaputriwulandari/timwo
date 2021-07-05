<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT VENDOR</h3>

	<?php foreach ($tb_vendor as $bk) : ?>

		<form method="post" action="<?php echo base_url(). 'admin/vendor/update_aksi' ?>">
			

			<div class="form-group">
				<label>Id</label>
				<input type="text" name="kode_vendor"  class="form-control" value="<?php echo $bk->kode_vendor?>">
			</div
			<div class="for-group">
				<label>Nama Vendor</label>
				<input type="text" name="nama_vendor" class="form-control"value="<?php echo $bk->nama_vendor ?>">
			</div>
			<div class="for-group">
				<label>Telephone</label>
				<input type="text" name="no_telp_vendor" class="form-control"value="<?php echo $bk->no_telp_vendor ?>">
			</div>
			<div class="for-group">
				<label>Alamat</label>
				<input type="text" name="alamat_vendor" class="form-control"value="<?php echo $bk->alamat_vendor ?>">
			</div>
			<div class="for-group">
				<label>Kategori</label>
			<select class="form-control" name="kategori" id='kategori'>
				<option value="">Pilih Kategori</option>
				<option value="CTR">Catering </option>
				<option value="DKR">Dekorasi </option>
				<option value="FTG">Fotographer </option>
				<option value="MC">MC </option>
				<option value="MUA">MUA </option>
			</select>
			
				
			</div>
			<div class="for-group">
				<label>Status</label>
				<input type="text" name="status" class="form-control"value="<?php echo $bk->status ?>">
			</div>



			
			
			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>



		</form>

	<?php endforeach; ?>
</div>