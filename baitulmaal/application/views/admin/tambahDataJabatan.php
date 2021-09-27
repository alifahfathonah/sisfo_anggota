<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-plus"></i> Tambah Posisi Pengurus
</div>
</section>
<?php echo $this->session->flashdata('pesan') ?>
<section class="content ">

<div class="card" style="width: 60%">
 <div class="card-body">
   <form method="POST" action="<?php echo base_url('admin/dataJabatan/tambahDataAksi') ?>">
	 <div class="form-group">
		 <label>Jabatan di Koperasi Tijarah</label>
		 <input type="text" name="jabatan" class="form-control">
		 <?php echo form_error('jabatan','<div class="text-danger small">','</div>') ?>
	 </div>

	 <div class="form-group">
	   <label>Status</label>
	    <select name="status" class="form-control">
	     <option value="">-- Status Aktif --</option>
	     <option value="1">Aktif</option>
	     <option value="0">Non Aktif</option>
	    </select>
	    <?php echo form_error('status','<div class="text-danger small">','</div>') ?>
     </div>

	 <div class="form-group">
		<label>Hak Akses</label>
		<input type="text" name="hak_akses" class="form-control">
		<?php echo form_error('hak_akses','<div class="text-danger small">','</div>') ?>
	 </div>

	 <button type="submit" class="btn btn-success">Simpan</button>
	 <a class="btn btn-danger" href="<?php echo base_url('admin/dataJabatan') ?>">Kembali</a>
   </form>
 </div>
</div>

</section>
</div>
</div>