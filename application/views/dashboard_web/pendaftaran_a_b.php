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

    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link href="<?= base_url() ?>assets_dashboard/css/profile.css" rel="stylesheet">


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
                    <li class="drop-down active"><a href="#">LOG IN</a>
                        <ul>
                            <li><a href="<?= base_url('skom/auth') ?>">Komunitas Koperasi</a></li>
                            <li><a href="<?= base_url('baitulqirad/login') ?>">Koperasi Tijarah</a></li>
                            <li><a href="<?= base_url('baitulmaal/login') ?>">Koperasi Tabarru</a></li>
                            <li><a href="<?= base_url('login') ?>">Anggota</a></li>
                            <li class="drop-down active"><a href="#">Pendaftaran Anggota</a>
                                <ul>
                                    <li><a href="<?= base_url('website/persyaratan_a_b') ?>">Persyaratan Anggota Baru</a></li>
                                    <li><a href="<?= base_url('website/cara_mendaftar_a_b') ?>">Cara mendaftar Anggota Baru</a></li>
                                    <li class="active"><a href="<?= base_url('website/pendaftaran_a_b') ?>">Pendaftaran Anggota Baru</a></li>
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
                                    <h2 class="title3"><b>Pendaftaran Anggota Baru</b></h2>
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
                                <h2>Pendaftaran Anggota Baru</h2>
                            </div>
                        </div>
                    </div>

                    <div class="page-content page-container" id="page-content">
                        <div class="padding">
                            <div class="row container d-flex justify-content-center">
                                <div class="col-xl-10 col-md-12">
                                    <div class="card user-card-full">
                                        <div class="row m-l-0 m-r-0">
                                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                                <div class="card-block text-center text-white">
                                                    <div class="m-b-25"> <img src="<?= base_url() ?>assets/img/komunitas.png" class="img-radius" alt="User-Profile-Image" style="width: 100px; height: 100px;" style="width: 100px; height: 100px;"> </div>
                                                    <h6 class="f-w-600">Admin Komunitas Koperasi</h6>

                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-block">
                                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Informasi Data Admin</h6>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">Email :</p>
                                                            <a href="mailto: m.komunitaskoperasi@gmail.com">m.komunitaskoperasi@gmail.com</a>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">No. Telp / WA : </p>
                                                            <a href="https://api.whatsapp.com/send?phone=6282199040328&text=Admin%20Komunitas%20Koperasi">+6282199040328</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-10 col-md-12">
                                    <div class="card user-card-full">
                                        <div class="row m-l-0 m-r-0">
                                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                                <div class="card-block text-center text-white">
                                                    <div class="m-b-25"> <img src="<?= base_url() ?>assets/img/BQ.png" class="img-radius" alt="User-Profile-Image" style="width: 100px; height: 100px;"> </div>
                                                    <h6 class="f-w-600">Admin Koperasi Tijarah</h6>

                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-block">
                                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Informasi Data Admin</h6>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">Email :</p>
                                                            <a href="mailto: ktijarahkoperasi@gmail.com">ktijarahkoperasi@gmail.com</a>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">No. Telp / WA : </p>
                                                            <a href="https://api.whatsapp.com/send?phone=6282198931489&text=Admin%20Koperasi%20Tijarah">+6282198931489</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-10 col-md-12">
                                    <div class="card user-card-full">
                                        <div class="row m-l-0 m-r-0">
                                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                                <div class="card-block text-center text-white">
                                                    <div class="m-b-25"> <img src="<?= base_url() ?>assets/img/bm.png" class="img-radius" alt="User-Profile-Image" style="width: 100px; height: 100px;"> </div>
                                                    <h6 class="f-w-600">Admin Koperasi Tabarru</h6>

                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-block">
                                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Informasi Data Admin</h6>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">Email :</p>
                                                            <a href="mailto: Mdhti2017@gmail.com">Mdhti2017@gmail.com</a>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">No. Telp / WA : </p>
                                                            <a href="https://api.whatsapp.com/send?phone=6282238383908&text=Admin%20Koperasi%20Tabarru">+6282238383908</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main><!-- End #main -->