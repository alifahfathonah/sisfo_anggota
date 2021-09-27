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
                    <li class="drop-down"><a href="#">Tentang Kami</a>
                        <ul>
                            <li><a href="<?= base_url('website/kata_pengantar') ?>">Kata Pengantar</a></li>
                            <li><a href="<?= base_url('website/latar_belakang') ?>">Latar Belakang</a></li>
                            <li><a href="<?= base_url('website/visi_misi') ?>">VISI MISI</a></li>
                            <li><a href="<?= base_url('website/struktur_organisasi') ?>">Struktur Organisasi</a></li>
                            <!-- <li><a href="<?= base_url('website/anggaran_r_tangga') ?>">Anggaran Rumah Tangga</a></li> -->
                        </ul>
                    </li>
                    <li class="drop-down active"><a href="#">Layanan</a>
                        <ul>
                            <li><a href="<?= base_url('website/simpanan') ?>">Simpanan</a></li>
                            <li><a href="<?= base_url('website/pembiayaan') ?>">Pembiayaan</a></li>
                            <li class="active"><a href="<?= base_url('website/toko_emas') ?>">Toko Emas</a></li>
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
                                    <h2 class="title3"><b>Toko Emas</b></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Blog Header -->

        <div id="blog" class="blog-area">
            <div class="blog-inner area-padding">
                <div class="blog-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Toko Emas</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start Left Blog -->
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="">
                                        <img src="<?= base_url() ?>assets1/img/toko_emas.jpg" alt="">
                                    </a>
                                </div>
                                <br><br><br><br>
                                <div class="blog-text-tokoemas">
                                    <h4>
                                        <a href="">Emas Antam</a>
                                    </h4>
                                    <p>
                                    Toko emas merupakan Perusahaan yang bergerak dalam bidang jual beli perhiasan emas yang memiliki karakteristik bisnis yang spesifik. Kegiatan
                                    bisnis yang ada antara lain pembelian emas darisupplier maupun pelanggan, penyimpanan emas, baik berupa emas batangan maupun emas berdisain,
                                    penjualan emas, dan sistem gadai. Pada penelitian ini, dirancang sistem informasi untuk memenuhi kebutuhan administrasi dari proses transaksi
                                    emas tersebut termasuk mengakomodir pergerakan emas secara FIFO.
                                    </p>
                                </div>

                            </div>
                            <!-- Start single blog -->
                        </div>
                        <!-- End Left Blog-->
                        <!-- Start Left Blog -->
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="">
                                        <img src="<?= base_url() ?>assets1/img/toko_emas.jpg" alt="">
                                    </a>
                                </div>
                                <br><br><br><br>
                                <div class="blog-text-tokoemas">
                                    <h4>
                                        <a href="">Emas Antam</a>
                                    </h4>
                                    <p>
                                    Toko emas merupakan Perusahaan yang bergerak dalam bidang jual beli perhiasan emas yang memiliki karakteristik bisnis yang spesifik. Kegiatan
                                    bisnis yang ada antara lain pembelian emas darisupplier maupun pelanggan, penyimpanan emas, baik berupa emas batangan maupun emas berdisain,
                                    penjualan emas, dan sistem gadai. Pada penelitian ini, dirancang sistem informasi untuk memenuhi kebutuhan administrasi dari proses transaksi
                                    emas tersebut termasuk mengakomodir pergerakan emas secara FIFO.
                                    </p>
                                </div>

                            </div>
                            <!-- Start single blog -->
                        </div>
                        <!-- End Left Blog-->
                        <!-- Start Left Blog -->
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="">
                                        <img src="<?= base_url() ?>assets1/img/toko_emas.jpg" alt="">
                                    </a>
                                </div>
                                <br><br><br><br>
                                <div class="blog-text-tokoemas">
                                    <h4>
                                        <a href="">Emas Antam</a>
                                    </h4>
                                    <p>
                                    Toko emas merupakan Perusahaan yang bergerak dalam bidang jual beli perhiasan emas yang memiliki karakteristik bisnis yang spesifik. Kegiatan
                                    bisnis yang ada antara lain pembelian emas darisupplier maupun pelanggan, penyimpanan emas, baik berupa emas batangan maupun emas berdisain,
                                    penjualan emas, dan sistem gadai. Pada penelitian ini, dirancang sistem informasi untuk memenuhi kebutuhan administrasi dari proses transaksi
                                    emas tersebut termasuk mengakomodir pergerakan emas secara FIFO.
                                    </p>
                                </div>

                            </div>
                            <!-- Start single blog -->
                        </div>
                        <!-- End Left Blog-->
                        <!-- Start Left Blog -->
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="">
                                        <img src="<?= base_url() ?>assets1/img/toko_emas.jpg" alt="">
                                    </a>
                                </div>
                                <br><br><br><br>
                                <div class="blog-text-tokoemas">
                                    <h4>
                                        <a href="">Emas Antam</a>
                                    </h4>
                                    <p>
                                    Toko emas merupakan Perusahaan yang bergerak dalam bidang jual beli perhiasan emas yang memiliki karakteristik bisnis yang spesifik. Kegiatan
                                    bisnis yang ada antara lain pembelian emas darisupplier maupun pelanggan, penyimpanan emas, baik berupa emas batangan maupun emas berdisain,
                                    penjualan emas, dan sistem gadai. Pada penelitian ini, dirancang sistem informasi untuk memenuhi kebutuhan administrasi dari proses transaksi
                                    emas tersebut termasuk mengakomodir pergerakan emas secara FIFO.
                                    </p>
                                </div>

                            </div>
                            <!-- Start single blog -->
                        </div>
                        <!-- End Left Blog-->
                    </div>
                </div>
            </div>
        </div><!-- End Blog Section -->

    </main><!-- End #main -->