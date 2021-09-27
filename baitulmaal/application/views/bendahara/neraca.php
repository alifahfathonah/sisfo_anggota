<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">

<section class="content ">

<div class="card mb-2">
    <div class="card-header bg-success text-white">
      <i class="fas fa-balance-scale"></i> Laporan Posisi Keuangan
    </div>
    <div class="card-body">
      <form class="form-inline" action="<?php echo base_url('bendahara/Neraca/tesneraca')?>" method="POST">

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
      Menampilkan Laporan Posisi Keuangan
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

            </tr>

            <tr style="color:black;">
                <td colspan="4" class="text-success">Aset</td>
            </tr>

            <tr style="color:black;">
                <td colspan="4">Aset Lancar:</td>
            </tr>

            <tr style="color:black;">
              <th colspan="4">Total Aset Lancar</th>
            </tr>

            <tr style="color:black;">
                <td colspan="4">Aset Tidak Lancar:</td>
            </tr>

            <tr style="color:black;">
              <th colspan="4">Total Aset Tidak Lancar</th>
            </tr>
         

            <tr style="color:black;">
              <th colspan="4" class="text-success">Liabilitas Dan Saldo Dana</th>
            </tr>
            <tr style="color:black;">
              <th colspan="4">Liabilitas Jangka Pendek:</th>
            </tr>
            <tr style="color:black;">
              <th colspan="4">Total Liabilitas Jangka Pendek</th>
            </tr>
            <tr style="color:black;">
              <th colspan="4">Liabilitas Jangka Panjang:</th>
            </tr>
            <tr style="color:black;">
              <th colspan="4">Total Liabilitas Jangka Panjang</th>
            </tr>


            <tr style="color:black;">
              <th colspan="4">Saldo Dana:</th>
            </tr>
            <tr style="color:black;">
              <th colspan="4">Dana Zakat</th>
            </tr>
            <tr style="color:black;">
              <th colspan="4">Dana Infak</th>
            </tr>
            <tr style="color:black;">
              <th colspan="4">Dana Amil</th>
            </tr>
            <tr style="color:black;">
              <th colspan="4">Dana Nonhalal</th>
            </tr>
            <tr style="color:black;">
              <th colspan="4">Total Saldo Dana</th>
            </tr>

            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</section>

</div>
</div>