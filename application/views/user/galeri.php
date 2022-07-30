<section class="item content">
	<div class="container toparea">
		<div class="underlined-title">
			<div class="editContent">
				<h1 class="text-center latestitems">Gallery</h1>
			</div>
			<div class="wow-hr type_short">
				<span class="wow-hr-h">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</span>
			</div>
		</div>

		<div class="row">
			<?php
			foreach ($galeri as $gal) : ?>
				<div class="col-md-4">
					<div class="productbox">
						<div class="fadeshop">
							<span class="maxproduct"><img src="<?php echo base_url('assets_user/images/' . $gal['gambar']) ?>"> </span>
						</div>

					</div>
				</div>
			<?php endforeach ?>
		</div>
		<?= $this->pagination->create_links(); ?>
	</div>
	</div>
</section>