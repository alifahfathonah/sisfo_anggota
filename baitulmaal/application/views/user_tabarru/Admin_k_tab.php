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
                <h1 class="text-light"><a href=""><span><?php echo $title ?></span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#hero">Home</a></li>
                    <li><a href="<?= base_url("user_transaksi/transaksi_sa"); ?>">Transaksi</a></li>
                    <li class="drop-down"><a href="#">Informasi</a>
                        <ul>
                            <li><a href="<?= base_url("user_informasi/informasi_kom_sa"); ?>">Informasi Komunitas</a>
                            </li>
                            <li><a href="<?= base_url("user_informasi/informasi_tij_sa"); ?>">Informasi Koperasi
                                    Tijarah</a></li>
                            <li><a href="<?= base_url("user_informasi/informasi_tab_sa"); ?>">Informasi Koperasi
                                    Tabarru</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url("komunikasi_chat/komunikasi_sa"); ?>">Komunikasi</a></li>
                    <li class="drop-down"><a href="#">Jabatan</a>
                        <ul>
                            <li><a href="">Profil Jabatan</a></li>
                            <li><a href="<?= base_url("admin/dashboard"); ?>">Admin Koperasi Tabarru</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url("user_profile/profile_sa"); ?>">Profile Anggota</a></li>
                    <li class="get-started"><a href="<?= base_url("welcome"); ?>">Logout</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
                    <h1><?php echo $sub_judul ?></h1>
                    <h2>Selamat Datang <?= $this->session->userdata('nama') ?></h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="<?= base_url('assets/photo/') . $this->session->userdata('foto') ?>"
                        class="img-fluid animated rounded-circle" alt="" style="width: 480px; height: 480px;">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about1" class="about">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                        <img src="<?php echo base_url() ?>assets/img/BM.png" class="img-fluid" alt=""
                            data-aos="zoom-in">
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <h3 data-aos="fade-up">Koperasi Tabarru</h3>
                        <p data-aos="fade-up" data-aos-delay="100">
                            Jabatan ~
                            <?= $this->session->userdata('pangkat') ?>
                        </p>
                        <div class="row">
                            <div class="col-md-6 col-lg-12" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4>Nama : <?= $this->session->userdata('nama') ?></h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->