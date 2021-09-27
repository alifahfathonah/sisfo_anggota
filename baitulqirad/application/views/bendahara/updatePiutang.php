<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-edit"></i> Update Data Posisi Pengurus
</div>
</section>

<?php echo $this->session->flashdata('pesan') ?>

<section class="content ">
  <?php  foreach ($piutang as $ptg) :  ?>
  
  <div class="card" style="width:80%;">
      <div class="card-body">
       <form method="post" action="<?php echo base_url('bendahara/piutang/updateDataPiutang') ?>">

    <div class="form-group">
    <label>Saldo</label>
    <input type="hidden" name="id_piutang" class="form-control" value="<?php echo $ptg->id_piutang ?>">
    <input type="text" name="saldo" class="form-control" value="<?php echo $ptg->saldo ?>">
    <?php echo form_error('saldo','<div class="text-danger small">','</div>') ?>
    </select>
    </div>

    <button type="reset" class="btn btn-warning">Bersihkan</button>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a class="btn btn-danger" href="<?php echo base_url('bendahara/piutang/tampilData') ?>">Kembali</a>
    </form>
  <?php endforeach; ?>
  </div>
</div>

<br><br><br>
</section>
</div>
</div>