<br>

<div class="container-fluid">

	

	<?php echo anchor('vendor/catering/input','<button class="btn btn-sm btn-primary mb-3"><i class=" fas fa-plus fa-sm"> Add Data</i></button>') ?>
	

	<table class="table table-bordered table-striped table-hover">
		<tr>

			<th>NO</th>
			<th>PAKET</th>
			<th>HARGA</th>
			<th>FOTO</th>
			
			
			<th colspan ="2">Aksi</th>
		</tr>

		<?php
		$no=1;
		foreach ($catering as $ct) : ?>
			<tr>
				<td width="20px"><?php echo $no++ ?> </td>
				<td><?php echo $ct->paket ?></td>
				<td><?php echo $ct->harga ?></td>
				<td><?php echo $ct->foto ?></td>
				
				<td width="20px"><?php echo anchor('vendor/catering/update/' .$ct->id_catering,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
				<td width="20px"><?php echo anchor('vendor/catering/delete/' .$ct->id_catering,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
			</tr>
			<?php endforeach; ?>

			
</table>

	</div>

	