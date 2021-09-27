<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-plus"></i> Tambah Akun
</div>
</section>

<?php echo $this->session->flashdata('pesan') ?>

<section class="content ">

<div class="card" style="width: 60%">
  <div class="card-body">
	<form method="POST" action="<?php echo base_url('bendahara/akun/tambahDataAksi') ?>">
	
	<div class="form-group">
	  <label>No Reff</label>
	  <input type="text" name="no_reff" class="form-control">
	  <?php echo form_error('no_reff','<div class="text-danger small">','</div>') ?>
    </div>

	<div class="form-group">
	   <label>Akun</label>
	   <input type="text" name="akun" class="form-control">
	   <?php echo form_error('akun','<div class="text-danger small">','</div>') ?>
	</div>

	   <button type="submit" class="btn btn-success">Simpan</button>
	   <a class="btn btn-danger" href="<?php echo base_url('bendahara/akun') ?>">Kembali</a>
	   
	</form>
  </div>
</div>

</section>
</div>
</div>