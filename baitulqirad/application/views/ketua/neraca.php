<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">

<section class="content ">


<?php echo $this->session->flashdata('pesan') ?>

<div class="card mb-2">
    <div class="card-header bg-success text-white">
      <i class="fas fa-balance-scale"></i> Laporan Neraca
    </div>
    <div class="card-body">
      <form class="form-inline" action="<?php echo base_url('ketua/Neraca/tesneraca')?>" method="POST">

        <input type="hidden" name="nilaifilter" value="2">

        <div class="form-group mb-2">
          <label for="staticEmail12">Tanggal: </label>
          <input type="date" name="tanggalawal" class="form-control ml-2" required="">
        </div>

        <div class="form-group mb-2 ml-2">
          <label for="staticEmail12">Tanggal: </label>
          <input type="date" name="tanggalakhir" class="form-control ml-2" required="">
        </div>
        <button type="submit"class="btn btn-success mb-3 ml-auto"><i class="fas fa-eye"></i> Tampilakan</button>
      </form>
    </div>
  </div>

    <div class="alert alert-success">
      Menampilkan Laporan Neraca
    </div>

        <!-- DataTales Example -->
  <div class="card mb-4 mt-2">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
          <tbody>
             <tr class="text-center">
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>

            <tr style="color:black;">
                <td colspan="4">Aktiva Lancar:</td>
            </tr>

            <tr style="color:black;">
              <th colspan="4">Total Aktiva Lancar</th>
            </tr>

            <tr style="color:black;">
                <td colspan="4">Aktiva Tetap:</td>
            </tr>

            <tr style="color:black;">
              <th colspan="4">Total Aktiva Tetap</th>
            </tr>
            <tr style="color:black;">
              <th colspan="4" class="text-success">Total Aktiva</th>
            </tr>


            <tr style="color:black;">
              <th colspan="4">Kewajiban:</th>
            </tr>
            <tr style="color:black;">
              <th colspan="4">Total Kewajiban</th>
            </tr>

            <tr style="color:black;">
              <th colspan="4">Modal:</th>
            </tr>

            <tr style="color:black;">
              <th colspan="4" class="text-success">Total Kewajiban dan Modal </th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</section>

</div>
</div>