<table class="table table-bordered table-striped table-hover">
		<tr>

			<th>NO</th>
			<th>PAKET</th>
			<th>HARGA</th>
			
		</tr>

		<?php
		$no=1;
		foreach ($mc as $m) : ?>
			<tr>
				<td width="20px"><?php echo $no++ ?> </td>
				<td><?php echo $m->paket ?></td>
				<td><?php echo $m->harga ?></td>
				
			</tr>
			<?php endforeach; ?>

			
</table>

	</div>

	