<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="far fa-address-book"></i> Data Anggota
</div>
</section>

	<?php echo $this->session->flashdata('pesan') ?>

<section class="content ">
	 <!-- DataTales Example -->
<div class="card mb-4">
  <div class="card-header py-3">

    <a class="btn btn-success"  href="<?php echo base_url('bendahara/dataAnggota/tambahData') ?>">
    <i class="fa fa-plus"></i> Tambah</a>

    <a class="btn btn-secondary" target="_blank" href="<?php echo base_url('bendahara/dataAnggota/print') ?>">
    <i class="fa fa-print"></i> Print</a>

  <!-- <div class="dropdown d-none d-sm-inline-block form-inline mr-auto ">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-download"></i> Export
  </button>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" target="_blank" href="<?php echo base_url('bendahara/dataAnggota/pdf') ?>">PDF</a>
    <a class="dropdown-item" target="_blank" href="<?php echo base_url('bendahara/dataAnggota/excel') ?>">EXCEL</a>
  </div>
  </div> -->
  <div class="dropdown d-none d-sm-inline-block form-inline mr-auto ">
  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-credit-card"></i> Saldo
  </button>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="<?php echo base_url('bendahara/dataAnggota/saldoUang') ?>">Saldo Uang</a>
    <a class="dropdown-item" href="<?php echo base_url('bendahara/dataAnggota/saldoEmas') ?>">Saldo Emas</a>
  </div>
  </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr align="center">
            <th width="15px">No.</th>
             <th>Nama Anggota</th>
             <th>NIK</th>
             <th>Tempat Lahir</th>
             <th>Tanggal Lahir
             <th>Jenis Kelamin</th></th>
             <th>Pernikahan</th>
             <th>Alamat</th>
             <th>Nomor HP</th>
             <th>Jabatan</th>
             <th>Titipan Uang</th>
             <th>Titipan Emas</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $no = 1;
             foreach ($anggota as $agt) :  ?>
          <tr align="center">
                <td width="15px"><?php echo $no++ ?></td>
                <td><?php echo $agt->nama ?></td>
                <td><?php echo $agt->nik ?></td>
                <td><?php echo $agt->tempat_lahir ?></td>
                <td><?php echo $agt->tgl_lahir ?></td>
                <td><?php echo $agt->jenis_kelamin ?></td>
                <td><?php echo $agt->status_kawin ?></td>
                <td><?php echo $agt->alamat ?></td>
                <td><?php echo $agt->no_hp ?></td>
                <td><?php echo $agt->jabatan ?></td>
                <td><?php echo $agt->saldo_uang ?></td>
                <td><?php echo $agt->saldo_emas ?></td>
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