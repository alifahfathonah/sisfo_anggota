<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
<div class="alert alert-success" role="alert">
<i class="fas fa-edit"></i> Update Data Anggota
</div>
</section>

<?php echo $this->session->flashdata('pesan') ?>

<section class="content ">
  <?php  foreach ($anggota as $agt) :  ?>
  
  <div class="card" style="width:80%;">
      <div class="card-body">
       <form method="post" action="<?php echo base_url('admin/dataAnggota/updateDataAksi') ?>">

    <div class="form-group">
    <label>Status</label>
    <input type="hidden" name="id_anggota" class="form-control" value="<?php echo $agt->id_anggota ?>">
    <select name="status" class="form-control">
        <option <?php if($agt->status == "1"){ echo "selected='selected'";} echo $agt->status; ?> value="1">Aktif</option>
        <option <?php if($agt->status == "0"){ echo "selected='selected'";} echo $agt->status; ?> value="0">Non Aktif</option>
    <?php echo form_error('status','<div class="text-danger small">','</div>') ?>
    </select>
    </div>

    <button type="reset" class="btn btn-warning">Bersihkan</button>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a class="btn btn-danger" href="<?php echo base_url('admin/dataAnggota') ?>">Kembali</a>
    </form>
  <?php endforeach; ?>
  </div>
</div>

<br><br><br>
</section>
</div>
</div>