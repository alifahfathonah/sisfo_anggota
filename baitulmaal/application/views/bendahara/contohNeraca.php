<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">

<section class="content ">

<div class="card mb-2">
    <div class="card-header bg-success text-white">
      <i class="fas fa-balance-scale"></i> Laporan Posisi Keuangan
    </div>
    <div class="card-body">
      <form class="form-inline" action="<?php echo base_url('bendahara/Neraca/print')?>" method="POST" target="_blank">

        <input type="hidden" name="nilaifilter" value="2">

        <div class="form-group mb-2">
          <label for="staticEmail12">Tanggal: </label>
          <input type="date" name="tanggalawal" class="form-control ml-2" required="">
        </div>

        <div class="form-group mb-2 ml-2">
          <label for="staticEmail12">Tanggal: </label>
          <input type="date" name="tanggalakhir" class="form-control ml-2" required="">
        </div>
        <button type="submit"class="btn btn-secondary mb-3 ml-auto"><i class="fas fa-print"></i> Print</button>
      </form>
    </div>
  </div>

    <div class="alert alert-success">
      Menampilkan Laporan Posisi Keungan
    </div>

        <!-- DataTales Example -->
  <div class="card mb-4 mt-2">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
          <tbody>
            <tr >
              <th colspan="10">Dari tanggal <?=$date['awal'];?> sampai <?=$date['akhir'];?></th>
            </tr>

            <!-- Aset -->
            <tr class="text-center" style="color:black;">
                <td colspan="5" class="text-success">Aset</td>
            </tr>

            <!-- Aset Lancar -->
            <tr class="text-center" style="color:black;">
                <td colspan="5">Aset Lancar:</td>
            </tr>
            <?php foreach ($lancar as $row):?>
            <tr>
              <td width="20"></td>
                <td colspan="2"><?=$row->akun;?></td>
                <td><?=number_format($row->t_debet-$row->t_kredit,0,'','.');?></td> 
                <td></td>
            </tr>
            <?php endforeach;?>
            <tr style="color:black;">
              <th colspan="3">Total Aset Lancar</th>
              <td></td>
              <td><?=number_format($t_lancar->saldo,0,'','.');?></td>
            </tr>

            <!-- Aset Tidak Lancar -->
            <tr class="text-center" style="color:black;">
                <td colspan="5">Aset Tidak Lancar:</td>
            </tr>
            <?php foreach ($tdklancar as $row):?>
            <tr>
              <td width="20"></td>
                <td colspan="2"><?=$row->akun;?></td>
                <td><?=number_format($row->t_debet-$row->t_kredit,0,'','.');?></td> 
                <td></td>
            </tr>
            <?php endforeach;?>
            <tr style="color:black;">
              <th colspan="3">Total Aset Tidak Lancar</th>
              <td></td>
              <td><?=number_format($t_tdklancar->saldo,0,'','.');?></td>
            </tr>

            <!-- Total Aset--> 
            <tr class="text-center" style="color:black;">
              <th colspan="3" class="text-success">Total Aset</th>
              <td></td>
              <td class="text-success"><?=number_format($t_aset->saldo,0,'','.');?></td>
            </tr>

            <!-- Liabilitas Dan Saldo Dana -->
            <tr class="text-center" style="color:black;">
                <td colspan="5" class="text-success">Liabilitas Dan Saldo Dana</td>
            </tr>

            <!-- Lliabilitas Jangka Pendek -->
            <tr class="text-center" style="color:black;">
                <td colspan="5">Liabilitas Jangka Pendek:</td>
            </tr>
            <?php foreach ($ljpendek as $row):?>
            <tr>
              <td width="20"></td>
                <td colspan="2"><?=$row->akun;?></td>
                <td><?=number_format($row->t_debet-$row->t_kredit,0,'','.');?></td>
                <td></td>
            </tr>
            <?php endforeach;?>
            <tr style="color:black;">
              <th colspan="3">Total Liabilitas Jangka Pendek</th>
              <td></td>
              <td><?=number_format($t_ljpendek->saldo,0,'','.');?></td>
            </tr>

            <!-- Liabilitas Jangka Panjang -->
             <tr class="text-center" style="color:black;">
                <td colspan="5">Liabilitas Jangka Panjang:</td>
            </tr>
            <?php foreach ($ljpanjang as $row):?>
            <tr>
              <td width="20"></td>
                <td colspan="2"><?=$row->akun;?></td>
                <td><?=number_format($row->t_debet-$row->t_kredit,0,'','.');?></td>
                <td></td>
            </tr>
            <?php endforeach;?>
            <tr style="color:black;">
              <th colspan="3">Total Liabilitas Jangka Panjang</th>
              <td></td>
              <td><?=number_format($t_ljpanjang->saldo,0,'','.');?></td>
            </tr>

           <!-- Total Aset--> 
            <tr style="color:black;">
              <th colspan="3" class="">Total Liabilitas</th>
              <td></td>
              <td class=""><?=number_format($t_liabilitas->saldo,0,'','.');?></td>
            </tr>


            <!-- Saldo Dana -->
            <tr class="text-center" style="color:black;">
                <td colspan="5">Saldo Dana:</td>
            </tr>

            <!-- Saldo Dana Zakat -->
            <tr style="color:grey;">
              <td width="20"></td>
              <th colspan="2" class="">Dana Zakat</th>
              <td><?=number_format($t_Szakat->saldo,0,'','.');?></td>
              <td></td>
            </tr>

            <!-- Saldo Dana Infak/sedekah -->
            <tr style="color:grey;">
              <td width="20"></td>
              <th colspan="2" class="">Dana Infak/Sedekah</th>
              <td><?=number_format($t_Sinfak->saldo,0,'','.');?></td>
              <td></td>
            </tr>

             <!-- Saldo Dana wakaf -->
            <tr style="color:grey;">
              <td width="20"></td>
              <th colspan="2" class="">Dana Wakaf</th>
              <td><?=number_format($t_Swakaf->saldo,0,'','.');?></td>
              <td></td>
            </tr>

            <!-- Saldo Dana Amil -->
             <tr style="color:grey;">
              <td width="20"></td>
              <th colspan="2" class="">Dana Amil</th>
              <td><?=number_format($t_Samil->saldo,0,'','.');?></td>
              <td></td>
            </tr>

            <!-- Saldo Dana Nonhalal -->
            <tr style="color:grey;">
              <td width="20"></td>
              <th colspan="2" class="">Dana Nonhalal</th>
              <td><?=number_format($t_Snonhalal->saldo,0,'','.');?></td>
              <td></td>
            </tr>

            <!-- Total Dana--> 
            <tr style="color:black;">
              <th colspan="3">Total Dana</th>
              <td></td>
              <td><?=number_format($t_dana->saldo,0,'','.');?></td>
            </tr>


            <!-- Total Liabilitas Dan Saldo Dana--> 
            <tr class="text-center" style="color:black;">
              <th colspan="3" class="text-success">Total Liabilitas Dan Saldo Dana </th>
              <td></td>
              <td class="text-success" ><?=number_format($t_ljdana->saldo,0,'','.');?></td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</section>

</div>
</div>