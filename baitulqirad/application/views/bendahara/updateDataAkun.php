<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-edit"></i> Update Data Akun
</div>
</section>

<?php echo $this->session->flashdata('pesan') ?>

<section class="content ">
  <?php  foreach ($akun as $akun) :  ?>
  
  <div class="card" style="width:80%;">
      <div class="card-body">
       <form method="post" action="<?php echo base_url('bendahara/akun/updateDataAksi') ?>">

        <div class="form-group">
          <label>No Reff</label>
          <input type="hidden" name="id_akun" class="form-control" value="<?php echo $akun->id_akun ?>">
          <input type="text" name="no_reff" class="form-control" value="<?php echo $akun->no_reff?>">
          <?php echo form_error('no_reff', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
          <label>Akun</label>
          <input type="text" name="akun" class="form-control" value="<?php echo $akun->akun?>">
          <?php echo form_error('akun', '<div class="text-danger small" ml-3>') ?>
        </div>

    <button type="reset" class="btn btn-warning">Bersihkan</button>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a class="btn btn-danger" href="<?php echo base_url('bendahara/akun') ?>">Kembali</a>
    </form>
         <?php endforeach; ?>
  </div>
</div>

<br><br><br>
</section>
</div>
</div>