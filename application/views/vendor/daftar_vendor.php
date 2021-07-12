<!DOCTYPE html>
<html lang="en">

<head>
	<title>Daftar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url(''); ?>assets/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/css/main.css">
	<!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="<?php echo site_url('vendor/daftar_vendor/input_aksi') ?>">
					<span class="login100-form-title p-b-43">
						Registrasi Sebagai Vendor
					</span>


					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<label class="input100">Nama Vendor</label>
						<input class="input100" type="text" name="nama_vendor">
						<span class="focus-input100"></span>

					</div>


					<!-- <div class="wrap-input100 validate-input"> -->
					<div class="wrap-input100 validate-input">
						<label class="input100">Kategori Vendor</label>
						<span class="focus-input100"></span>

						<select class="input100" name="kategori_vendor" id="kategori_vendor">
							<option value="DKR">Dekorasi</option>
							<option value="FTG">Fotografer</option>
							<option value="MUA">MUA</option>
							<option value="CTR">Catering</option>
							<option value="MC">MC</option>
						</select>
						<!-- <input class="input100" type="text" name="kategori_vendor"> -->
						<!-- <span class="focus-input100"></span> -->
						<!-- <span class="label-input100">Kategori</span> -->
					</div>

					<div class="wrap-input100 validate-input">
						<label class="input100">No HP</label>
						<input class="input100" type="text" name="no_telp_vendor">
						<span class="focus-input100"></span>

					</div>

					<div class="wrap-input100 validate-input">
						<label class="input100">Alamat</label>
						<input class="input100" type="text" name="alamat_vendor">
						<span class="focus-input100"></span>

					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<label class="input100">Password</label>
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>

					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<label class="input100">Confirm Password</label>
						<input class="input100" type="password" name="password1">
						<span class="focus-input100"></span>

					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">

						</div>

						<div>
							<a href="<?php echo base_url('vendor/login_vendor'); ?>" class="txt1">
								Sudah Daftar? Login Disini
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" ,>
							Daftar
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">

					</div>

					<div class="login100-form-social flex-c-m">

					</div>
				</form>

				<div class="login100-more" style="background-image: url('assets_user/images/login.jpg');">
				</div>
			</div>
		</div>
	</div>





	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>