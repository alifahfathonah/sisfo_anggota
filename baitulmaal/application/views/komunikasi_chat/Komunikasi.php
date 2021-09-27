<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Komunikasi</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

	<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<meta content="" name="description">
	<meta content="" name="keywords">

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container-fluid d-flex ">

			<div class="logo mr-auto">
				<h1 class="text-light"><a href="">KOMUNIKASI</span></a></h1>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			</div>

			<nav class="nav-menu d-none d-lg-block">
				<ul>
			<!-- KOPERASI TABARRU -->
				
			<?php if ($this->session->userdata('hak_akses') == '1') {  ?>
					<li><a href="<?= base_url("user_tabarru/ketua_k_tab"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '2') {  ?>
					<li><a href="<?= base_url("user_tabarru/sekretaris_k_tab"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '3') {  ?>
					<li><a href="<?= base_url("user_tabarru/bendahara_k_tab"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '4') {  ?>
					<li><a href="<?= base_url("user_tabarru/kepala_d_teller"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '5') {  ?>
					<li><a href="<?= base_url("user_tabarru/anggota_d_teller"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '6') {  ?>
					<li><a href="<?= base_url("user_tabarru/kepala_d_pinjaman"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '7') {  ?>
					<li><a href="<?= base_url("user_tabarru/anggota_d_pinjaman"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '8') {  ?>
					<li><a href="<?= base_url("user_tabarru/kepala_d_jaminan"); ?>">Back</a></li>
				<?php } else if ($this->session->userdata('hak_akses') == '9') {  ?>
					<li><a href="<?= base_url("user_tabarru/anggota_d_jaminan"); ?>">Back</a></li>


				<?php } ?>
				
					<li><a href="<?= base_url("user_transaksi/transaksi"); ?>">Transaksi</a></li>
					<li class="drop-down"><a href="#">Informasi</a>
						<ul>
							<li><a href="<?= base_url("user_informasi/informasi_kom"); ?>">Informasi Komunitas</a></li>
							<li><a href="<?= base_url("user_informasi/informasi_tij"); ?>">Informasi Koperasi Tijarah</a></li>
							<li><a href="<?= base_url("user_informasi/informasi_tab"); ?>">Informasi Koperasi Tabarru</a></li>
						</ul>
					</li>
					<li class="active"><a href="">Komunikasi</a></li>
					<li class="drop-down"><a href="#">Jabatan</a>
						<ul>
							<li><a href="">Profil Jabatan</a></li>

							<!-- <li><a href="">Riwayat Jabatan</a></li> -->

							<!-- KOPERASI TABARRU -->

							<?php if ($this->session->userdata('hak_akses') == '1') {  ?>
								<li><a href="<?= base_url("ketua/dashboard"); ?>">Ketua Koperasi Tabarru</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '2') {  ?>
								<li><a href="<?= base_url("sekretaris/dashboard"); ?>">Sekretaris Koperasi Tabarru</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '3') {  ?>
								<li><a href="<?= base_url("bendahara/dashboard"); ?>">Bendahara Koperasi Tabarru</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '4') {  ?>
								<li><a href="<?= base_url("kepalateller/dashboard"); ?>">Kepala Divisi Teller</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '5') {  ?>
								<li><a href="<?= base_url("anggotateller/dashboard"); ?>">Anggota Divisi Teller</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '6') {  ?>
								<li><a href="<?= base_url("kepalapinjaman/dashboard"); ?>">Kepala Divisi Pinjaman</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '7') {  ?>
								<li><a href="<?= base_url("anggotapinjaman/dashboard"); ?>">Anggota Divisi Pinjaman</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '8') {  ?>
								<li><a href="<?= base_url("kepalajaminan/dashboard"); ?>">Kepala Divisi Jaminan</a></li>
							<?php } else if ($this->session->userdata('hak_akses') == '9') {  ?>
								<li><a href="<?= base_url("anggotajaminan/dashboard"); ?>">Anggota Divisi Jaminan</a></li>
							
							<?php } ?>
						</ul>
					</li>
					<li><a href="<?= base_url("user_profile/profile"); ?>">Profile Anggota</a></li>
					<li class="get-started"><a href="<?= base_url("login"); ?>">Logout</a></li>
				</ul>
			</nav><!-- .nav-menu -->

		</div>
	</header><!-- End Header -->

	<br>
	<br>
	<!-- ======= Hero Section ======= -->
	<section id="contact" class="contact section-bg">
		<!-- <section id="hero" class="d-flex align-items-center"> -->
			
		<!-- <div class="container">
			<div class="col-md-10 offset-md-3">
				<div class="card mt-5" style="margin-bottom: 120px; width: 65%; height: 700px; overflow-y: scroll">
					<div class="card-header font-weight-bold bg-info text-white">Room - Chat</div>

					<div class="card-body">
						<div class="row">
							<div class="col-md-9 m-auto">
								<table class="table">
								
									<tr>
										<div class="form-group">
											<label><b>Nama :</b> </label>
											<input type="text" name="name" id="name" class="form-control" placeholder="Nama...">
										</div>
									</tr>

									<tr>
										<div class="form-group">
											<label><b> Pesan : </b></label>
											<input type="text" name="message" id="message" class="form-control" placeholder="Pesan...">
										</div>
									</tr>

									<tr>
										<div class="form-group">
											<input type="button" value="Send" class="btn btn-primary btn-block" onclick="store();">
										</div>
									</tr>
									<br>
									<tr>
										<td style="max-width: 1%;"><b>Nama</b></td>
										<td style="width: 1%;">|</td>
										<td style="max-width: 4%;"><b>Chat</b></td>
									</tr>
									<div id="pesan">
										?php foreach ($chat as $c) {
											echo "
											<tr><td>$c->name</td>
												<td>:</td>
												<td>$c->message</td>
											</tr>";
										}
										?>
									</div>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->



		<div class="container">
			<div class="row">
			<div class="col-md-10 offset-md-3">
			<div class="card mt-5" style="margin-bottom: 120px; width: 65%; height: 700px; overflow-y: scroll">
					<div class="card-header font-weight-bold bg-info text-white">Room - Chat</div>

				<div class="card-body">
				<div class="col-md-9 m-auto">
				<table class="table">

				<tr>
					<div class="form-group">
						<label><b>Nama :</b> </label>
						<input type="text" name="name" id="name" class="form-control" value="<?= $this->session->userdata('nama_anggota') ?>" readonly>
					</div>
				</tr>

				<tr>
					<div class="form-group">
						<label><b> Pesan : </b></label>
						<input type="text" name="message" id="message" class="form-control" placeholder="Pesan...">
					</div>
				</tr>

				<tr>
					<div class="form-group">
						<input type="button" value="Send" class="btn btn-primary btn-block" onclick="store();">
					</div>
				</tr>

				<hr>

					<div id="pesan">
					
					<?php foreach ($chat as $c) {
						echo "<p>
						<span><b>$c->name</b></span> -
						<span>$c->message</span>
						</p>";
					}
					?>
					</div>
					</div>
				</table>
					</div>
					
					
				</div>
				</div>
			</div>


		</div>

	</section>
	<!-- </section> -->

	<section id="contact" class="contact section-bg">
	</section>

	<script>
			// Enable pusher logging - don't include this in production
			Pusher.logToConsole = true;

			var pusher = new Pusher('264a313e8b013a8cfd5f', {
				cluster: 'ap1',
				encrypted: true
			});

			var channel = pusher.subscribe('my-channel');
			channel.bind('my-event', function(data) {
				// alert(JSON.stringify(data));

				addData(data);
			});

			function addData(data) {
				var str = '';
				for (var z in data) {
					str += 
					'<p><span><b>' + data[ z ].name + '</b></span> - <span></span>' + data[ z ].message + '</span></p>';
				}
				$('#pesan').html(str);
			}
	</script>
	
	<script>
		function store() {
			var value = {
				name: $('#name').val(),
				message: $('#message').val()
			}

			$.ajax({
				url: '<?= site_url(); ?>/komunikasi_chat/komunikasi/store',
				type: 'POST',
				data: value,
				dataType: 'JSON'
			});
		}
	</script>