<table class="table table-bordered table-striped table-hover">
		<tr>

			<th>NO</th>
			<th>TANGGAL</th>
			<th>BUKTI</th>
			<th>KETERANGAN</th>
			
		</tr>

		<?php
		$no=1;
		foreach ($bayar as $by) : ?>
			<tr>
				<td width="20px"><?php echo $no++ ?> </td>
				<td><?php echo $by->tanggal ?></td>
				<td><?php echo $by->bukti ?></td>
				<td><?php echo $by->keterangan ?></td>


				
			</tr>
			<?php endforeach; ?>

			
</table>

	</div>

	