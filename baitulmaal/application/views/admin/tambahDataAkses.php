<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-plus"></i> Tambah Data Hak Akses
</div>
</section>

<?php echo $this->session->flashdata('pesan') ?>

<section class="content ">

<div class="card" style="width: 60%">
<div class="card-body">
	<form method="POST" action="<?php echo base_url('admin/dataAkses/tambahDataAksi') ?>">

	        <div class="form-group">
              <label>ID Anggota</label>
              <select name="id_anggota" class="form-control">
                <option value="">--Pilih ID Anggota--</option>
                 <?php foreach($anggota as $agt): ?>
                <option value="<?php echo $agt->id_anggota ?>">
                  <?php echo $agt->nama_anggota ?></option>
                 <?php endforeach; ?>
              </select>
              <?php echo form_error('id_anggota','<div class="text-danger small">','</div>') ?>
          </div>
          <div class="form-group">
              <label>Nama</label>
              <select name="nama_anggota" class="form-control">
                <option value="">--Pilih Anggota--</option>
                 <?php foreach($anggota as $agt): ?>
                <option value="<?php echo $agt->nama_anggota ?>">
                  <?php echo $agt->nama_anggota ?></option>
                 <?php endforeach; ?>
              </select>
              <?php echo form_error('nama_anggota','<div class="text-danger small">','</div>') ?>
          </div>
          <div class="form-group">
              <label>ID Jabatan</label>
              <select name="id_jabatan" class="form-control">
                <option value="">--Pilih ID Jabatan--</option>
                 <?php foreach($jabatan as $jbtn): ?>
                <option value="<?php echo $jbtn->id_jabatan ?>">
                  <?php echo $jbtn->jabatan ?></option>
                 <?php endforeach; ?>
              </select>
              <?php echo form_error('id_jabatan','<div class="text-danger small">','</div>') ?>
          </div>

          <div class="form-group">
              <label>Jabatan</label>
              <select name="jabatan" class="form-control">
                <option value="">--Pilih Jabatan--</option>
                 <?php foreach($jabatan as $jbtn): ?>
                <option value="<?php echo $jbtn->jabatan ?>">
                  <?php echo $jbtn->jabatan ?></option>
                 <?php endforeach; ?>
              </select>
              <?php echo form_error('jabatan','<div class="text-danger small">','</div>') ?>
          </div>

          <div class="form-group">
              <label>Hak Akses</label>
              <select name="hak_akses" class="form-control">
                <option value="">--Pilih Hak Akses--</option>
                 <?php foreach($jabatan as $jbtn): ?>
                <option value="<?php echo $jbtn->hak_akses ?>">
                  <?php echo $jbtn->jabatan ?></option>
                 <?php endforeach; ?>
              </select>
              <?php echo form_error('hak_akses','<div class="text-danger small">','</div>') ?>
          </div>

          <div class="form-group">
              <label>ID Admin</label>
              <select name="id_admin" class="form-control">
                <option value="">--Pilih ID Admin--</option>
                 <?php foreach($admin as $adm): ?>
                <option value="<?php echo $adm->id_anggota ?>">
                  <?php echo $adm->nama ?></option>
                 <?php endforeach; ?>
              </select>
              <?php echo form_error('id_admin','<div class="text-danger small">','</div>') ?>
          </div>
          <div class="form-group">
              <label>Nama Admin</label>
              <select name="nama_admin" class="form-control">
                <option value="">--Pilih Admin--</option>
                 <?php foreach($admin as $adm): ?>
                <option value="<?php echo $adm->nama ?>">
                  <?php echo $adm->nama ?></option>
                 <?php endforeach; ?>
              </select>
              <?php echo form_error('nama_admin','<div class="text-danger small">','</div>') ?>
          </div>
          <div class="form-group">
              <label>Tanggal Update</label>
              <input type="date" name="tgl_update" class="form-control">
              <?php echo form_error('tgl_update','<div class="text-danger small">','</div>') ?>
          </div>

	<button type="submit" class="btn btn-success">Simpan</button>
	<a class="btn btn-danger" href="<?php echo base_url('admin/dataAkses') ?>">Kembali</a>
	</form>
</div>
</div>

</section>


</div>
</div>