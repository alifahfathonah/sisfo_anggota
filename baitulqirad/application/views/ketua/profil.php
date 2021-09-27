<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="far fa-id-card"></i> Profil Ketua
</div>
</section>

<section class="content ">

<center>

<div class="card" style="margin-bottom: 120px;">
	<div class="card-header font-weight-bold bg-success text-white">
		Data <?php echo $this->session->userdata('jabatan') ?>
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
             <td ><?php echo $agt->nama_anggota ?></td>
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
             <td ><?php echo $agt->jenis_kelamin ?></td>
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
             <th style="text-align:right;">Status</th>
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

          <tr>
             <td style="text-align:right;">Email</td>
             <td>:</td>
             <td ><?php echo $agt->email ?></td>
          </tr>

          <tr>
             <td style="text-align:right;">Jabatan</td>
             <td>:</td>
             <td ><?php echo $agt->jabatan ?></td>
          </tr>

          <tr>
             <td style="text-align:right;">Tanggal Daftar</td>
             <td>:</td>
             <td ><?php echo $agt->tgl_daftar ?></td>
          </tr>

          <tr>
             <td style="text-align:right;">Saldo Uang</td>
             <td>:</td>
             <td ><?php echo $agt->saldo_uang ?></td>
          </tr>

          <tr>
             <td style="text-align:right;">Saldo Emas</td>
             <td>:</td>
             <td ><?php echo $agt->saldo_emas ?></td>
          </tr>
		</table>
</div>
	<?php endforeach; ?>

</div>
</center>

</section>
</div>
</div>
