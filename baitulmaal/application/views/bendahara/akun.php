<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">

	<?php echo $this->session->flashdata('pesan') ?>

<section class="content ">

 <!-- DataTales Example -->
  <div class="card mb-4 mt-2">
    <div class="card-header py-3">
          <a class="btn btn-success" href="<?php echo base_url('bendahara/akun/tambahData') ?>">
          <i class="fas fa-plus"></i> Tambah </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr align="center">
              <th>Nomor</th>
              <th>No Reff</th>
              <th>Akun</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php 
     $no = 1;
     foreach ($akun as $akun) :  ?>
     <tr align="center">
        <td width="20px"><?php echo $no++ ?></td>
        <td><?php echo $akun->no_reff ?></td>
        <td><?php echo $akun->akun ?></td>
        <td width="20px"><?php echo anchor('bendahara/akun/updateData/'.$akun->id_akun,
        '<div class="btn btn-sm btn-success"><i class="fas fa-edit"></i></div>') ?></td>
        <td width="20px" onclick="javsscript: return confirm('Anda Yakin Menghapus Data Ini?')"><?php echo anchor('bendahara/akun/deleteData/'.$akun->id_akun,
        '<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?></td>
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