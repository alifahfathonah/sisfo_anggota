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
        <a href="<?= base_url('website') ?>"><img src="<?= base_url() ?>assets_dashboard/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="<?= base_url('') ?>">Koperasi Syariah</a></li>
          <li class="drop-down active"><a href="#">Tentang Kami</a>
            <ul>
              <li class="active"><a href="<?= base_url('website/kata_pengantar') ?>">Kata Pengantar</a></li>
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

  <main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
      <div class="home-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                  <h1 class="title2">Koperasi Syariah</h1>
                </div>
                <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                  <h2 class="title3"><b>Kata Pengantar</b></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> -->
          <div class="col-md-12 col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="#"><b>Kata Pengantar</b></a>
                    </h4>
                    <p>Bismilahirrahmanirrahim.</p>
                        <p><i>Assalamu’alaikum Warahmatullahi Wabarakatuh</i></p>
                        <p>Pertama-tama marilah kita panjatkan puji syukur kehadirat Allah SWT, karena atas segala limpahan rahmat dan hidayah-Nya, website Koperasi Syariah ini dapat dipersembahkan kepada masyarakat perkoperasian. Website ini merupakan media informasi dan komunikasi antara Koperasi Syariah dengan pihak-pihak yang terkait.</p>
                        <p>Diharapkan keberadaan website Koperasi Syariah ini akan mempercepat terwujudnya tujuan pendirian koperasi, yaitu memajukan kesejahteraan anggota koperasi pada khususnya dan masyarakat pada umumnya, serta ikut membangun tatanan perekonomian nasional dalam rangka mewujudkan masyarakat yang maju, adil dan makmur berdasarkan Pancasila dan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 (Undang-Undang Nomor 25 Tahun 1992 tentang Koperasi).</p>
                        <p>Melalui website dan sarana elektronik lainnya yang dimiliki Koperasi Syariah, diharapkan para anggota koperasi dapat menerima informasi secara aktual, akurat, dan cepat mengenai kondisi dan perkembangan koperasi. Disamping itu dengan sarana ini, umpan balik dari para anggota koperasi untuk menyampaikan saran, kritik, serta manfaat keberadaan koperasi, akan lebih cepat disampaikan kepada pengurus koperasi, sehingga jika ditemukan permasalahan maka pemecahannya dapat segera diselesaikan.</p>
                        <p>Sehubungan dengan hal tersebut di atas, dengan diresmikannya website Koperasi Syariah ini, kepada programmer dan pihak lainnya yang membantu, kami mengucapkan syukur, alhamdulillah jaza kummulohu khoiro, atas inisiatif, kerja keras, serta berbagai upayanya sehingga website ini terwujud. Kami juga mengharapkan koreksi dan saran perbaikan dari berbagai pihak terhadap tampilan dan isi website ini, sehingga media komunikasi ini dapat tampil lebih baik lagi sesuai harapan bapak/ibu/saudara.</p>
                        <p>Mudah-mudahan Allah SWT selalu memberikan keselamatan, keamanan, kelancaran dan kebarokahan dalam mengembangkan dan memajukan Koperasi Syariah ini.</p>
                        <p><i>Wa’alaikumusaalam Warahmatullahi Wabarakatuh</i></p>
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Page -->

  </main><!-- End #main -->