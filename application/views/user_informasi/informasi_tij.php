<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?php echo $title ?></title>
	<meta content="" name="description">
	<meta content="" name="keywords">

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container-fluid d-flex ">

			<div class="logo mr-auto">
				<h1 class="text-light"><a href=""><span><?php echo $title ?></span></a></h1>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			</div>

			<nav class="nav-menu d-none d-lg-block">
				<ul>
					<li class="get-started"><a href="<?= base_url('website') ?>">Beranda</a></li>
					<li class="drop-down"><a href="#">Login</a>
						<ul>
							<li><a href="<?= base_url('skom/auth') ?>">Komunitas Koperasi</a></li>
							<li><a href="<?= base_url('baitulqirad/login') ?>">Koperasi Tijarah</a></li>
							<li><a href="<?= base_url('baitulmaal/login') ?>">Koperasi Tabarru</a></li>
						</ul>
					</li>
					<li class="drop-down"><a href="#">Jasa</a>
						<ul>
							<li><a href="<?= base_url('website/simpanan') ?>">Simpanan</a></li>
							<li><a href="<?= base_url('website/tokoemas') ?>">Toko Emas</a></li>
							<li><a href="<?= base_url('website/pembiayaan') ?>">Pembiayaan</a></li>
							<li><a href="<?= base_url('website/pinjamanemas') ?>">Pinjaman Emas</a></li>
						</ul>
					</li>
					<li class="drop-down"><a href="#">Anggota Jabatan</a>
						<ul>
							<li><a href="<?= base_url("anggota_jabatan/komunitas"); ?>">Komunitas Koperasi</a></li>
							<li><a href="<?= base_url("anggota_jabatan/koperasi_tijarah"); ?>">Koperasi Tijarah</a></li>
							<li><a href="<?= base_url("anggota_jabatan/koperasi_tabarru"); ?>">Koperasi Tabarru</a></li>
						</ul>
					</li>
					<li class="drop-down"><a href="#">Informasi</a>
						<ul>
							<li><a href="<?= base_url("user_informasi/informasi_kom"); ?>">Informasi Komunitas Koperasi</a></li>
							<li class="active"><a href="<?= base_url("user_informasi/informasi_tij"); ?>">Informasi Koperasi Tijarah</a></li>
							<li><a href="<?= base_url("user_informasi/informasi_tab"); ?>">Informasi Koperasi Tabarru</a></li>
						</ul>
					</li>
					<li><a href="<?= base_url('website/kontak') ?>">Kontak</a></li>
				</ul>
			</nav><!-- .nav-menu -->
		</div>
	</header><!-- End Header -->

	<br>
	<br>
	<!-- ======= Hero Section ======= -->

	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			background-color: #dbffc3;
			font-family: Open Sans, sans-serif;
		}

		img {
			width: 100%;
			border-radius: 8px;
			margin-bottom: 10px;
		}

		.box {
			width: 30%;
			float: left;
			margin: 50px 20px;
			background-color: #fff;
			padding: 15px;
			border-radius: 8px;
			box-shadow: 0 5px 5px rgba(0, 0, 0, 0, 15);

		}

		.box h4 {
			margin-bottom: 10px;
		}

		.box p {
			font-size: 15px;
			line-height: 28px;
			height: 90px;
			overflow: hidden;
			-webkit-transition: all ease 0.5s;
			-moz-transition: all ease 0.5s;
			transition: all ease 0.5s;
		}

		.box a {
			display: inline-block;
			color: #fff;
			background-color: #2196f3;
			text-decoration: none;
			padding: 10px 15px;
			border-radius: 8px;
			margin-top: 15px;
		}

		.box a:hover {
			box-shadow: 0 5px 5px rgba(0, 0, 0, 0, 2);
		}

		.box.showContent p {
			height: auto;
		}

		.box.showContent a.readmore-btn {
			background-color: red;
		}
	</style>

	<main id="main">
		<div class="section-title" data-aos="fade-up">
			<h5>Informasi Koperasi Tijarah</h5>
		</div>

		<?php foreach ($info_tij as $i) : ?>
			<div class="box">
				<img src="<?= base_url() . 'skom/assets/photo/' . $i->photo ?>" class="img-fluid" alt="" data-aos="zoom-in" style="width: 600px; height: 300px;">
				<hr>
				<h4><b><?= $i->judul ?></b> </h4>

				<p> <?= $i->desc_tij ?> </p>
				<a href="javascript:void();" class="readmore-btn">Read More</a>
			</div>
		<?php endforeach; ?>
	</main>

	<!-- End Hero -->
	<!-- </section> -->



	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<script>
		$(".readmore-btn").on('click', function() {
			$(this).parent().toggleClass("showContent");

			var replaceText = $(this).parent().hasClass("showContent") ? "Read Less" : "Read More";
			$(this).text(replaceText);
		});
	</script>

	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url() ?>assets1/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>assets1/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="<?= base_url() ?>assets1/vendor/php-email-form/validate.js"></script>
	<script src="<?= base_url() ?>assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url() ?>assets1/vendor/venobox/venobox.min.js"></script>
	<script src="<?= base_url() ?>assets1/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>assets1/vendor/aos/aos.js"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url() ?>assets1/js/main.js"></script>

	<script src="<?= base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>


	<script>
		$.noConflict();
		jQuery(document).ready(function($) {
			$('#table1').DataTable();
		});
		// Code that uses other library's $ can follow here.
	</script>
</body>

</html>