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
  <?php  foreach ($jabatan as $jbtn) :  ?>
  
  <div class="card" style="width:80%;">
      <div class="card-body">
       <form method="post" action="<?php echo base_url('admin/dataJabatan/updateDataAksi') ?>">

    <div class="form-group">
    <label>Status</label>
    <input type="hidden" name="id_jabatan" class="form-control" value="<?php echo $jbtn->id_jabatan ?>">
    <select name="status" class="form-control">
        <option <?php if($jbtn->status == "1"){ echo "selected='selected'";} echo $jbtn->status; ?> value="1">Aktif</option>
        <option <?php if($jbtn->status == "0"){ echo "selected='selected'";} echo $jbtn->status; ?> value="0">Non Aktif</option>
    <?php echo form_error('status','<div class="text-danger small">','</div>') ?>
    </select>
    </div>

    <button type="reset" class="btn btn-warning">Bersihkan</button>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a class="btn btn-danger" href="<?php echo base_url('admin/dataJabatan') ?>">Kembali</a>
    </form>
  <?php endforeach; ?>
  </div>
</div>

<br><br><br>
</section>
</div>
</div>