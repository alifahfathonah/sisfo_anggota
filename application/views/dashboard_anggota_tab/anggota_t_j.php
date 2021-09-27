<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Anggota Tanpa Jabatan</title>
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

  <!-- =======================================================
  * Template Name: eBusiness - v2.2.1
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
          <li class="active"><a href="#header">Home</a></li>
          <li class="drop-down"><a href="#">Layanan & Produk</a>
            <ul>
              <li><a href="<?= base_url('anggota_t_j_tab/simpanan') ?>">Simpanan</a></li>
              <li><a href="<?= base_url('anggota_t_j_tab/toko_emas') ?>">Toko Emas</a></li>
              <li class="drop-down"><a href="#">Pembiayaan</a>
                <ul>
                  <li><a href="<?= base_url('anggota_t_j_tab/profil_pembiayaan') ?>">Profil Pembiayaan</a></li>
                  <li><a href="<?= base_url('anggota_t_j_tab/riwayat_angsuran_pembiayaan') ?>">Riwayat Angsuran Pembiayaan</a></li>
                </ul>
              </li>
              <li><a href="<?= base_url('anggota_t_j_tab/pinjaman_emas') ?>">Pinjaman Emas</a></li>
              <li><a href="<?= base_url('anggota_t_j_tab/riwayat_angsuran_tabarru') ?>">Riwayat Angsuran Tabarru</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Komunitas</a>
            <ul>
              <li><a href="<?= base_url("anggota_t_j_tab/kuttab"); ?>">Kuttab</a></li>
              <li><a href="<?= base_url("anggota_t_j_tab/pelatihan_usaha"); ?>">Pelatihan Usaha</a></li>
              <li><a href="<?= base_url("anggota_t_j_tab/agenda_koperasi"); ?>">Agenda Koperasi</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Tijarah</a>
            <ul>
              <li><a href="<?= base_url("anggota_t_j_tab/usaha_jual_beli_emas"); ?>">Usaha Jual Beli Emas</a></li>
              <li><a href="<?= base_url("anggota_t_j_tab/usaha_pembiayaan"); ?>">Usaha Pembiayaan</a></li>
              <li><a href="<?= base_url("anggota_t_j_tab/keuangan_tijarah"); ?>">Laporan Keuangan Tijarah</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Tabarru</a>
            <ul>
              <li><a href="<?= base_url("anggota_t_j_tab/usaha_titipan_uang_emas"); ?>">Usaha Titipan Uang & Emas</a></li>
              <li><a href="<?= base_url("anggota_t_j_tab/usaha_pinjam_emas"); ?>">Usaha Pinjam Emas</a></li>
              <li><a href="<?= base_url("anggota_t_j_tab/laporan_keuangan_tabarru"); ?>">Laporan Keuangan Tabarru</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('anggota_t_j_tab/profil') ?>">Profil</a></li>
          <li><a href="<?= base_url('website') ?>" onclick="return confirm('Apakah anda yakin ingin LOG OUT ?')">LOG OUT</a></li>

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
                  <h1 class="title2">ANGGOTA KOPERASI</h1>
                  <h1 class="title2">SELAMAT DATANG <?= $this->session->userdata('nama_anggota') ?></h1>
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
                  <h1 class="title2">ANGGOTA KOPERASI</h1>
                  <h1 class="title2">SELAMAT DATANG <?= $this->session->userdata('nama_anggota') ?></h1>
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
                  <h1 class="title2">ANGGOTA KOPERASI</h1>
                  <h1 class="title2">SELAMAT DATANG <?= $this->session->userdata('nama') ?></h1>
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
              <h2>INFORMASI</h2>
            </div>
          </div>
        </div>
        <div class="row">
        </div>
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Informasi Harga Emas
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                Melansir laman logammulia.com, Minggu (12/9/2021), pukul 07.53 WIB, mayoritas ukuran emas Antam masih tersedia.

                Melalui portal logammulia.com, konsumen bisa memeriksa langsung harga emas Antam. BUMN ini menjual emas dengan ukuran mulai 0,5 gram hingga 1.000 gram.

                Antam tak hanya menyediakan emas dalam bentuk batangan. Tetapi ada koin dinar, dirham maupun emas koleksi lainnya.

                Untuk harga emas Antam bercorak batik dengan ukuran 10 gram ditetapkan Rp 9.640.000. Sementara untuk ukuran 20 gram dijual Rp 18.640.000.

                Harga emas Antam sudah termasuk PPh 22 sebesar 0,9 persen. Jika menyertakan Nomor Pokok Wajib Pajak (NPWP) dapat memperoleh potongan pajak lebih rendah (0,45 persen).<br>
                <b><br>
                  * Pecahan 0,5 gram Rp 514.500
                  <br>
                  * Pecahan 1 gram Rp 929.000
                  <br>
                  * Pecahan 2 gram Rp 1.798.000
                  <br>
                  * Pecahan 3 gram Rp 2.672.000
                  <br>
                  * Pecahan 5 gram Rp 4.420.000
                  <br>
                  * Pecahan 10 gram Rp 8.785.000
                  <br>
                  * Pecahan 25 gram Rp 21.837.000
                  <br>
                  * Pecahan 50 gram Rp 43.595.000
                  <br>
                  * Pecahan 100 gram Rp 87.112.000
                  <br>
                  * Pecahan 250 gram Rp 217.515.000
                  <br>
                  * Pecahan 500 gram Rp 434.820.000
                  <br>
                  * Pecahan 1.000 gram Rp 869.600.000.
                </b>
              </div>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Informasi Pembiayaan
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                Pembiayaan Penyediaan Barang atau yang kerap disebut sebagai pembiayaan inventaris adalah jalur kredit yang didukung aset, baik yang bergulir atau pinjaman jangka
                pendek yang dibuat untuk perusahaan sehingga dapat membeli produk untuk dijual. Produk-produk tersebut, atau persediaan, berfungsi sebagai jaminan untuk pinjaman
                jika bisnis tidak menjual produk-produknya dan tidak dapat membayar kembali pinjaman. Pendanaan inventaris sangat berguna untuk bisnis yang harus membayar pemasok
                mereka dalam periode yang lebih singkat daripada yang mereka butuhkan untuk menjual inventaris mereka kepada pelanggan. Ini juga memberikan solusi untuk fluktuasi
                musiman dalam arus kas dan dapat membantu bisnis mencapai volume penjualan yang lebih tinggi - misalnya, dengan memungkinkan bisnis memperoleh inventaris tambahan
                untuk dijual selama musim liburan.
              </div>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Informasi Titipan Uang & Emas
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Titipan Emas merupakan layanan penitipan perhiasan emas atau logam mulia di Pegadaian. Berbeda dengan Safe Deposit Box (SDB), titipan emas memberikan
                fasilitas penyimpanan dengan tambahan kemudahan pada saat memerlukan dana tunai. Setiap emas yang dititipkan baik perhiasan maupun emas batangan langsung
                ditaksir dan dihitung plafon pinjaman sesuai nilai barang sehingga dapat langsung diproses gadai pada saat dibutuhkan.
              </div>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Informasi Pinjaman Emas
                </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                <b>Syarat Utama Menjadi Penerima Pinjaman</b>
                <br>
                <br>1. Berbadan Hukum
                <br>Berbadan Hukum PT, CV, atau UD.
                <br>
                <br>2. Tidak Masuk DHN
                <br>Baik perusahaan maupun pemilik perusahaan tidak pernah masuk dalam Daftar Hitam Nasional (DHN).
                <br>
                <br>3. Minimal Umur Usaha
                <br>Telah menjalankan usaha minimal 2 tahun.
                <br>
                <br>4. Memiliki Hubungan Bisnis
                <br>Memiliki hubungan bisnis utama dengan perusahaan yang dikenal luas sebagai transaksi yang mendasari.
                <br>
                <br>5. Kelengkapan Dokumen
                <br>Memiliki Kelengkapan Dokumen seperti Akta, SIUP, TDP, NPWP, dan Laporan Keuangan.
                <br>
                <br>6. Memiliki Rekening Aktif dan Cek Pribadi
                <br>Baik perusahaan maupun pemilik perusahaan memiliki rekening aktif di bank komersil di indonesia. Pemilik perusahaan memiliki cek pribadi.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Profile</h2>
            </div>
          </div>
        </div>
        <div class="row">
        
          <div class="col-md-6 offset-md-3 col-sm-12 col-xs-12">
            <div class="pri_table_list active">
              <h3>Data KTP <br /> <span>ID Anggota : <?= $this->session->userdata('nik') ?></span></h3>
              <ol>
                <li>Nama : <b><?= $this->session->userdata('nama') ?></b></li>
                <li>Tempat / Tanggal Lahir : <b><?= $this->session->userdata('tempat_lahir') ?> / <?= $this->session->userdata('tanggal_lahir') ?></b></li>
                <li>Jenis Kelamin : <b><?= $this->session->userdata('jk') ?></b></li>
                <li>Alamat : <b><?= $this->session->userdata('alamat') ?></b></li>
                <li>RT / RW : <b><?= $this->session->userdata('rt') ?> / <?= $this->session->userdata('rw') ?></b></li>
                <li>Kel / Desa : <b><?= $this->session->userdata('kel_desa') ?></b></li>
                <li>kecamatan : <b><?= $this->session->userdata('kecamatan') ?></b></li>
                <li>Agama : <b><?= $this->session->userdata('agama') ?></b></li>
                <li>Status Kawin : <b><?= $this->session->userdata('status_kawin') ?></b></li>
                <li>kewarganegaraan : <b><?= $this->session->userdata('kewarganegaraan') ?></b></li>
              </ol>
            </div>
          </div>

        </div>
      </div>
    </div> -->



    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
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
                  <p>
                    Lokasi :<br>
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

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong><span>Sisfo_Anggota 2021</span></strong>. All Rights Reserved
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets_dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets_dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets_dashboard/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url() ?>assets_dashboard/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>assets_dashboard/vendor/appear/jquery.appear.js"></script>
  <script src="<?= base_url() ?>assets_dashboard/vendor/knob/jquery.knob.js"></script>
  <script src="<?= base_url() ?>assets_dashboard/vendor/parallax/parallax.js"></script>
  <script src="<?= base_url() ?>assets_dashboard/vendor/wow/wow.min.js"></script>
  <script src="<?= base_url() ?>assets_dashboard/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>assets_dashboard/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
  <script src="<?= base_url() ?>assets_dashboard/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets_dashboard/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets_dashboard/js/main.js"></script>

</body>

</html>