<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-sitemap"></i> Posisi Pengurus
</div>
</section>
  <?php echo $this->session->flashdata('pesan') ?>
<section class="content ">
    <!-- DataTales Example -->
  <div class="card mb-4 mt-2">
    <div class="card-header py-3">
          <a class="btn btn-sm btn-success" href="<?php echo base_url('admin/dataJabatan/tambahData') ?>">
          <i class="fas fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr align="center">
              <th>Nomor</th>
              <th>Jabatan Di Koperasi Tijarah</th>
              <th>Status Aktif</th>
            </tr>
          </thead>
          <tbody>
            <?php 
     $no = 1;
     foreach ($jabatan as $jbtn) :  ?>
     <tr align="center">
        <td width="20px"><?php echo $no++ ?></td>
        <td><?php echo $jbtn->jabatan ?></td>
        <td><?php 
            if($jbtn->status == "0"){

              echo anchor('admin/dataJabatan/updateData/'.$jbtn->id_jabatan,
            '<div class="btn btn-sm btn-danger">Non Aktif</div>');
            }else{
              echo anchor('admin/dataJabatan/updateData/'.$jbtn->id_jabatan,
            '<div class="btn btn-sm btn-success">Aktif</div>');
            }
          ?>
        </td>
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