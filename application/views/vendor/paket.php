<br>

<div class="container-fluid">

	

	<?php echo anchor('vendor/paket/input','<button class="btn btn-sm btn-primary mb-3"><i class=" fas fa-plus fa-sm"> Add Data</i></button>') ?>
	

	<table class="table table-bordered table-striped table-hover">
		<tr>

			<th>NO</th>
			<th>PAKET</th>
			<th>HARGA</th>
			<th>DESKRIPSI</th>
			<th>FOTO</th>
			<th>STATUS PAKET</th>

			
			
			<th colspan ="2">Aksi</th>
		</tr>

		<?php
		$no=1;
		foreach ($tb_paket as $ct) : ?>
			<tr>
				<td width="20px"><?php echo $no++ ?> </td>
				<td><?php echo $ct->paket ?></td>
				<td><?php echo $ct->harga ?></td>
				<td><?php echo $ct->deskripsi ?></td>
				<td><?php echo $ct->foto ?></td>
				<td><?php echo $ct->status_paket ?></td>
				
				<td width="20px"><?php echo anchor('vendor/paket/update/' .$ct->id_paket,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
				<td width="20px"><?php echo anchor('vendor/paket/delete/' .$ct->id_paket,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
			</tr>
			<?php endforeach; ?>

			
</table>

	</div>

	