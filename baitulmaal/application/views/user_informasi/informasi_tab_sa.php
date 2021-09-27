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
				<!-- KOPERASI TABARRU -->
				
				<?php if ($this->session->userdata('role_id') == '3') {  ?>
					<li><a href="<?= base_url("user_tabarru/admin_k_tab"); ?>">Back</a></li>

				<?php } ?>
				
					<li><a href="<?= base_url("user_transaksi/transaksi_sa"); ?>">Transaksi</a></li>
					<li class="drop-down active"><a href="#">Informasi</a>
						<ul>
							<li><a href="<?= base_url("user_informasi/informasi_kom_sa"); ?>">Informasi Komunitas</a></li>
							<li><a href="<?= base_url("user_informasi/informasi_tij_sa"); ?>">Informasi Koperasi Tijarah</a></li>
							<li><a href="">Informasi Koperasi Tabarru</a></li>
						</ul>
					</li>
					<li><a href="<?= base_url("komunikasi_chat/komunikasi_sa"); ?>">Komunikasi</a></li>
					<li class="drop-down"><a href="#">Jabatan</a>
						<ul>
							<li><a href="">Profil Jabatan</a></li>
							
							<!-- <li><a href="">Riwayat Jabatan</a></li> -->
							
							<!-- KOPERASI TABARRU -->

							<?php if ($this->session->userdata('role_id') == '3') {  ?>
								<li><a href="<?= base_url("admin/dashboard"); ?>">Admin Koperasi Tabarru</a></li>

							<?php } ?>
						</ul>
					</li>
					<li><a href="<?= base_url("user_profile/profile_sa"); ?>">Profile Anggota</a></li>
					<li class="get-started"><a href="<?= base_url("welcome"); ?>">Logout</a></li>
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


			<?php foreach ($info_tab as $i) : ?>
				<div class="box">
					<img src="<?= base_url() . '../assets/photo/' . $i->photo ?>" class="img-fluid" alt="" data-aos="zoom-in" style="width: 600px; height: 300px;">
					<hr>
					<h4><b><?= $i->judul ?></b> </h4>
					
					<p> <?= $i->desc_tab ?> </p>
					<a href="javascript:void();" class="readmore-btn">Read More</a>
				</div>
			<?php endforeach; ?>

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