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
                    <li><a href="<?= base_url('anggota_t_j_tij') ?>">Home</a></li>
                    <li class="drop-down active"><a href="#">Layanan & Produk</a>
                        <ul>
                            <li><a href="<?= base_url('anggota_t_j_tij/simpanan') ?>">Simpanan</a></li>
                            <li><a href="<?= base_url('anggota_t_j_tij/toko_emas') ?>">Toko Emas</a></li>
                            <li class="drop-down"><a href="#">Pembiayaan</a>
                                <ul>
                                    <li><a href="<?= base_url('anggota_t_j_tij/profil_pembiayaan') ?>">Profil Pembiayaan</a></li>
                                    <li><a href="<?= base_url('anggota_t_j_tij/riwayat_angsuran_pembiayaan') ?>">Riwayat Angsuran Pembiayaan</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="<?= base_url('anggota_t_j_tij/pinjaman_emas') ?>">Pinjaman Emas</a></li>
                            <li><a href="<?= base_url('anggota_t_j_tij/riwayat_angsuran_tabarru') ?>">Riwayat Angsuran Tabarru</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="#">Komunitas</a>
                        <ul>
                            <li><a href="<?= base_url("anggota_t_j_tij/kuttab"); ?>">Kuttab</a></li>
                            <li><a href="<?= base_url("anggota_t_j_tij/pelatihan_usaha"); ?>">Pelatihan Usaha</a></li>
                            <li><a href="<?= base_url("anggota_t_j_tij/agenda_koperasi"); ?>">Agenda Koperasi</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="#">Tijarah</a>
                        <ul>
                            <li><a href="<?= base_url("anggota_t_j_tij/usaha_jual_beli_emas"); ?>">Usaha Jual Beli Emas</a></li>
                            <li><a href="<?= base_url("anggota_t_j_tij/usaha_pembiayaan"); ?>">Usaha Pembiayaan</a></li>
                            <li><a href="<?= base_url("anggota_t_j_tij/keuangan_tijarah"); ?>">Laporan Keuangan Tijarah</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="#">Tabarru</a>
                        <ul>
                            <li><a href="<?= base_url("anggota_t_j_tij/usaha_titipan_uang_emas"); ?>">Usaha Titipan Uang & Emas</a></li>
                            <li><a href="<?= base_url("anggota_t_j_tij/usaha_pinjam_emas"); ?>">Usaha Pinjam Emas</a></li>
                            <li><a href="<?= base_url("anggota_t_j_tij/laporan_keuangan_tabarru"); ?>">Laporan Keuangan Tabarru</a></li>
                        </ul>
                    </li>

                    <li><a href="<?= base_url('anggota_t_j_tij/profil') ?>">Profil</a></li>
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
                                    <h2 class="title3"><b>Pinjaman Emas</b></h2>
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
                                            <a href="#"><b>Pinjaman Emas</b></a>
                                        </h4>
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h5 class="m-0 font-weight-bold text-primary">Riwayat Pinjaman Emas</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                                    <!-- table1 -->
                                                        <thead>
                                                            <tr class="text-center">
                                                                    <th width="120px">Nomor</th>
                                                                      <th>Tanggal</th>
                                                                      <th>No Reff</th>
                                                                      <th>Akun</th>
                                                                      <th>Nama</th>
                                                                      <th>Keterangan</th>
                                                                      <th>NIK</th>
                                                                      <th>Hak Akses</th>
                                                                      <th>Debet</th>
                                                                      <th>Kredit</th>
                                                                      <th>Saldo Emas</th>
                                                                </tr>
                                                                      </thead>
                                                                      <tbody>
                                                                       <?php 
                                                                        $JDebet=0;
                                                                        $JKredit=0;
                                                                        $no = 1;
                                                                             foreach ($piutang as $ptg) :  ?>
                                                                        <tr align="center">
                                                                                <td width="20px"><?php echo $no++ ?></td>
                                                                                <td><?php echo $ptg->tgl_pinjam ?></td>
                                                                                <td><?php echo $ptg->no_reff ?></td>
                                                                                <td><?php echo $ptg->akun ?></td>
                                                                                <td><?php echo $ptg->nama ?></td>
                                                                                <td><?php echo $ptg->keterangan ?></td>
                                                                                <td><?php echo $ptg->nik ?></td>
                                                                                <td><?php echo $ptg->hak_akses ?></td>
                                                                                <td><?php echo $ptg->debet ?></td>
                                                                                <td><?php echo $ptg->kredit ?></td>
                                                                                   <?php $JDebet+=$ptg->debet;?>
                                                                                   <?php $JKredit+=$ptg->kredit; ?>
                                                                                <td></td>
                                                                        </tr>
                                                                        <?php endforeach; ?>

                                                                        <?php if($JDebet != $JKredit){ ?>
                                                                        <tr>
                                                                          <td colspan="8" class="text-center"><b>Jumlah Total</b></td>
                                                                          <td style="color:black;"><b><?= $JDebet ?></b>gr</td>
                                                                          <td style="color:black;"><b><?= $JKredit ?></b>gr</td>
                                                                          <td style="color:black;"><b><?= $JDebet-$JKredit ?>gr</b></td>
                                                                        </tr>
                                                                        <?php } ?>
                                                                        </tbody>
                                                    </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Blog Page -->

    </main><!-- End #main -->