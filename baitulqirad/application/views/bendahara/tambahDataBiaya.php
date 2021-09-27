<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-plus"></i> Tambah Data Pembiayaan
</div>
</section>
<?php echo $this->session->flashdata('pesan') ?>
<section class="content ">
<div class="card mb-5">
<div class="card-body">
    <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('bendahara/pembiayaan/tambahDataAksi') ?>">

    <div class="form-group ml-3" style="width:75%;">
      <label>No Akad</label>
      <input type="text" name="no_akad" class="form-control">
      <?php echo form_error('no_akad','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Jenis Akad</label>
      <input type="text" name="jenis_akad" class="form-control">
      <?php echo form_error('jenis_akad','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Tanggal Akad</label>
      <input type="date" name="tgl_akad" class="form-control">
      <?php echo form_error('tgl_akad','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Tanggal Jatuh Tempo Akad</label>
      <input type="date" name="jatuh_tempo" class="form-control">
      <?php echo form_error('jatuh_tempo','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
    <label>Jenis Pembiayaan</label>
    <select name="jenis_pembiayaan" class="form-control">
    <option value="">-- Pilih Jenis Pembiayaan --</option>
    <option value="Kebutuhan Barang">Kebutuhan Barang</option>
    <option value="Kebutuhan Jasa">Kebutuhan Jasa</option>
    <?php echo form_error('jenis_pembiayaan','<div class="text-danger small">','</div>') ?>
    </select>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Nilai Pembiayaan</label>
      <input type="text" name="nilai_pembiayaan" class="form-control">
      <?php echo form_error('nilai_pembiayaan','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Uang Muka</label>
      <input type="text" name="uang_muka" class="form-control">
      <?php echo form_error('uang_muka','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Sisa Angsuran</label>
      <input type="text" name="sisa_angsuran" class="form-control">
      <?php echo form_error('sisa_angsuran','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Angsuran per Bulan</label>
      <input type="text" name="angsuran_perbulan" class="form-control">
      <?php echo form_error('angsuran_perbulan','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Tenor Pinjaman</label>
      <input type="text" name="lama_waktu" class="form-control">
      <?php echo form_error('lama_waktu','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group ml-3" style="width:75%;">
      <label>Jatuh Tempo Angsuran</label>
      <input type="date" name="tempo_angsuran" class="form-control">
      <?php echo form_error('tempo_angsuran','<div class="text-danger small">','</div>') ?>
    </div>
 
    <div class="form-group ml-3" style="width:75%;">
      <label>Lama Angsuran</label>
      <input type="text" name="lama_angsuran" class="form-control">
      <?php echo form_error('lama_angsuran','<div class="text-danger small">','</div>') ?>
    </div>   

    <div class="form-group ml-3" style="width:75%;">
      <label>Nama Staf Koperasi</label>
      <input type="text" name="staff" class="form-control">
      <?php echo form_error('staff','<div class="text-danger small">','</div>') ?>
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

    <div class="form-group ml-3" style="width:75%;">
    <label>Arsip Dokumen</label>
    <input type="file" name="foto" class="form-control">
    </div>
      <button type="submit" class="btn btn-success mt-3 ml-3">Simpan</button>
      <a class="btn btn-danger mt-3" href="<?php echo base_url('bendahara/pembiayaan') ?>">Kembali</a>
    </form>
</div>
</div>

</section>
</div>
</div>