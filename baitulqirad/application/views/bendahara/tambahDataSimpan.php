<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-plus"></i> Tambah Data Simpanan
</div>
</section>
<?php echo $this->session->flashdata('pesan') ?>
<section class="content ">
<div class="card mb-5">
<div class="card-body">
    <form method="POST" action="<?php echo base_url('bendahara/simpanan/tambahAksi') ?>">

    <div class="form-group ml-3" style="width: 75%">
    <label>ID Anggota</label>
    <select name="id_anggota" class="form-control">
      <option value="">--Pilih ID Anggota--</option>
       <?php foreach($anggota as $row): ?>
      <option value="<?php echo $row->id_anggota ?>"><?php echo $row->nama ?></option>
       <?php endforeach; ?>
    </select>
    <?php echo form_error('id_anggota','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width: 75%">
    <label>NIK</label>
    <select name="nik" class="form-control">
      <option value="">--Pilih NIK--</option>
       <?php foreach($anggota as $row): ?>
      <option value="<?php echo $row->nik ?>"><?php echo $row->nik ?></option>
       <?php endforeach; ?>
    </select>
    <?php echo form_error('nik','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width: 75%">
    <label>Nama</label>
    <select name="nama" class="form-control">
      <option value="">--Pilih Nama Nasabah--</option>
       <?php foreach($anggota as $row): ?>
      <option value="<?php echo $row->nama ?>"><?php echo $row->nama ?></option>
       <?php endforeach; ?>
    </select>
    <?php echo form_error('nama','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Tanggal Simpanan</label>
      <input type="date" name="tgl_simpan" class="form-control">
      <?php echo form_error('tgl_simpan','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Simpanan Pokok</label>
      <input type="text" name="simpanan_pokok" class="form-control">
      <?php echo form_error('simpanan_pokok','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Simpanan Wajib</label>
      <input type="text" name="simpanan_wajib" class="form-control">
      <?php echo form_error('simpanan_wajib','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Simpanan Sukarela</label>
      <input type="text" name="simpanan_sukarela" class="form-control">
      <?php echo form_error('simpanan_sukarela','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
    <label>Hak Akses</label>
    <select name="hak_akses" class="form-control">
    <option value="">-- Pilih Hak Akses --</option>
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <?php echo form_error('hak_akses','<div class="text-danger small">','</div>') ?>
    </select>
    </div>

      <button type="submit" class="btn btn-success mt-3 ml-3">Simpan</button>
      <a class="btn btn-danger mt-3" href="<?php echo base_url('bendahara/simpanan') ?>">Kembali</a>
    </form>
</div>
</div>

</section>
</div>
</div>