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
                    <li><a href="<?= base_url('anggota_t_j') ?>">Home</a></li>
                    <li class="drop-down active"><a href="#">Layanan & Produk</a>
                        <ul>
                            <li><a href="<?= base_url('anggota_t_j/simpanan') ?>">Simpanan</a></li>
                            <li><a href="<?= base_url('anggota_t_j/toko_emas') ?>">Toko Emas</a></li>
                            <li class="drop-down"><a href="#">Pembiayaan</a>
                                <ul>
                                    <li><a href="<?= base_url('anggota_t_j/profil_pembiayaan') ?>">Profil Pembiayaan</a></li>
                                    <li><a href="<?= base_url('anggota_t_j/riwayat_angsuran_pembiayaan') ?>">Riwayat Angsuran Pembiayaan</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('anggota_t_j/pinjaman_emas') ?>">Pinjaman Emas</a></li>
                            <li class="active"><a href="<?= base_url('anggota_t_j/riwayat_angsuran_tabarru') ?>">Riwayat Angsuran Tabarru</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="#">Komunitas</a>
                        <ul>
                            <li><a href="<?= base_url("anggota_t_j/kuttab"); ?>">Kuttab</a></li>
                            <li><a href="<?= base_url("anggota_t_j/pelatihan_usaha"); ?>">Pelatihan Usaha</a></li>
                            <li><a href="<?= base_url("anggota_t_j/agenda_koperasi"); ?>">Agenda Koperasi</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="#">Tijarah</a>
                        <ul>
                            <li><a href="<?= base_url("anggota_t_j/usaha_jual_beli_emas"); ?>">Usaha Jual Beli Emas</a></li>
                            <li><a href="<?= base_url("anggota_t_j/usaha_pembiayaan"); ?>">Usaha Pembiayaan</a></li>
                            <li><a href="<?= base_url("anggota_t_j/keuangan_tijarah"); ?>">Laporan Keuangan Tijarah</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="#">Tabarru</a>
                        <ul>
                            <li><a href="<?= base_url("anggota_t_j/usaha_titipan_uang_emas"); ?>">Usaha Titipan Uang & Emas</a></li>
                            <li><a href="<?= base_url("anggota_t_j/usaha_pinjam_emas"); ?>">Usaha Pinjam Emas</a></li>
                            <li><a href="<?= base_url("anggota_t_j/laporan_keuangan_tabarru"); ?>">Laporan Keuangan Tabarru</a></li>
                        </ul>
                    </li>

                    <li><a href="<?= base_url('anggota_t_j/profil') ?>">Profil</a></li>
                    <li><a href="<?= base_url('website') ?>" onclick="return confirm('Apakah anda yakin ingin LOG OUT ?')">LOG OUT</a></li>

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
                                    <h1 class="title2">Anggota</h1>
                                </div>
                                <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                                    <h2 class="title3"><b>Riwayat Angsuran Tabarru</b></h2>
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
                                            <a href="#"><b>Riwayat Angsuran Tabarru</b></a>
                                        </h4>
                                        <p>
                                            .......
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