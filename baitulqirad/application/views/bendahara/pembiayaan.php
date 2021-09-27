<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-file-invoice-dollar"></i> Pembiayaan
</div>
</section>

	<?php echo $this->session->flashdata('pesan') ?>

<section class="content ">

 <!-- DataTales Example -->
  <div class="card mb-4 mt-2">
    <div class="card-header py-3">
          <a class="btn btn-sm btn-success" href="<?php echo base_url('bendahara/pembiayaan/tambahData') ?>">
          <i class="fas fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr align="center">
              <th>Nomor</th>
              <th>No. Akad</th>
              <th>Jenis Akad</th>
              <th>Tanggal Akad</th>
              <th>Jatuh Tempo Akad</th>
              <th>Jenis Pembiayaan</th>
              <th>Nilai Pembiayaan</th>
              <th>Uang Muka</th>
              <th>Sisa Angsuran</th>
              <th>Angsuran per Bulan</th>
              <th>Tenor</th>
              <th>Jatuh Tempo Angsuran</th>
              <th>Lama Angsuran (bulan)</th>
              <th>Arsip Dokumen Akad</th>
              <th>Nama Staff</th>
              <th>NIK Nasabah</th>
            </tr>
          </thead>
          <tbody>
            <?php 
     $no = 1;
     foreach ($biaya as $biaya) :  ?>
     <tr align="center">
        <td width="20px"><?php echo $no++ ?></td>
        <td><?php echo $biaya->no_akad ?></td>
        <td><?php echo $biaya->jenis_akad ?></td>
        <td><?php echo $biaya->tgl_akad ?></td>
        <td><?php echo $biaya->jatuh_tempo ?></td>
        <td><?php echo $biaya->jenis_pembiayaan ?></td>
        <td><?php echo $biaya->nilai_pembiayaan ?></td>
        <td><?php echo $biaya->uang_muka ?></td>
        <td><?php echo $biaya->sisa_angsuran ?></td>
        <td><?php echo $biaya->angsuran_perbulan ?></td>
        <td><?php echo $biaya->lama_waktu ?></td>
        <td><?php echo $biaya->tempo_angsuran?></td>
        <td><?php echo $biaya->lama_angsuran ?></td>
        <td><?php echo $biaya->foto ?></td>
        <td><?php echo $biaya->staff?></td>
        <td><?php echo $biaya->nik?></td>
     </tr>
 <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</section>
</div>
</div>