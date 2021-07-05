<table class="table table-bordered table-striped table-hover">
		<tr>

			<th>NO</th>
			<th>PAKET</th>
			<th>HARGA</th>
			
		</tr>

		<?php
		$no=1;
		foreach ($fg as $f) : ?>
			<tr>
				<td width="20px"><?php echo $no++ ?> </td>
				<td><?php echo $f->paket ?></td>
				<td><?php echo $f->harga ?></td>
				
			</tr>
			<?php endforeach; ?>

			
</table>

	</div>

	