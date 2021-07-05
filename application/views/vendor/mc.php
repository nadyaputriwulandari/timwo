<br>

<div class="container-fluid">

	

	<?php echo anchor('vendor/mc/input','<button class="btn btn-sm btn-primary mb-3"><i class=" fas fa-plus fa-sm"> Add Data</i></button>') ?>
	

	<table class="table table-bordered table-striped table-hover">
		<tr>

			<th>NO</th>
			<th>PAKET</th>
			<th>HARGA</th>
			
			
			<th colspan ="2">Aksi</th>
		</tr>

		<?php
		$no=1;
		foreach ($mc as $m) : ?>
			<tr>
				<td width="20px"><?php echo $no++ ?> </td>
				<td><?php echo $m->paket ?></td>
				<td><?php echo $m->harga ?></td>
				
				<td width="20px"><?php echo anchor('vendor/mc/update/' .$m->id_mc,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
				<td width="20px"><?php echo anchor('vendor/mc/delete/' .$m->id_mc,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
			</tr>
			<?php endforeach; ?>

			
</table>

	</div>

	