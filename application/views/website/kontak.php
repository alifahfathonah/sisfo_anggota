<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?php echo $title ?></title>
	<meta content="" name="description">
	<meta content="" name="keywords">
	
	<style>
  html {
    font-size: 14px;
  }
  
  .container1 {
    font-size: 14px;
    color: #666666;
    font-family: "Open Sans";
    width: 80%;
    margin: auto;
  }

  body{
    background: #dbffc3;
  }
</style>
<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container-fluid d-flex ">

			<div class="logo mr-auto">
				<h1 class="text-light"><a href="">KONTAK</span></a></h1>
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
							<li><a href="<?= base_url("user_informasi/informasi_tij"); ?>">Informasi Koperasi Tijarah</a></li>
							<li><a href="<?= base_url("user_informasi/informasi_tab"); ?>">Informasi Koperasi Tabarru</a></li>
						</ul>
					</li>
          <li class="active"><a href="<?= base_url('website/kontak') ?>">Kontak</a></li>
        </ul>
      </nav><!-- .nav-menu -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<main id="main">

  <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Kontak</p>
        </div>

        <div class="row">

          <div class="col-lg-8 d-flex align-items-stretch" style="margin:auto" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Lokasi:</h4>
                <p>Manokwari, Papua Barat</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>koperasi@...com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Telephone:</h4>
                <p>+62.....</p>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->
	</main>

<style>
	#footer{
  height:50px;
  width: 100%;
  line-height:50px;
  background:rgb(90, 90, 90);
  color:#fff;

  position:fixed;
  bottom:0px;
  text-align: center;
}


</style>

