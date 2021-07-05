<table class="table table-bordered table-striped table-hover">
		<tr>

			<th>NO</th>
			<th>JUMLAH</th>
			<th>ULASAN</th>
			
			
		</tr>

		<?php
		$no=1;
		foreach ($rating as $rt) : ?>
			<tr>
				<td width="20px"><?php echo $no++ ?> </td>
				<td><?php echo $rt->jumlah ?></td>
				<td><?php echo $rt->ulasan ?></td>
				
			</tr>
			<?php endforeach; ?>

			
</table>

	</div>

	