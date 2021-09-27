<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">

<section class="content ">

  <?php echo $this->session->flashdata('pesan') ?>

<div class="card mb-2">
    <div class="card-header bg-success text-white">
      <i class="fas fa-balance-scale-right"></i> Laporan Laba Rugi
    </div>
    <div class="card-body">
      <form class="form-inline" action="<?php echo base_url('ketua/LabaRugi/teslaba')?>" method="POST">

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
      Menampilkan Laporan Laba Rugi
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
                <td colspan="4">Pendapatan:</td>
            </tr>

            <tr style="color:black;">
              <th colspan="4">Total Pendapatan Bersih</th>
            </tr>

            <tr style="color:black;">
                <td colspan="4">Harga Pokok Penjualan:</td>
            </tr>

            <tr style="color:black;">
              <th colspan="4">Total Harga Pokok Penjualan</th>
            </tr>
            <tr style="color:black;">
              <th colspan="4" class="text-success">Total Laba Kotor</th>
            </tr>


            <tr style="color:black;">
              <th colspan="4">Beban Operasional:</th>
            </tr>
            <tr style="color:black;">
              <th colspan="4">Total Beban Operasional</th>
            </tr>

            <tr style="color:black;">
              <th colspan="4">Laba Bersih Operasional</th>
            </tr>

            <tr style="color:black;">
              <th colspan="4" class="text-success">Laba/Rugi Bersih</th>
            </tr>



          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

</div>
</div>