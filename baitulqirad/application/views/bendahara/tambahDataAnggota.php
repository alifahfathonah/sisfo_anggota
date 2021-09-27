<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-plus"></i> Tambah Data Anggota
</div>
</section>

<?php echo $this->session->flashdata('pesan') ?>

<section class="content ">
 <div class="card" style="width:90%;">
    <div class="card-body">
      <form method="POST" action="<?php echo base_url('bendahara/dataAnggota/tambahDataAksi') ?>"
        enctype="multipart/form-data">

    <div class="form-group">
    <label>NIK</label>
    <input type="number" name="nik" class="form-control">
    <?php echo form_error('nik','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>Nama Anggota</label>
    <input type="text" name="nama" class="form-control">
    <?php echo form_error('nama','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir" class="form-control">
    <?php echo form_error('tempat_lahir','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="tgl_lahir" class="form-control">
    <?php echo form_error('tgl_lahir','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control">
    <option value="">-- Pilih Jenis Kelamin --</option>
    <option value="Laki-Laki">Laki-Laki</option>
    <option value="Perempuan">Perempuan</option>
    <?php echo form_error('jenis_kelamin','<div class="text-danger small">','</div>') ?>
    </select>
    </div>

    <div class="form-group">
    <label>Status Perkawinan</label>
    <select name="status_kawin" class="form-control">
    <option value="">-- Pilih Status Perkawinan --</option>
    <option value="Sudah Kawin">Sudah Kawin</option>
    <option value="Belum Kawin">Belum Kawin</option>
    <?php echo form_error('status_kawin','<div class="text-danger small">','</div>') ?>
    </select>
    </div>

    <div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control">
    <?php echo form_error('alamat','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>Nomor HP</label>
    <input type="number" name="no_hp" class="form-control">
    <?php echo form_error('no_hp','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
    <?php echo form_error('email','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>Jabatan</label>
    <input type="text" name="jabatan" class="form-control">
    <?php echo form_error('jabatan','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
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

    <div class="form-group">
    <label>Saldo Titipan Uang</label>
    <input type="text" name="saldo_uang" class="form-control">
    <?php echo form_error('saldo_uang','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>Saldo Titipan Emas</label>
    <input type="text" name="saldo_emas" class="form-control">
    <?php echo form_error('saldo_emas','<div class="text-danger small">','</div>') ?>
    </div>

    <button type="reset" class="btn btn-warning">Bersihkan</button>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a class="btn btn-danger" href="<?php echo base_url('bendahara/dataAnggota') ?>">Kembali</a>
    
    </form>
  </div>
</div>

</section>
</div>
</div>