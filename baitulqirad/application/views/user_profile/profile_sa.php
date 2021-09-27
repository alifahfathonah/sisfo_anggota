<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<link href="<?= base_url() ?>assets/css/profile.css" rel="stylesheet">

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
                    <!-- KOPERASI TIJARAH -->

                    <?php if ($this->session->userdata('hak_akses') == '2') {  ?>
                    <li><a href="<?= base_url("user_tijarah/admin_k_tij"); ?>">Back</a></li>

                    <?php } ?>

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

                            <!-- <li><a href="">Riwayat Jabatan</a></li> -->

                            <!-- KOPERASI TIJARAH -->

                            <?php if ($this->session->userdata('hak_akses') == '2') {  ?>
                            <li><a href="<?= base_url("admin/dashboard"); ?>">Admin Koperasi Tijarah</a></li>

                            <?php } ?>

                        </ul>
                    </li>
                    <li class="active"><a href="">Profile Anggota</a></li>
                    <li class="get-started"><a href="<?= base_url("welcome"); ?>">Logout</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->


    <!-- ======= Hero Section ======= -->
    <section id="hero1" class="d-flex align-items-center">

        <div class="container">

            <?php foreach ($anggota as $agt) : ?>
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row container d-flex justify-content-center">
                        <div class="col-xl-10 col-md-12">
                            <div class="card user-card-full">
                                <div class="row m-l-0 m-r-0">
                                    <div class="col-sm-4 bg-c-lite-green user-profile">
                                        <div class="card-block text-center text-white">
                                            <div class="m-b-25"> <img style="width:60%"
                                                    src="<?= base_url('assets/photo/' . $agt->foto) ?>"
                                                    class="img-radius" alt="User-Profile-Image"> </div>
                                            <p class="f-w-600"><?= $agt->nama ?></p>
                                            <h6>NIK : <?= $agt->nik ?></h6> <i
                                                class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-block">
                                            <p class="m-b-20 p-b-5 b-b-default f-w-600"><b>User Profile</b></p>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Jabatan</p>
                                                    <h6 class="text-muted f-w-400"><?= $agt->pangkat ?></h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Jenis Kelamin</p>
                                                    <h6 class="text-muted f-w-400"><?= $agt->jk ?></h6>
                                                </div>
                                            </div>
                                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Tanggal Lahir</p>
                                                    <h6 class="text-muted f-w-400"><?= $agt->tgl_lahir ?></h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Tempat Lahir</p>
                                                    <h6 class="text-muted f-w-400"><?= $agt->tempat_lahir ?></h6>
                                                </div>
                                            </div>
                                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Status Perkawinan</p>
                                                    <h6 class="text-muted f-w-400"><?= $agt->status_kawin ?></h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Alamat</p>
                                                    <h6 class="text-muted f-w-400"><?= $agt->alamat ?></h6>
                                                </div>
                                            </div>
                                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Nomor HP</p>
                                                    <h6 class="text-muted f-w-400"><?= $agt->no_hp ?></h6>
                                                </div>

                                            </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section><!-- End Hero -->