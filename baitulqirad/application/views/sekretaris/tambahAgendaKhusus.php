<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-calender"></i> Tambah Agenda
</div>
</section>
<?php echo $this->session->flashdata('pesan') ?>
<section class="content ">

<div class="card" style="width: 60%">
 <div class="card-body">
   <form method="POST" action="<?php echo base_url('sekretaris/agendaKhusus/tambahDataAksi') ?>">
	 <div class="form-group">
		 <label>Bulan</label>
		 <input type="text" name="bulan" class="form-control">
		 <?php echo form_error('bulan','<div class="text-danger small">','</div>') ?>
	 </div>

	 <div class="form-group">
	   <label>Tanggal</label>
		<input type="date" name="tanggal" class="form-control">
		 <?php echo form_error('tanggal','<div class="text-danger small">','</div>') ?>
     </div>

	 <div class="form-group">
		<label>Jam</label>
		<input type="time" name="jam" class="form-control">
		<?php echo form_error('jam','<div class="text-danger small">','</div>') ?>
	 </div>

	 <div class="form-group">
		<label>Agenda</label>
		<input type="text" name="agenda" class="form-control">
		<?php echo form_error('agenda','<div class="text-danger small">','</div>') ?>
	 </div>

	 <div class="form-group">
		<label>Lokasi</label>
		<input type="text" name="lokasi" class="form-control">
		<?php echo form_error('lokasi','<div class="text-danger small">','</div>') ?>
	 </div>

	 <div class="form-group">
		<label>Keterangan</label>
		<input type="text" name="keterangan" class="form-control">
		<?php echo form_error('keterangan','<div class="text-danger small">','</div>') ?>
	 </div>

	 <button type="submit" class="btn btn-success">Simpan</button>
	 <a class="btn btn-danger" href="<?php echo base_url('sekretaris/agendaKhusus') ?>">Kembali</a>
   </form>
 </div>
</div>

</section>
</div>
</div>