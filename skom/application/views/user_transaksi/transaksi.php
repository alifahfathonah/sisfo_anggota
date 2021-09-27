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
                    <li><a href="<?= base_url("user_komunitas/ketua_d_p"); ?>">Back</a></li>
                    <?php } else if ($this->session->userdata('hak_akses') == '2') {  ?>
                    <li><a href="<?= base_url("user_komunitas/sekretaris_d_p"); ?>">Back</a></li>
                    <?php } else if ($this->session->userdata('hak_akses') == '3') {  ?>
                    <li><a href="<?= base_url("user_komunitas/bendahara_d_p"); ?>">Back</a></li>
                    <?php } else if ($this->session->userdata('hak_akses') == '4') {  ?>
                    <li><a href="<?= base_url("user_komunitas/staf_b_pendidikan"); ?>">Back</a></li>
                    <?php } else if ($this->session->userdata('hak_akses') == '5') {  ?>
                    <li><a href="<?= base_url("user_komunitas/staf_b_pelatihan"); ?>">Back</a></li>
                    <?php } else if ($this->session->userdata('hak_akses') == '6') {  ?>
                    <li><a href="<?= base_url("user_komunitas/staf_b_keanggotaan"); ?>">Back</a></li>
                    <?php } else if ($this->session->userdata('hak_akses') == '7') {  ?>
                    <li><a href="<?= base_url("user_komunitas/staf_br_pengembangan"); ?>">Back</a></li>
                    <?php } else if ($this->session->userdata('hak_akses') == '8') {  ?>
                    <li><a href="<?= base_url("user_komunitas/ketua_d_u"); ?>">Back</a></li>
                    <?php } else if ($this->session->userdata('hak_akses') == '9') {  ?>
                    <li><a href="<?= base_url("user_komunitas/sekretaris_d_u"); ?>">Back</a></li>
                    <?php } else if ($this->session->userdata('hak_akses') == '10') {  ?>
                    <li><a href="<?= base_url("user_komunitas/bendahara_d_u"); ?>">Back</a></li>
                    <?php } else if ($this->session->userdata('hak_akses') == '11') {  ?>
                    <li><a href="<?= base_url("user_komunitas/anggota_d_u"); ?>">Back</a></li>
                    <?php } else if ($this->session->userdata('hak_akses') == '12') {  ?>
                    <li><a href="<?= base_url("user_komunitas/ketua_d_c"); ?>">Back</a></li>
                    <?php } else if ($this->session->userdata('hak_akses') == '13') {  ?>
                    <li><a href="<?= base_url("user_komunitas/sekretaris_d_c"); ?>">Back</a></li>
                    <?php } else if ($this->session->userdata('hak_akses') == '14') {  ?>
                    <li><a href="<?= base_url("user_komunitas/bendahara_d_c"); ?>">Back</a></li>
                    <?php } else if ($this->session->userdata('hak_akses') == '15') {  ?>
                    <li><a href="<?= base_url("user_komunitas/anggota_d_c"); ?>">Back</a></li>


                    <?php } ?>

                    <li class="active"><a href="">Transaksi</a></li>
                    <li class="drop-down"><a href="#">Informasi</a>
                        <ul>
                            <li><a href="<?= base_url("user_informasi/informasi_kom"); ?>">Informasi Komunitas</a></li>
                            <li><a href="<?= base_url("user_informasi/informasi_tij"); ?>">Informasi Koperasi
                                    Tijarah</a></li>
                            <li><a href="<?= base_url("user_informasi/informasi_tab"); ?>">Informasi Koperasi
                                    Tabarru</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url("komunikasi_chat/komunikasi"); ?>">Komunikasi</a></li>
                    <li class="drop-down"><a href="#">Jabatan</a>
                        <ul>
                            <li><a href="">Profil Jabatan</a></li>

                            <!-- SISTEM KOMUNITAS -->

                            <?php if ($user1['hak_akses'] == '1') {  ?>
                            <li><a href="<?= base_url("DewanPimpinan_Ketua"); ?>">Ketua Dewan Pimpinan</a>
                            </li>
                            <?php } else if ($this->session->userdata('hak_akses') == '2') {  ?>
                            <li><a href="<?= base_url("DewanPimpinan_Sekretaris"); ?>">Sekretaris Dewan Pimpinan</a>
                            </li>
                            <?php } else if ($this->session->userdata('hak_akses') == '3') {  ?>
                            <li><a href="<?= base_url("DewanPimpinan_Bendahara"); ?>">Bendahara Dewan Pimpinan</a></li>
                            <?php } else if ($this->session->userdata('hak_akses') == '4') {  ?>
                            <li><a href="<?= base_url("DewanPimpinan_StafBPendidikan"); ?>">Staf Bidang Pendidikan </a>
                            </li>
                            <?php } else if ($this->session->userdata('hak_akses') == '5') {  ?>
                            <li><a href="<?= base_url("DewanPimpinan_StafBPelatihan"); ?>">Staf Bidang Pelatihan</a>
                            </li>
                            <?php } else if ($this->session->userdata('hak_akses') == '6') {  ?>
                            <li><a href="<?= base_url("DewanPimpinan_StafBKeanggotaan"); ?>">Staf Bidang Keanggotaan</a>
                            </li>
                            <?php } else if ($this->session->userdata('hak_akses') == '7') {  ?>
                            <li><a href="<?= base_url("DewanPimpinan_StafBRiset"); ?>">Staf Bidang Riset &
                                    Pengembangan</a></li>
                            <?php } else if ($this->session->userdata('hak_akses') == '8') {  ?>
                            <li><a href="<?= base_url("DewanUlama_ketua"); ?>">Ketua Dewan Ulama</a></li>
                            <?php } else if ($this->session->userdata('hak_akses') == '9') {  ?>
                            <li><a href="<?= base_url("DewanUlama_sekretaris"); ?>">Sekretaris Dewan Ulama</a></li>
                            <?php } else if ($this->session->userdata('hak_akses') == '10') {  ?>
                            <li><a href="<?= base_url("DewanUlama_bendahara"); ?>">Bendahara Dewan Ulama</a></li>
                            <?php } else if ($this->session->userdata('hak_akses') == '11') {  ?>
                            <li><a href="<?= base_url("DewanUlama_anggota"); ?>">Anggota Dewan Ulama</a></li>
                            <?php } else if ($this->session->userdata('hak_akses') == '12') {  ?>
                            <li><a href="<?= base_url("DewanCendekiawan_ketua"); ?>">Ketua Dewan Cendekiawan</a></li>
                            <?php } else if ($this->session->userdata('hak_akses') == '13') {  ?>
                            <li><a href="<?= base_url("DewanCendekiawan_sekretaris"); ?>">Sekretaris Dewan
                                    Cendekiawan</a></li>
                            <?php } else if ($this->session->userdata('hak_akses') == '14') {  ?>
                            <li><a href="<?= base_url("DewanCendekiawan_bendahara"); ?>">Bendahara Dewan Cendekiawan</a>
                            </li>
                            <?php } else if ($this->session->userdata('hak_akses') == '15') {  ?>
                            <li><a href="<?= base_url("DewanCendekiawan_anggota"); ?>">Anggota Dewan Cendekiawan</a>
                            </li>

                            <?php } ?>
                        </ul>
                    </li>
                    <li><a href="<?= base_url("user_profile/profile"); ?>">Profile Anggota</a></li>
                    <li class="get-started"><a href="<?= base_url("Auth"); ?>">Logout</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <br>
    <br>
    <!-- ======= Hero Section ======= -->
    <section id="contact" class="contact section-bg">
        <!-- <section id="hero" class="d-flex align-items-center"> -->

        <div class="container">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Data Transaksi Koperasi Tijarah</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table1" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">No Reff</th>
                                    <th class="text-center">Keterangan</th>
                                    <th class="text-center">Debet</th>
                                    <th class="text-center">Kredit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($jurnalbq as $j) : ?>
                                <tr>
                                    <td style="width: 3%;"><?= $no++ ?></td>
                                    <td><?= $j->no_reff ?></td>
                                    <td><?= $j->keterangan ?></td>
                                    <td><?= $j->debet ?></td>
                                    <td><?= $j->kredit ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <br>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Data Transaksi Koperasi Tabarru</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table1" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">No Reff</th>
                                    <th class="text-center">Keterangan</th>
                                    <th class="text-center">Debet</th>
                                    <th class="text-center">Kredit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($jurnalbm as $j) : ?>
                                <tr>
                                    <td style="width: 3%;"><?= $no++ ?></td>
                                    <td><?= $j->no_reff ?></td>
                                    <td><?= $j->keterangan ?></td>
                                    <td><?= $j->debet ?></td>
                                    <td><?= $j->kredit ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <br>

    </section><!-- End Hero -->
    <!-- </section> -->