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
                    <li class="drop-down"><a href="#">Layanan</a>
                        <ul>
                            <li><a href="<?= base_url('website/simpanan') ?>">Simpanan</a></li>
                            <li><a href="<?= base_url('website/pembiayaan') ?>">Pembiayaan</a></li>
                            <li><a href="<?= base_url('website/toko_emas') ?>">Toko Emas</a></li>
                            <li><a href="<?= base_url('website/pelayanan_pinjaman') ?>">Pelayanan Pinjaman</a></li>
                            <li><a href="<?= base_url('website/pelayanan_jaminan') ?>">Pelayanan Jaminan</a></li>
                        </ul>
                    </li>
                    <li class="drop-down active"><a href="#">Berita</a>
                        <ul>
                            <li class="active"><a href="<?= base_url("website/info_kom"); ?>">Berita Komunitas Koperasi</a></li>
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
                                    <h2 class="title3"><b>Berita Komunitas Koperasi</b></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Blog Header -->

        <!-- ======= Blog Page ======= -->
        <div id="blog" class="blog-area">
            <div class="blog-inner area-padding">
                <div class="blog-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Berita Komunitas Koperasi</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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



            <?php foreach ($info_kom as $i) : ?>
                <div class="box">
                    <img src="<?= base_url() . 'skom/assets/photo/' . $i->photo ?>" class="img-fluid" alt="" data-aos="zoom-in" style="width: 600px; height: 300px;">
                    <hr>
                    <h4><b><?= $i->judul ?></b> </h4>

                    <p> <?= $i->desc_kom ?> </p>
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
        </div><!-- End Blog Page -->



    </main><!-- End #main -->

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