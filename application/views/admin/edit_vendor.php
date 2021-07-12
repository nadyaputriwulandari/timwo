<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT VENDOR</h3>

	<?php foreach ($tb_vendor as $bk) : ?>

		<form method="post" action="<?php echo base_url() . 'admin/vendor/update_aksi' ?>">

			<div class="form-group">
				<label>Id</label>
				<input type="text" name="kode_vendor" class="form-control" value="<?php echo $bk->kode_vendor ?>">
			</div>
			<div class="for-group">
				<label>Nama Vendor</label>
				<input type="text" name="nama_vendor" class="form-control" value="<?php echo $bk->nama_vendor ?>">
			</div>
			<div class="for-group">
				<label>Telephone</label>
				<input type="text" name="no_telp_vendor" class="form-control" value="<?php echo $bk->no_telp_vendor ?>">
			</div>
			<div class="for-group">
				<label>Alamat</label>
				<input type="text" name="alamat_vendor" class="form-control" value="<?php echo $bk->alamat_vendor ?>">
			</div>
			<div class="for-group">
				<label>Kategori</label>
				<select name="kategori" id="kategori" class="form-control">
					<option value="">Kategori</option>
					<?php foreach ($menu as $m) : ?>
						<option value="<?= $m['kode_unik']; ?>" <?php if ($m['kode_unik'] == $submenu['kategori_vendor']) : ?> selected="selected" <?php endif; ?>><?= $m['kategori']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="for-group">
				<label>Status</label>
				<select name="status" id="status" class="form-control">
					<option value="">Status</option>
					<?php
					for ($i = 0; $i < 2; $i++) { ?>
						<option value="<?= $i; ?>" <?php if ($i == $submenu['status']) : ?> selected="selected" <?php endif; ?>><?= $i; ?></option>
					<?php } ?>
				</select>
			</div>
			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
		</form>
	<?php endforeach; ?>
</div>