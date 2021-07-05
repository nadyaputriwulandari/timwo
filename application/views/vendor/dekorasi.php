<br>

<div class="container-fluid">

	

	<?php echo anchor('vendor/dekorasi/input','<button class="btn btn-sm btn-primary mb-3"><i class=" fas fa-plus fa-sm"> Add Data</i></button>') ?>
	

	<table class="table table-bordered table-striped table-hover">
		<tr>

			<th>NO</th>
			<th>NAMA PAKET</th>
			<th>HARGA</th>
			<th>Foto</th>
			<th>Keterangan</th>
			
			<th colspan ="2">Aksi</th>
		</tr>

		<?php
		$no=1;
		foreach ($dekorasi as $dkr) : ?>
			<tr>
				<td width="20px"><?php echo $no++ ?> </td>
				<td><?php echo $dkr->paket ?></td>
				<td><?php echo $dkr->harga ?></td>
				<td><?php echo $dkr->foto ?></td>
				<td><?php echo $dkr->keterangan ?></td>
				<td width="20px"><?php echo anchor('vendor/dekorasi/update/' .$dkr->id_dekorasi,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
				<td width="20px"><?php echo anchor('vendor/dekorasi/delete/' .$dkr->id_dekorasi,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
			</tr>
			<?php endforeach; ?>

			
</table>

	</div>

	