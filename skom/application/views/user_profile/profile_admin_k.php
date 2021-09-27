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

                    <!-- SISTEM KOMUNITAS -->

                    <?php if ($this->session->userdata('hak_akses') == '1') {  ?>
                    <li><a href="<?= base_url("user_komunitas/admin_k"); ?>">Back</a></li>
                    <?php } ?>

                    <li><a href="<?= base_url("user_transaksi/transaksi_admin_k"); ?>">Transaksi</a></li>
                    <li class="drop-down"><a href="#">Informasi</a>
                        <ul>
                            <li><a href="<?= base_url("user_informasi/informasi_kom_admin_k"); ?>">Informasi
                                    Komunitas</a></li>
                            <li><a href="<?= base_url("user_informasi/informasi_tij_admin_k"); ?>">Informasi Koperasi
                                    Tijarah</a></li>
                            <li><a href="<?= base_url("user_informasi/informasi_tab_admin_k"); ?>">Informasi Koperasi
                                    Tabarru</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url("komunikasi_chat/komunikasi_admin_k"); ?>">Komunikasi</a></li>
                    <li class="drop-down"><a href="#">Jabatan</a>
                        <ul>
                            <li><a href="">Profil Jabatan</a></li>
                            <!-- SISTEM KOMUNITAS -->

                            <?php if ($this->session->userdata('hak_akses') == '1') {  ?>
                            <li><a href="<?= base_url("Admin"); ?>">Admin Komunitas Koperasi</a></li>
                            <?php } ?>

                        </ul>
                    </li>
                    <li class="active"><a href="">Profile Anggota</a></li>
                    <li class="get-started"><a href="<?= base_url("Auth"); ?>">Logout</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->


    <!-- ======= Hero Section ======= -->
    <section id="hero1" class="d-flex align-items-center">

        <div class="container">

            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row container d-flex justify-content-center">
                        <div class="col-xl-10 col-md-12">
                            <div class="card user-card-full">
                                <div class="row m-l-0 m-r-0">
                                    <div class="col-sm-4 bg-c-lite-green user-profile">
                                        <div class="card-block text-center text-white">
                                            <div class="m-b-25"> <img style="width:60%"
                                                    src="<?= base_url('assets/img/') . $user['foto']; ?>"
                                                    class="img-radius" alt="User-Profile-Image"> </div>
                                            <p class="f-w-600"><?= $user['nama']; ?></p>
                                            <h6>NIK : <?= $user['nik']; ?></h6> <i
                                                class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-block">
                                            <p class="m-b-20 p-b-5 b-b-default f-w-600"><b>User Profile</b></p>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Jabatan</p>
                                                    <h6 class="text-muted f-w-400"><?= $user['pangkat'] ?></h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Jenis Kelamin</p>
                                                    <h6 class="text-muted f-w-400"><?= $user['jk']; ?></h6>
                                                </div>
                                            </div>
                                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Tanggal Lahir</p>
                                                    <h6 class="text-muted f-w-400"><?= $user['tgl_lahir']; ?></h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Tempat Lahir</p>
                                                    <h6 class="text-muted f-w-400"><?= $user['tempat_lahir']; ?></h6>
                                                </div>
                                            </div>
                                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Status Perkawinan</p>
                                                    <h6 class="text-muted f-w-400"><?= $user['status_kawin']; ?></h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Alamat</p>
                                                    <h6 class="text-muted f-w-400"><?= $user['alamat']; ?></h6>
                                                </div>
                                            </div>
                                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Nomor HP</p>
                                                    <h6 class="text-muted f-w-400"><?= $user['no_hp']; ?></h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Status</p>
                                                    <h6 class="text-muted f-w-400">
                                                        <?php if ($user['status_aktif'] == '0') {
                                                            echo "<span class='badge badge-danger'> Non Aktif </span>";
                                                        } else {
                                                            echo "<span class='badge badge-success'> Aktif </span>";
                                                        } ?></h6>
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

    </section><!-- End Hero -->