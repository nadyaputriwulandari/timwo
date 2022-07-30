<section class="item content">
	<div class="container toparea">
		<div class="underlined-title">
			<div class="editContent">
				<h1 class="text-center latestitems">Galeri</h1>
			</div>
			<div class="wow-hr type_short">
				<span class="wow-hr-h">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</span>
			</div>
		</div>

		<!-- <select name="" class="form" id="kategori_vendor" style="text-align: center;">
			<option value="0">Show All</option>
			<option value="DKR">Dekorasi</option>
			<option value="FTG">Fotografer</option>
			<option value="CTR">Catering</option>
			<option value="MUA">MUA</option>
			<option value="MC">MC</option>
		</select> -->


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

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<!-- <script>
		$(document).ready(function() {
			$("#kategori_vendor").change(function() {
				galeri();
			});
		});

		// function galeri() {
		// 	var kategori_vendor = $("#kategori_vendor").val();
		// 	$.ajax({
		// 		url: "<?= base_url('galeri/load_galeri') ?>",
		// 		data: "kategori_vendor=" + kategori_vendor,
		// 		success: function(data) {
		// 			//	$("#galeri tbody").html(data);
		// 			console.log(data);
		// 		}
		// 	});
		// }
	</script> -->
</section>