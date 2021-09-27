<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">
</section>

<section class="content ">

  <?php echo $this->session->flashdata('pesan') ?>


 <div class="card mb-2">
    <div class="card-header bg-success text-white">
      <i class="fas fa-book"></i> Laporan Buku Besar
    </div>
    <div class="card-body">
      <form class="form-inline" action="<?php echo base_url('bendahara/BukuBesar/filter')?>" method="POST" target="_blank">

        <input type="hidden" name="nilaifilter" value="2">

        <div class="form-group mb-2">
          <label for="staticEmail12">Tanggal: </label>
          <input type="date" name="tanggalawal" class="form-control ml-2" required="">
        </div>

        <div class="form-group mb-2 ml-2">
          <label for="staticEmail12">Tanggal: </label>
          <input type="date" name="tanggalakhir" class="form-control ml-2" required="">
        </div>

<!--         <div class="form-group mb-2 ml-2">
          <label for="staticEmail12">Akun: </label>
          <select class="form-control" name="akun">
                  <option value="">--Pilih Akun--</option>
                  <?php foreach ($akun as $akun): ?>
                      <option value="<?php echo $akun->akun ?>"><?php echo $akun->akun ?></option>
                  <?php endforeach; ?>
          </select>
        </div> -->

        <button type="submit" value="print" class="btn btn-success mb-3 ml-auto"><i class="fas fa-print"></i> Print</button>
      </form>
    </div>
  </div>

    <div class="alert alert-success">
      Menampilkan Laporan Buku Besar
    </div>


        <!-- DataTales Example -->
  <div class="card mb-4 mt-2">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
          <tbody>
             <tr class="text-center">
              <th>Tanggal</th>
              <th>Keterangan</th>
              <th>Debet</th>
              <th>Kredit</th>
              <th>Saldo</th>
            </tr>
          <?php 

            $JDebet=0;
            $JKredit=0;
            foreach ($tampilkan as $teken): ?>

            <tr>
              <td><?php echo $teken->tgl; ?></td>
              <td><?php echo $teken->keterangan; ?></td>
              <td><?php echo number_format($teken->debet,0,',','.'); ?></td>
              <td><?php echo number_format($teken->kredit,0,',','.'); ?></td>
              <td>(<?php echo number_format($teken->debet-$teken->kredit,0,',','.'); ?>)</td>
               <?php  $JDebet+=$teken->debet;?>
               <?php $JKredit+=$teken->kredit; ?>
               <td></td>
            </tr>
            <?php endforeach; ?>
            <tr>
          <td colspan="2" class="text-center"><b>Sub Total</b></td>
            <td><b><?= 'Rp. '.number_format($JDebet,0,',','.') ?></b></td>
            <td><b><?= 'Rp. '.number_format($JKredit,0,',','.') ?></b></td>
            <td></td>
        </tr>
        <tr>
          <td colspan="2" class="text-center" style="color:black;"><b>Total</b></td>
          <td style="color:black;"><b><?= 'Rp. '.number_format($JDebet,0,',','.') ?></b></td>
            <td style="color:black;"><b><?= 'Rp. '.number_format($JKredit,0,',','.') ?></b></td>
            <td style="color:black;"><b><?= 'Rp. '.number_format($JDebet-$JKredit,0,',','.') ?></b></td>
        </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</section>

</div>
</div>