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
      <form method="POST" action="<?php echo base_url('admin/dataAnggota/tambahDataAksi') ?>"
        enctype="multipart/form-data">

    <div class="form-group">
    <label>NIK</label>
    <input type="number" name="nik" class="form-control">
    <?php echo form_error('nik','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>Nama Anggota</label>
    <input type="text" name="nama_anggota" class="form-control">
    <?php echo form_error('nama_anggota','<div class="text-danger small">','</div>') ?>
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
    <label>Status</label>
    <select name="status" class="form-control">
    <option value="">-- Status Aktif --</option>
    <option value="1">Aktif</option>
    <option value="0">Non Aktif</option>
    <?php echo form_error('status','<div class="text-danger small">','</div>') ?>
    </select>
    </div>

    <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
    <?php echo form_error('email','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>Password</label>
    <input type="password" name="sandi" class="form-control">
    <?php echo form_error('sandi','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>ID Admin</label>
    <select name="id_admin" class="form-control">
      <option value="">--Pilih ID Admin--</option>
       <?php foreach($admin as $adm): ?>
      <option value="<?php echo $adm->id_anggota ?>"><?php echo $adm->id_anggota ?></option>
       <?php endforeach; ?>
    </select>
    <?php echo form_error('id_admin','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>Nama Admin</label>
    <select name="nama_admin" class="form-control">
      <option value="">--Pilih Admin--</option><?php foreach($admin as $adm): ?>
      <option value="<?php echo $adm->nama ?>"><?php echo $adm->nama ?></option>
       <?php endforeach; ?>
    </select>
    <?php echo form_error('nama_admin','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>ID Jabatan</label>
    <select name="id_jabatan" class="form-control">
      <option value="">--Pilih ID Jabatan--</option>
       <?php foreach($jabatan as $jbtn): ?>
      <option value="<?php echo $jbtn->id_jabatan ?>"><?php echo $jbtn->jabatan ?></option>
       <?php endforeach; ?>
    </select>
    <?php echo form_error('id_jabatan','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>Tanggal Daftar</label>
    <input type="date" name="tgl_daftar" class="form-control">
    <?php echo form_error('tgl_daftar','<div class="text-danger small">','</div>') ?>
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

    <div class="form-group">
    <label>Jabatan</label>
    <select name="jabatan" class="form-control">
      <option value="">--Pilih Jabatan--</option>
       <?php foreach($jabatan as $jbtn): ?>
      <option value="<?php echo $jbtn->jabatan ?>"><?php echo $jbtn->jabatan ?></option>
       <?php endforeach; ?>
    </select>
    <?php echo form_error('jabatan','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>Hak Akses</label>
    <select name="hak_akses" class="form-control">
      <option value="">--Pilih Hak Akses--</option>
       <?php foreach($jabatan as $jbtn): ?>
      <option value="<?php echo $jbtn->hak_akses ?>"><?php echo $jbtn->jabatan ?></option>
       <?php endforeach; ?>
    </select>
    <?php echo form_error('hak_akses','<div class="text-danger small">','</div>') ?>
    </div>

    <div class="form-group">
    <label>Foto</label>
    <input type="file" name="foto" class="form-control">
    </div>

    <button type="reset" class="btn btn-warning">Bersihkan</button>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a class="btn btn-danger" href="<?php echo base_url('admin/dataAnggota') ?>">Kembali</a>
    
    </form>
  </div>
</div>

</section>
</div>
</div>