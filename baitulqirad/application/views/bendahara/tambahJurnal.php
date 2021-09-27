<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-plus"></i> Tambah Jurnal
</div>
</section>
<?php echo $this->session->flashdata('pesan') ?>
<section class="content ">
<div class="card mb-5">
<div class="card-body">
    <form method="POST" action="<?php echo base_url('bendahara/jurnal/tambahAksi') ?>">

    <div class="row">

    <div class="form-group ml-4" style="width: 20%">
    <label>Tanggal</label>
    <input type="date" name="tgl" class="form-control">
    <?php echo form_error('tgl','<div class="text-danger small">','</div>') ?>
    </div>

    </div>

    <div class="row">  

      <div class="form-group ml-4" style="width: 7%">
      <label>No Reff</label>
      <input name="no_reff_debet" class="form-control" readonly>
      <?php echo form_error('no_reff','<div class="text-danger small">','</div>') ?>
      </div>

      <div class="form-group ml-2 " style="width: 28%">
        <label>Transaksi Debet</label>
        <select name="akun_debet" class="form-control" onchange="getkodeakundebet()">
        <option value="">--Pilih Transaksi--</option>

         <?php foreach($akun as $row): ?>
        <option value="<?php echo $row->akun ?>">
          <?php echo $row->akun ?></option>
          <?php endforeach; ?>
       </select>
       <input type="hidden" name="id_akun_debet">
         <?php echo form_error('akun','<div class="text-danger small">','</div>') ?>
      </div>

      <div class="form-group ml-4" style="width: 7%">
        <label>No Reff</label>
        <input name="no_reff_kredit" class="form-control" readonly>
        <?php echo form_error('no_reff','<div class="text-danger small">','</div>') ?>
        </div>

        <div class="form-group ml-2 " style="width: 28%">
          <label>Transaksi Kredit</label>
        <select name="akun_kredit" class="form-control" onchange="getkodeakunkredit()">
        <option value="">--Pilih Transaksi--</option>

         <?php foreach($akun as $row): ?>
        <option value="<?php echo $row->akun ?>">
          <?php echo $row->akun ?></option>
          <?php endforeach; ?>
       </select>
       <input type="hidden" name="id_akun_kredit">
           <?php echo form_error('akun','<div class="text-danger small">','</div>') ?>
        </div>

        </div>  

    <div class="form-group ml-3" style="width:75%;">
      <label>Keterangan</label>
      <input type="text" name="keterangan" class="form-control">
      <?php echo form_error('keterangan','<div class="text-danger small">','</div>') ?>
    </div>

      <div class="form-group ml-3" style="width:75%;">
      <label>Saldo</label>
      <input type="text" name="saldo" class="form-control">
      <?php echo form_error('','<div class="text-danger small">','</div>') ?>
    </div>

      <button type="submit" class="btn btn-success mt-3">Simpan</button>
      <a class="btn btn-danger mt-3" href="<?php echo base_url('bendahara/jurnal') ?>">Kembali</a>
    </form>
</div>
</div>

</section>
</div>
</div>