<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="far fa-eye"></i> Detail Anggota
</div>
</section>

<section class="content ">
 <!-- DataTales Example -->
          <div class="card mb-4">
     <table class="table table-bordered">

        <?php foreach ($detail as $dt) :  ?>

        <center><img class=" mb-3 mt-3" src="<?php echo base_url('assets/photo/').$dt->foto ?>" width="15%"></center>

          <tr>
             <th style="text-align:right;">NIK</th>
             <td ><?php echo $dt->nik ?></td>
          </tr>

          <tr>
             <th style="text-align:right;">Nama Anggota</th>
             <td ><?php echo $dt->nama_anggota ?></td>
          </tr>

          <tr>
             <th style="text-align:right;">Tempat Lahir</th>
             <td ><?php echo $dt->tempat_lahir ?></td>
          </tr>

          <tr>
             <th style="text-align:right;">Tanggal Lahir</th>
             <td ><?php echo $dt->tgl_lahir ?></td>
          </tr>

          <tr>
             <th style="text-align:right;">Jenis Kelamin</th>
             <td ><?php echo $dt->jenis_kelamin ?></td>
          </tr>

          <tr>
             <th style="text-align:right;">Status Perkawinan</th>
             <td ><?php echo $dt->status_kawin ?></td>
          </tr>

          <tr>
             <th style="text-align:right;">Alamat</th>
             <td ><?php echo $dt->alamat ?></td>
          </tr>

          <tr>
             <th style="text-align:right;">Nomor HP</th>
             <td ><?php echo $dt->no_hp ?></td>
          </tr>

          <tr>
             <th style="text-align:right;">Status</th>
             <td><?php 
                if($dt->status == "0"){

                  echo "<span class='badge badge-danger'> Non Aktif </span>";
                }else{
                  echo "<span class='badge badge-success'> Aktif </span>";
                }
              ?>
             </td>
          </tr>

          <tr>
             <th style="text-align:right;">Email</th>
             <td ><?php echo $dt->email ?></td>
          </tr>

          <tr>
             <th style="text-align:right;">Nama Admin</th>
             <td ><?php echo $dt->nama_admin ?></td>
          </tr>

          <tr>
             <th style="text-align:right;">Tanggal Daftar</th>
             <td ><?php echo $dt->tgl_daftar ?></td>
          </tr>

          <tr>
             <th style="text-align:right;">Saldo Uang</th>
             <td ><?php echo $dt->saldo_uang ?></td>
          </tr>

          <tr>
             <th style="text-align:right;">Saldo Emas</th>
             <td ><?php echo $dt->saldo_emas ?></td>
          </tr>

         <?php endforeach; ?>
      </table>
          </div>
      <?php echo anchor('admin/dataAnggota','<div class="btn btn-sm btn-primary">Kembali</div>') ?>
      <br><br><br>

</section>
</div>
</div>