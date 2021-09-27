<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-hand-holding-usd"></i> Informasi Saldo Uang
</div>
</section>


<section class="content ">
	 <!-- DataTales Example -->
<div class="card mb-4">
  <div class="card-header py-3">
      <?php echo anchor('admin/dataAnggota','<div class="btn btn-sm btn-success">Kembali</div>') ?>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr align="center">
            <th>ID Anggota</th>
            <th>Nama Anggota</th>
            <th>Saldo Titipan Uang</th>
          
          </tr>
        </thead>
        <tbody>
          <?php 
   foreach ($anggota as $agt) :  ?>
   <tr align="center">
      <td width="50px"><?php echo $agt->id_anggota ?></td>
      <td><?php echo $agt->nama_anggota ?></td>
      <td>Rp. <?php echo $agt->saldo_uang ?></td>
<?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</section>
</div>
</div>