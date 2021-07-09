<div class="footer text-center">
	<div class="container">
		<div class="row">
			<p class="footernote">
				Connect with Scorilo
			</p>
			<ul class="social-iconsfooter">
				<li><a href="#"><i class="fa fa-phone"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<p>
				&copy; 2017 Your Website Name<br />
				Scorilo - Free template by <a href="https://www.wowthemes.net/">WowThemesNet</a>
			</p>
		</div>
	</div>
</div>
<!-- SCRIPTS =============================-->
<!-- <script src="<?= base_url(''); ?>assets/js/jquery-.js"></script>
<script src="<?= base_url(''); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(''); ?>assets/js/anim.js"></script> -->
<script>
	//----HOVER CAPTION---//	  
	jQuery(document).ready(function($) {
		$('.fadeshop').hover(
			function() {
				$(this).find('.captionshop').fadeIn(150);
			},
			function() {
				$(this).find('.captionshop').fadeOut(150);
			}
		);
	});

	$('#pay-button').click(function(event) {
		event.preventDefault();
		$(this).attr("disabled", "disabled");
		var total = $(this).data('total');
		var nama = $("#nama").val();
		var alamat = $("#alamat").val();
		var no_hp = $("#no_hp").val();
		var email = $("#email").val();
		$.ajax({
			type: 'POST',
			url: '<?= site_url() ?>/snap/token',
			cache: false,
			data: {
				total: total,
				nama: nama,
				email: email,
				alamat: alamat,
				no_hp: no_hp
			},

			success: function(data) {
				//location = data;

				console.log('token = ' + data);

				var resultType = document.getElementById('result-type');
				var resultData = document.getElementById('result-data');

				function changeResult(type, data) {
					$("#result-type").val(type);
					$("#result-data").val(JSON.stringify(data));
					//resultType.innerHTML = type;
					//resultData.innerHTML = JSON.stringify(data);
				}

				snap.pay(data, {

					onSuccess: function(result) {
						changeResult('success', result);
						console.log(result.status_message);
						console.log(result);
						$("#payment-form").submit();
					},
					onPending: function(result) {
						changeResult('pending', result);
						console.log(result.status_message);
						$("#payment-form").submit();
					},
					onError: function(result) {
						changeResult('error', result);
						console.log(result.status_message);
						$("#payment-form").submit();
					}
				});
			}
		});
	});
</script>

</body>

</html>