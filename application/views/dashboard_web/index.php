<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $title ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets_dashboard/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets_dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets_dashboard/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets_dashboard/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets_dashboard/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets_dashboard/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets_dashboard/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets_dashboard/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets_dashboard/css/style.css" rel="stylesheet">


</head>

<body data-spy="scroll" data-target="#navbar-example">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <!-- <h1 class="text-light"><a href="">KOPERASI <span>SYARIAH</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="<?= base_url('website') ?>"><img src="<?= base_url() ?>assets_dashboard/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <!-- <li class="active"><a href="#header">Home</a></li> -->
          <li class="active"><a href="<?= base_url('') ?>">Koperasi Syariah</a></li>
          <li class="drop-down"><a href="#">Tentang Kami</a>
            <ul>
              <li><a href="<?= base_url('website/kata_pengantar') ?>">Kata Pengantar</a></li>
              <li><a href="<?= base_url('website/latar_belakang') ?>">Latar Belakang</a></li>
              <li><a href="<?= base_url('website/visi_misi') ?>">VISI MISI</a></li>
              <li><a href="<?= base_url('website/struktur_organisasi') ?>">Struktur Organisasi</a></li>
              <!-- <li><a href="<?= base_url('website/anggaran_r_tangga') ?>">Anggaran Rumah Tangga</a></li> -->
            </ul>
          </li>
          <li class="drop-down"><a href="#">Layanan</a>
            <ul>
              <li><a href="<?= base_url('website/simpanan') ?>">Simpanan</a></li>
              <li><a href="<?= base_url('website/pembiayaan') ?>">Pembiayaan</a></li>
              <li><a href="<?= base_url('website/toko_emas') ?>">Toko Emas</a></li>
              <li><a href="<?= base_url('website/pelayanan_pinjaman') ?>">Pelayanan Pinjaman</a></li>
              <li><a href="<?= base_url('website/pelayanan_jaminan') ?>">Pelayanan Jaminan</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Berita</a>
            <ul>
              <li><a href="<?= base_url("website/info_kom"); ?>">Berita Komunitas Koperasi</a></li>
              <li><a href="<?= base_url("website/info_tij"); ?>">Berita Koperasi Tijarah</a></li>
              <li><a href="<?= base_url("website/info_tab"); ?>">Berita Koperasi Tabarru</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Publikasi</a>
            <ul>
              <li><a href="<?= base_url('website/laporan_resmi') ?>">Laporan Resmi</a></li>
              <!-- <li><a href="<?= base_url('website/grafik_keuntungan') ?>">Grafik Keuntungan</a></li>
              <li><a href="<?= base_url('website/laporan_lainnya') ?>">Laporan Lainnya</a></li> -->
            </ul>
          </li>
          <li><a href="<?= base_url('website/kontak') ?>">Kontak</a></li>
          <li class="drop-down"><a href="#">LOG IN</a>
            <ul>
              <li><a href="<?= base_url('skom/auth') ?>">Komunitas Koperasi</a></li>
              <li><a href="<?= base_url('baitulqirad/login') ?>">Koperasi Tijarah</a></li>
              <li><a href="<?= base_url('baitulmaal/login') ?>">Koperasi Tabarru</a></li>
              <li><a href="<?= base_url('login') ?>">Anggota</a></li>
              <li class="drop-down"><a href="#">Pendaftaran Anggota</a>
                <ul>
                  <li><a href="<?= base_url('website/persyaratan_a_b') ?>">Persyaratan Anggota Baru</a></li>
                  <li><a href="<?= base_url('website/cara_mendaftar_a_b') ?>">Cara mendaftar Anggota Baru</a></li>
                  <li><a href="<?= base_url('website/pendaftaran_a_b') ?>">Pendaftaran Anggota Baru</a></li>
                </ul>
              </li>
            </ul>
          </li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Slider Section ======= -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="<?= base_url('assets1/img/Backgrnd.jpg') ?>" alt="" title="#slider-direction-1" />
        <img src="<?= base_url('assets1/img/Background2.png') ?>" alt="" title="#slider-direction-2" />
        <img src="<?= base_url('assets1/img/Background3.png') ?>" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInDown animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">KOPERASI SYARIAH</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h1 class="title2">Koperasi Syariah hadir untuk memberikan solusi ekonomi secara islami khususnya bagi para anggota dan umumnya bagi ummat islam secara keseluruhan</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?= base_url('skom/auth') ?>">Komunitas</a>
                  <a class="ready-btn right-btn page-scroll" href="<?= base_url('baitulqirad/login') ?>">Tijarah</a>
                  <a class="ready-btn right-btn page-scroll" href="<?= base_url('baitulmaal/login') ?>">Tabarru</a>
                  <a class="ready-btn right-btn page-scroll" href="<?= base_url('login') ?>">Anggota</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">KOPERASI SYARIAH</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Koperasi Syariah hadir untuk memberikan solusi ekonomi secara islami khususnya bagi para anggota dan umumnya bagi ummat islam secara keseluruhan</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?= base_url('skom/auth') ?>">Komunitas</a>
                  <a class="ready-btn right-btn page-scroll" href="<?= base_url('baitulqirad/login') ?>">Tijarah</a>
                  <a class="ready-btn right-btn page-scroll" href="<?= base_url('baitulmaal/login') ?>">Tabarru</a>
                  <a class="ready-btn right-btn page-scroll" href="<?= base_url('login') ?>">Anggota</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">KOPERASI SYARIAH</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Koperasi Syariah hadir untuk memberikan solusi ekonomi secara islami khususnya bagi para anggota dan umumnya bagi ummat islam secara keseluruhan</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?= base_url('skom/auth') ?>">Komunitas</a>
                  <a class="ready-btn right-btn page-scroll" href="<?= base_url('baitulqirad/login') ?>">Tijarah</a>
                  <a class="ready-btn right-btn page-scroll" href="<?= base_url('baitulmaal/login') ?>">Tabarru</a>
                  <a class="ready-btn right-btn page-scroll" href="<?= base_url('login') ?>">Anggota</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Slider -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Komunitas Koperasi</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="<?= base_url() ?>assets/img/komunitas.png" class="img-fluid" alt="" data-aos="zoom-in">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">Komunitas Koperasi</h4>
                </a>
                <p>
                  Sistem Komunitas dibangun dengan menerapkan prinsip Syariah dan membantu dalam berkomunikasi dan penyampaian informasi di antara keanggotaan koperasi.
                  Sistem Komunitas yang menerapkan prinsip syariah islam merupakan sarana yang dapat digunakan dalam mendekatkan hubungan antara koperasi dan keanggotaan,
                  mempercepat proses dalam memanajemen data dan menyajikan informasi bagi pihak pengambil kebijakan serta keanggotaan komunitas koperasi.
                </p>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->

    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Koperasi Tijarah</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="<?= base_url() ?>assets/img/BQ.png" class="img-fluid" alt="" data-aos="zoom-in">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">Koperasi Tijarah</h4>
                </a>
                <p>
                  Koperasi tijarah adalah wadah syirkah/musyarakah/kerjasama ekonomi keanggotaan dan lembaga yang mengelola usaha bersama anggota yang bersifat tijarah.
                  Dalam koperasi tijarah mengenal beberapa akad berupa Kerjasama(Musyarakah), Kemitraan(mudharabah), jual dan beli(Ba’i).
                  Koperasi tijarah fokusnya adalah urusan mencari keuntungan finansial, usaha jual beli emas batangan. Koperasi tijarah menjual emas batangan dengan variasi bobot. Hasil usaha koperasi tijarah dibagi dengan prinsip profit sharing menjadi 4 bagian, yaitu 30% sebagai sodaqoh kepada koperasi tabarru, 20% digunakan untuk menambah nilai iuran anggota, dan 50% diserahkan kepada amggota dengan dimasukan ke dalam rekening titipan milik anggota.
                </p>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div>

    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Koperasi Tabarru</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="<?= base_url() ?>assets/img/bm.png" class=" img-fluid" alt="" data-aos="zoom-in">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">Koperasi Tabarru</h4>
                </a>
                <p>
                  Koperasi tabarru ialah sebuah lembaga kerja sama antar komunitas yang bertujuan melakukan kebaikan, tidak untuk mencari keuntungan komersial dan hanya mengharapkan balasan dari Allah SWT semata seperti Zakat, Infak dan Sedekah. Zakat terbagi atas zakat fitrah yang wajib dilaksanakan oleh setiap umat muslim seperti pada bulan suci ramadhan dan zakat maal adalah harta yang diperoleh dari usahanya yang telah mencapai nisab. Infak sendiri berarti perbuatan baik yang dilakukan dengan mengeluarkan sebagian harta seperti menyumbang pada anak yatim piatu, fakir, miskin. Sedangkan sedekah ialah semua kegiatan baik yang kita lakukan yang tidak hanya bersifat material tetapi juga bersifat jasa bahkan senyum dengan ikhlah kepada orang lain juga termaksud sedekah.
                </p>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div>

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Berita</h2>
            </div>
          </div>
        </div>
        <div class="row wesome-project-1 fix">
          <!-- Start Portfolio -page -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
                <li>
                  <a href="#" data-filter=".komunitas">Berita Komunitas Koperasi</a>
                </li>
                <li>
                  <a href="#" data-filter=".tijarah">Berita Koperasi Tijarah</a>
                </li>
                <li>
                  <a href="#" data-filter=".tabarru">Berita Koperasi Tabarru</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row awesome-project-content">
          <!-- single-awesome-project start -->
          <?php $no = 1;
          foreach ($info_kom as $i) : ?>
            <div class="col-md-4 col-sm-4 col-xs-12 komunitas">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <a href="#"><img src="<?= base_url() . 'skom/assets/photo/' . $i->photo ?>" alt="" /></a>
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a href="<?= base_url('website/info_kom') ?>">
                        <h4>Informasi Komunitas</h4>
                        <span><?= $i->judul ?></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <?php $no = 1;
          foreach ($info_tij as $i) : ?>
            <div class="col-md-4 col-sm-4 col-xs-12 tijarah">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <a href="#"><img src="<?= base_url() . 'skom/assets/photo/' . $i->photo ?>" alt="" /></a>
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a href="<?= base_url('website/info_tij') ?>">
                        <h4>Informasi Tijarah</h4>
                        <span><?= $i->judul ?></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <?php $no = 1;
          foreach ($info_tab as $i) : ?>
            <div class="col-md-4 col-sm-4 col-xs-12 tabarru">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <a href="#"><img src="<?= base_url() . 'skom/assets/photo/' . $i->photo ?>" alt="" /></a>
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a href="<?= base_url('website/info_tab') ?>">
                        <h4>Informasi Tabarru</h4>
                        <span><?= $i->judul ?></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- single-awesome-project end -->
        </div>
      </div>
    </div><!-- End Portfolio Section -->



    <!-- ======= Contact Section ======= -->
    <div id="contact" class="bout-area area-padding">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Kontak Pengurus Anggota</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-mobile"></i>
                  <p><b>
                      Telephone :</b><br>
                    <span>+621343159148</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-envelope-o"></i>
                  <p><b>
                      Email :</b><br>
                    <span>anggotakoperasi2021@gmail.com</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-map-marker"></i>
                  <p><b>
                      Lokasi :</b><br>
                    <span>Manokwari, Papua Barat</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->