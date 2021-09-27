<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
	<?php echo $this->session->flashdata('pesan') ?>

<section class="content ">
	 <!-- DataTales Example -->
<div class="card mb-4">
  <div class="card-header py-3">

    <a class="btn btn-success"  href="<?php echo base_url('admin/dataAnggota/tambahData') ?>">
    <i class="fa fa-plus"></i> Tambah</a>

    <a class="btn btn-secondary" target="_blank" href="<?php echo base_url('admin/dataAnggota/print') ?>">
    <i class="fa fa-print"></i> Print</a>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr align="center">
            <th colspan="2">ID Anggota</th>
            <th>Nama Anggota</th>
            <th>Saldo Titipan Emas</th>
            <th>Status</th>
            <th>ID Admin Pendaftar</th>
            <th>Nama Admin Pendaftar</th>
            <th>ID Admin Pengubah</th>
            <th>Nama Admin Pengubah</th>
          
          </tr>
        </thead>
        <tbody>
          <?php foreach ($anggota as $agt) :  ?>
   <tr align="center">
      <td><?php echo $agt->id_anggota ?></td>
      <td width="20px"><?php echo anchor('admin/dataAnggota/detail/'.$agt->id_anggota,
      '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?></td>
      <td width="150px"><?php echo $agt->nama_anggota ?></td>
      <td width="150px"><?php echo $agt->saldo_emas ?></td>
      <td width="150px"><?php 
            if($agt->status == "0"){

              echo anchor('admin/dataAnggota/updateData/'.$agt->id_anggota,
                  '<div class="btn btn-sm btn-danger">Non Aktif</div>');
            }else{
              echo anchor('admin/dataAnggota/updateData/'.$agt->id_anggota,
                  '<div class="btn btn-sm btn-success">Aktif</div>');
            }
          ?>
      </td>
      <td><?php echo $agt->id_admin ?></td>
      <td width="150px"><?php echo $agt->nama_admin ?></td>
      <td><?php echo $agt->id_admin ?></td>
      <td width="150px"><?php echo $agt->nama_admin ?></td>
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