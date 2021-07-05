<table class="table table-bordered table-striped table-hover">
		<tr>

			<th>NO</th>
			<th>PAKET</th>
			<th>HARGA</th>
			
		</tr>

		<?php
		$no=1;
		foreach ($catering as $ct) : ?>
			<tr>
				<td width="20px"><?php echo $no++ ?> </td>
				<td><?php echo $ct->paket ?></td>
				<td><?php echo $ct->harga ?></td>
				
			</tr>
			<?php endforeach; ?>

			
</table>

	</div>

	