<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

<!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="far fa-id-card"></i> Biodata <?php echo $this->session->userdata('pangkat') ?>
</div>
</section>

<section class="content ">

<center>

<div class="card" style="margin-bottom: 120px;">
  <div class="card-header font-weight-bold bg-success text-white">
  </div>

  <?php foreach($anggota as $agt) : ?>
<div class="card-body">
  <center><img class=" mb-3 mt-3" src="<?php echo base_url('assets/photo/').$agt->foto ?>" width="15%"></center>
  <div class="col-md-7">
    <table class="table">
<tr>
             <td style="text-align:right;">NIK</td>
             <td>:</td>
             <td ><?php echo $agt->nik ?></td>
          </tr>

          <tr>
             <td style="text-align:right;">Nama Anggota</td>
             <td>:</td>
             <td ><?php echo $agt->nama ?></td>
          </tr>

          <tr>
             <td style="text-align:right;">Tempat Lahir</td>
             <td>:</td>
             <td ><?php echo $agt->tempat_lahir ?></td>
          </tr>

          <tr>
             <td style="text-align:right;">Tanggal Lahir</td>
             <td>:</td>
             <td ><?php echo $agt->tgl_lahir ?></td>
          </tr>

          <tr>
             <td style="text-align:right;">Jenis Kelamin</td>
             <td>:</td>
             <td ><?php echo $agt->jk ?></td>
          </tr>

          <tr>
             <td style="text-align:right;">Status Perkawinan</td>
             <td>:</td>
             <td ><?php echo $agt->status_kawin ?></td>
          </tr>

          <tr>
             <td style="text-align:right;">Alamat</td>
             <td>:</td>
             <td ><?php echo $agt->alamat ?></td>
          </tr>

          <tr>
             <td style="text-align:right;">Nomor HP</td>
             <td>:</td>
             <td ><?php echo $agt->no_hp ?></td>
          </tr>

          <tr>
             <td style="text-align:right;">Status</td>
             <td>:</td>
             <td ><?php echo $agt->status_aktif ?></td>
          </tr>

          <tr>
             <td style="text-align:right;">Email</td>
             <td>:</td>
             <td ><?php echo $agt->email ?></td>
          </tr>

    </table>
</div>
  <?php endforeach; ?>

</div>
</center>

</section>
</div>
</div>
