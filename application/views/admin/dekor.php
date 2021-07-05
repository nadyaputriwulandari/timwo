<table class="table table-bordered table-striped table-hover">
		<tr>

			<th>NO</th>
			<th>PAKET</th>
			<th>HARGA</th>
			
		</tr>

		<?php
		$no=1;
		foreach ($dekorasi as $dkr) : ?>
			<tr>
				<td width="20px"><?php echo $no++ ?> </td>
				<td><?php echo $dkr->paket ?></td>
				<td><?php echo $dkr->harga ?></td>
				
			</tr>
			<?php endforeach; ?>

			
</table>

	</div>

	