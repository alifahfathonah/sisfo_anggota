

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
				
				<?php if ($this->session->userdata('role_id') == '2') {  ?>
					<li><a href="<?= base_url("user_tijarah/admin_k_tij"); ?>">Back</a></li>

				<?php } else if ($this->session->userdata('hak_akses') == '1') {  ?>
					<li><a href="<?= base_url("user_tijarah/ketua_k_tij"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '2') {  ?>
					<li><a href="<?= base_url("user_tijarah/sekretaris_k_tij"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '3') {  ?>
					<li><a href="<?= base_url("user_tijarah/bendahara_k_tij"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '4') {  ?>
					<li><a href="<?= base_url("user_tijarah/kepala_d_teller"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '5') {  ?>
					<li><a href="<?= base_url("user_tijarah/anggota_d_teller"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '6') {  ?>
					<li><a href="<?= base_url("user_tijarah/kepala_d_pembiayaan"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '7') {  ?>
					<li><a href="<?= base_url("user_tijarah/anggota_d_pembiayaan"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '8') {  ?>
					<li><a href="<?= base_url("user_tijarah/kepala_d_pemasaran"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '9') {  ?>
					<li><a href="<?= base_url("user_tijarah/anggota_d_pemasaran"); ?>">Back</a></li>


				<?php } ?>
				
					<li class="active"><a href="">Transaksi</a></li>
					<li class="drop-down"><a href="#">Informasi</a>
						<ul>
							<li><a href="<?= base_url("user_informasi/informasi_kom"); ?>">Informasi Komunitas</a></li>
							<li><a href="<?= base_url("user_informasi/informasi_tij"); ?>">Informasi Koperasi Tijarah</a></li>
							<li><a href="<?= base_url("user_informasi/informasi_tab"); ?>">Informasi Koperasi Tabarru</a></li>
						</ul>
					</li>
					<li><a href="<?= base_url("komunikasi_chat/komunikasi"); ?>">Komunikasi</a></li>
					<li class="drop-down"><a href="#">Jabatan</a>
						<ul>
							<li><a href="">Profil Jabatan</a></li>

							<!-- <li><a href="">Riwayat Jabatan</a></li> -->

							<!-- KOPERASI TIJARAH -->

							<?php if ($this->session->userdata('role_id') == '2') {  ?>
								<li><a href="">Admin Koperasi Tijarah</a></li>

							<?php } else if ($this->session->userdata('hak_akses') == '1') {  ?>
								<li><a href="<?= base_url("baitulqirad/ketua/dashboard"); ?>">Ketua Koperasi Tijarah</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '2') {  ?>
								<li><a href="<?= base_url("baitulqirad/sekretaris/dashboard"); ?>">Sekretaris Koperasi Tijarah</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '3') {  ?>
								<li><a href="<?= base_url("baitulqirad/bendahara/dashboard"); ?>">Bendahara Koperasi Tijarah</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '4') {  ?>
								<li><a href="<?= base_url("baitulqirad/kepalateller/dashboard"); ?>">Kepala Divisi Teller</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '5') {  ?>
								<li><a href="<?= base_url("baitulqirad/anggotateller/dashboard"); ?>">Anggota Divisi Teller</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '6') {  ?>
								<li><a href="<?= base_url("baitulqirad/kepalabiaya/dashboard"); ?>">Kepala Divisi Pembiayaan</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '7') {  ?>
								<li><a href="<?= base_url("baitulqirad/anggotabiaya/dashboard"); ?>">Anggota Divisi Pembiayaan</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '8') {  ?>
								<li><a href="<?= base_url("baitulqirad/kepalapasar/dashboard"); ?>">Kepala Divisi Pemasaran</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '9') {  ?>
								<li><a href="<?= base_url("baitulqirad/anggotapasar/dashboard"); ?>">Anggota Divisi Pemasaran</a></li>
							
							<?php } ?>
						</ul>
					</li>
					<li><a href="<?= base_url("user_profile/profile"); ?>">Profile Anggota</a></li>
					<li class="get-started"><a href="<?= base_url(""); ?>">Logout</a></li>
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
            <h5 class="m-0 font-weight-bold text-primary">Data Transaksi</h5>
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


		</div>



	</section><!-- End Hero -->
	<!-- </section> -->

	<section id="contact" class="contact section-bg">
	</section>

