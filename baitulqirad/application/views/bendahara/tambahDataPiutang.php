<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-plus"></i> Tambah Data Piutang
</div>
</section>
<?php echo $this->session->flashdata('pesan') ?>
<section class="content ">
<div class="card mb-5">
<div class="card-body">
    <form method="POST" action="<?php echo base_url('bendahara/piutang/tambahDataAksi') ?>">

    <div class="form-group ml-3" style="width: 75%">
    <label>ID Anggota</label>
    <select name="id_anggota" class="form-control">
      <option value="">--Pilih ID Anggota--</option>
       <?php foreach($anggota as $agt): ?>
      <option value="<?php echo $agt->id_anggota ?>"><?php echo $agt->nama ?></option>
       <?php endforeach; ?>
    </select>
    <?php echo form_error('id_anggota','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Tanggal Peminjaman</label>
      <input type="date" name="tgl_pinjam" class="form-control">
      <?php echo form_error('tgl_pinjam','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width: 75%">
    <label>No Reff</label>
    <select name="no_reff" class="form-control">
      <option value="">--Pilih No Reff--</option>
       <?php foreach($akun as $akn): ?>
      <option value="<?php echo $akn->no_reff ?>"><?php echo $akn->akun ?></option>
       <?php endforeach; ?>
    </select>
    <?php echo form_error('no_reff','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width: 75%">
    <label>Akun</label>
    <select name="akun" class="form-control">
      <option value="">--Pilih Akun--</option>
       <?php foreach($akun as $akn): ?>
      <option value="<?php echo $akn->akun ?>"><?php echo $akn->akun ?></option>
       <?php endforeach; ?>
    </select>
    <?php echo form_error('akun','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width: 75%">
    <label>Nama</label>
    <select name="nama" class="form-control">
      <option value="">--Pilih Nama--</option>
       <?php foreach($anggota as $agt): ?>
      <option value="<?php echo $agt->nama ?>"><?php echo $agt->nama ?></option>
       <?php endforeach; ?>
    </select>
    <?php echo form_error('nama','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Debet</label>
      <input type="text" name="debet" class="form-control">
      <?php echo form_error('debet','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Kredit</label>
      <input type="text" name="kredit" class="form-control">
      <?php echo form_error('kredit','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Keterangan</label>
      <input type="text" name="keterangan" class="form-control">
      <?php echo form_error('keterangan','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width: 75%">
    <label>NIK</label>
    <select name="nik" class="form-control">
      <option value="">-- Pilih NIK</option>
       <?php foreach($anggota as $agt): ?>
      <option value="<?php echo $agt->nik ?>"><?php echo $agt->nik ?></option>
       <?php endforeach; ?>
    </select>
    <?php echo form_error('nik','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width: 75%">
    <label>Hak Akses</label>
    <select name="hak_akses" class="form-control">
      <option value="">-- Pilih Hak Akses</option>
       <?php foreach($anggota as $agt): ?>
      <option value="<?php echo $agt->hak_akses ?>"><?php echo $agt->hak_akses ?></option>
       <?php endforeach; ?>
    </select>
    <?php echo form_error('hak_akses','<div class="text-danger small">','</div>') ?>
    </div>

      <button type="submit" class="btn btn-success mt-3 ml-3">Simpan</button>
      <a class="btn btn-danger mt-3" href="<?php echo base_url('bendahara/piutang') ?>">Kembali</a>
    </form>
</div>
</div>

</section>
</div>
</div>