<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">

<section class="content ">

  <?php echo $this->session->flashdata('pesan') ?>

<div class="card mx-auto mt-5" style="width: 40%">

    <div class="card-header bg-success text-white text-center">
        Filter Buku Besar
    </div>

    <form method="POST" action="<?php echo base_url('bendahara/bukuBesar/tampilBukber') ?>">
      <div class="card-body">
       <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Akun</label>
                <div class="col-sm-9">
               <select class="form-control" name="akun">
                  <option value="">--Pilih Akun--</option>
                  <?php foreach ($akun as $akun): ?>
                      <option value="<?php echo $akun->akun ?>"><?php echo $akun->akun ?></option>
                  <?php endforeach; ?>
          </select>
          </div>
        </div>


      <button style="width:100%" type="submit" class="btn btn-success"><i class="fas fa-eye"> Tampilkan</i></button>

    </form>
  </div>

</section>

</div>
</div>