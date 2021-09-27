<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">

<?php echo $this->session->flashdata('pesan') ?>

<section class="content ">
<center>
<div class="card mt-5" style="width: 50%" >
<div class="card-body">
	<form method="POST" action="<?php echo base_url('kepalajaminan/ubahPassword/ubahPasswordAksi') ?>">
	
	<div class="form-group">
	<label>Password Baru</label>
	<input type="password" name="passBaru" class="form-control">
	<?php echo form_error('passBaru','<div class="text-danger small">','</div>') ?>
	</div>

	<div class="form-group">
	<label>Ulangi Password Baru</label>
	<input type="password" name="ulangPass" class="form-control">
	<?php echo form_error('ulangPass','<div class="text-danger small">','</div>') ?>
	</div>

	<button type="submit" class="btn btn-success">Simpan</button>
	<a class="btn btn-danger" href="<?php echo base_url('kepalajaminan/dashboard') ?>">Kembali</a>
	</form>
</div>
</div>
</center>
</section>
</div>
</div>