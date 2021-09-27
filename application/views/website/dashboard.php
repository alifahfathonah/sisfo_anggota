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
        <h1 class="text-light"><a href=""><span>KEANGGOTAAN KOPERASI</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active get-started"><a href="#hero">Beranda</a></li>
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
          <li><a href="<?= base_url('website/kontak') ?>">Kontak</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?= base_url('assets1/img/Backgrnd.jpg') ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url('assets1/img/Background2.png') ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url('assets1/img/Background3.png') ?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <!-- <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
          <h1>Sub Sistem Anggota</h1>
          <h2>Keanggotaan Koperasi</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="<?= base_url('assets/photo/user.png') ?>" class="img-fluid animated rounded-circle" alt="" style="width: 450px; height: 450px;">
        </div>
      </div>
    </div>

  </section>
   -->
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about1" class="about section-bg">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="<?= base_url() ?>assets/img/komunitas.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Komunitas Koperasi</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              <i class="icofont-ui-user-group"></i>
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <h4>Komunitas Koperasi</h4>
                <a class="btn badge-pill btn-info" href="<?= base_url("anggota_jabatan/komunitas"); ?>" role="button">Detail Komunitas Koperasi</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section id="about2" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="<?= base_url() ?>assets/img/bq.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Koperasi Tijarah</h3>
            <p data-aos="fade-up" data-aos-delay="100">
            <i class="icofont-ui-user-group"></i>
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <h4>Koperasi Tijarah</h4>
                <a class="btn badge-pill btn-info" href="<?= base_url("anggota_jabatan/koperasi_tijarah"); ?>" role="button">Detail Koperasi Tijarah</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section id="about3" class="about section-bg">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="<?= base_url() ?>assets/img/bm.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Koperasi Tabarru</h3>
            <p data-aos="fade-up" data-aos-delay="100">
            <i class="icofont-ui-user-group"></i>
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <h4>Koperasi Tabarru</h4>
                <a class="btn badge-pill btn-info" href="<?= base_url("anggota_jabatan/koperasi_tabarru"); ?>" role="button">Detail Koperasi Tabarru</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="profil" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h5>Profile</h5>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-12 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="icofont-company"></i></div>
              <br>
              <h4 class="title">Tentang Website</h4>
              <p>Sejarah panjang website berawal dari perancangan pada tahun 2021 dan di hosting pada tahun ........</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Informasi</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Informasi Komunitas Koperasi</li>
              <li data-filter=".filter-card">Informasi Koperasi Tijarah</li>
              <li data-filter=".filter-web">Informasi Koperasi Tabarru</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php $no = 1;
          foreach ($info_kom as $i) : ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?= base_url() . 'skom/assets/photo/' . $i->photo ?>" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="<?= base_url('user_informasi/informasi_kom') ?>" title="More Details"><i class="icofont-info"></i></a>
                </div>
                <div class="portfolio-info">
                  <h4>Informasi Komunitas</h4>
                  <p><?= $i->judul ?></p>
                </div>
              </div>
            </div>

          <?php endforeach; ?>

          <?php $no = 1;
          foreach ($info_tab as $i) : ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="<?= base_url() . 'skom/assets/photo/' . $i->photo ?>" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="<?= base_url('user_informasi/informasi_tab') ?>" title="More Details"><i class="icofont-info"></i></a>
                </div>
                <div class="portfolio-info">
                  <h4>Informasi Tabarru</h4>
                  <p><?= $i->judul ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

          <?php $no = 1;
          foreach ($info_tij as $i) : ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="<?= base_url() . 'skom/assets/photo/' . $i->photo ?>" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="<?= base_url('user_informasi/informasi_tij') ?>" title="More Details"><i class="icofont-info"></i></a>
                </div>
                <div class="portfolio-info">
                  <h4>Informasi Tijarah</h4>
                  <p><?= $i->judul ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
