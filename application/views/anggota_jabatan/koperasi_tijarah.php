<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $title ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <style>
        html {
            font-size: 14px;
        }

        .container1 {
            font-size: 14px;
            color: #666666;
            font-family: "Open Sans";
            width: 80%;
            margin: auto;
        }

        body {
            background: #dbffc3;
        }
    </style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex ">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="">KOPERASI TIJARAH</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
				<ul>
					<li class="get-started"><a href="<?= base_url('website') ?>">Beranda</a></li>
					<li class="drop-down"><a href="#">Login</a>
						<ul>
							<li><a href="<?= base_url('skom/auth') ?>">Komunitas Koperasi</a></li>
							<li><a href="<?= base_url('baitulqirad/login') ?>">Koperasi Tijarah</a></li>
							<li><a href="<?= base_url('baitulmaal/login') ?>">Koperasi Tabarru</a></li>
						</ul>
					</li>
					<li class="drop-down"><a href="#">Jasa</a>
						<ul>
							<li><a href="<?= base_url('website/simpanan') ?>">Simpanan</a></li>
							<li><a href="<?= base_url('website/tokoemas') ?>">Toko Emas</a></li>
							<li><a href="<?= base_url('website/pembiayaan') ?>">Pembiayaan</a></li>
							<li><a href="<?= base_url('website/pinjamanemas') ?>">Pinjaman Emas</a></li>
						</ul>
					</li>
					<li class="drop-down"><a href="#">Anggota Jabatan</a>
						<ul>
							<li><a href="<?= base_url("anggota_jabatan/komunitas"); ?>">Komunitas Koperasi</a></li>
							<li class="active"><a href="<?= base_url("anggota_jabatan/koperasi_tijarah"); ?>">Koperasi Tijarah</a></li>
							<li><a href="<?= base_url("anggota_jabatan/koperasi_tabarru"); ?>">Koperasi Tabarru</a></li>
						</ul>
					</li>
					<li class="drop-down"><a href="#">Informasi</a>
						<ul>
							<li><a href="<?= base_url("user_informasi/informasi_kom"); ?>">Informasi Komunitas Koperasi</a></li>
							<li><a href="<?= base_url("user_informasi/informasi_tij"); ?>">Informasi Koperasi Tijarah</a></li>
							<li><a href="<?= base_url("user_informasi/informasi_tab"); ?>">Informasi Koperasi Tabarru</a></li>
						</ul>
					</li>
					<li><a href="<?= base_url('website/kontak') ?>">Kontak</a></li>
				</ul>
			</nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <main id="main">

        <section id="profil" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h5>Koperasi Tijarah</h5>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-12 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-file-text"></i></div>
                            <br>
                            <h4 class="title">Tentang Koperasi Tijarah</h4>
                            <p>Koperasi tijarah adalah wadah syirkah/musyarakah/kerjasama ekonomi keanggotaan dan lembaga yang mengelola usaha bersama anggota yang bersifat tijarah.
                                Dalam koperasi tijarah mengenal beberapa akad berupa Kerjasama(Musyarakah), Kemitraan(mudharabah), jual dan beli(Ba’i).
                                Koperasi tijarah fokusnya adalah urusan mencari keuntungan finansial, usaha jual beli emas batangan. Koperasi tijarah menjual emas batangan dengan variasi bobot. Hasil usaha koperasi tijarah dibagi dengan prinsip profit sharing menjadi 4 bagian, yaitu 30% sebagai sodaqoh kepada koperasi tabarru, 20% digunakan untuk menambah nilai iuran anggota, dan 50% diserahkan kepada amggota dengan dimasukan ke dalam rekening titipan milik anggota.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Us Section -->
    </main>

    <style>
        #footer {
            height: 50px;
            width: 100%;
            line-height: 50px;
            background: rgb(90, 90, 90);
            color: #fff;

            position: fixed;
            bottom: 0px;
            text-align: center;
        }
    </style>