<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-low-vision"></i> Data Hak Akses
</div>
</section>

<?php echo $this->session->flashdata('pesan') ?>

<section class="content ">

    <!-- DataTales Example -->
  <div class="card mb-4 mt-2">
    <div class="card-header py-3">
      <a class="btn btn-success"  href="<?php echo base_url('admin/dataAkses/tambahData') ?>">
      <i class="fas fa-plus"></i> Tambah Data</a>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr align="center">
              <th>ID Anggota</th>
              <th>Nama Anggota</th>
              <th>Jabatan</th>
              <th>Hak Akses</th>
              <th>Tanggal Update</th>
              <th>Nama Admin</th>
            </tr>
          </thead>
          <tbody>
            <?php 
         foreach ($akses as $aks) :  ?>
         <tr align="center">
            <td><?php echo $aks->id_anggota ?></td> 
            <td><?php echo $aks->nama_anggota ?></td>
            <td><?php echo $aks->jabatan ?></td>
            <td><?php echo $aks->hak_akses ?></td>
            <td><?php echo $aks->tgl_update ?></td>
            <td><?php echo $aks->nama_admin ?></td>
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