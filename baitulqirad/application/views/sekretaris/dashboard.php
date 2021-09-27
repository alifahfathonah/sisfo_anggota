<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">
 <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>
</section>

<section class="content ">

<center>
<div class="alert alert-success font-weight-bold mb-4" style="width: 65%">
Selamat datang, Anda login sebagai <?php echo $this->session->userdata('jabatan') ?> Koperasi Tijarah.
</div>

<div class="card" style="margin-bottom: 120px; width: 65%">
	<div class="card-header font-weight-bold bg-success text-white">
		Data <?php echo $this->session->userdata('jabatan') ?>
	</div>

	<?php foreach($anggota as $agt) : ?>
<div class="card-body">
  <div class="row">

	<div class="col-md-5">
		<img style="width:150px;" src="<?php echo base_url('assets/photo/'.$agt->foto) ?>">
	</div>

	<div class="col-md-7">
		<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $agt->nama_anggota ?></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td><?php echo $agt->jabatan ?></td>
			</tr>
			<tr>
				<td>Tanggal Daftar</td>
				<td>:</td>
				<td><?php echo $agt->tgl_daftar ?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td><?php 
	                if($agt->status == "0"){

	                  echo "<span class='badge badge-danger'> Non Aktif </span>";
	                }else{
	                  echo "<span class='badge badge-success'> Aktif </span>";
	                }
	              ?>
             </td>
			</tr>
		</table>
	</div>

</div>
<p style="color:#1cc88a; font-size:10px; text-align:left;">*Lihat Data Lengkap <?php echo $this->session->userdata('jabatan') ?> di Menu Profil</p>

</div>
	<?php endforeach; ?>

</div>
</center>

</section>
</div>
</div>