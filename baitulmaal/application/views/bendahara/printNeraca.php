<!DOCTYPE html>
<html>
<head>
  <title>Print Laporan Laba Rugi</title>

<style type="text/css">
  body{
    font-family:Arial;
    color: black;
    background-color: white;
  }
  h2{
    margin-top: 30px;
  }
  .tabel1{
    font-family: sans-serif;
    color: #000;
    width: 100%;
    border: 10px solid #fff;
    table-layout: fixed;
    margin-top: 50px;
  }
  .tabel1 tr th{
    background: #e9e9e9;
    color: #000;
    font-weight: normal;
  }
  .tabel1, th, td{
    border: 1px solid #000;
    padding: 8px 10px;
    border-collapse: collapse;
    font-size: 20px;
  }
</style>
</head>
<body>
  <center>
    <img src="" width='100px' class="mt-3">
    <h2 class="mt-2">KOPERASI TABARRU-BAITUL MAAL</h2>
    <h3>LAPORAN POSISI KEUANGAN KOPERASI TABARRU</h3>
    <img src="<?php echo base_url() ?>assets/img/BM.png" width='140px'>
    <hr style="width: 100%; border-width:5px; color:black;">
  </center>

 <table class="tabel1" align="center">
 <tr class="text-center">
              <th colspan="5">Dari tanggal <?=$date['awal'];?> sampai <?=$date['akhir'];?></th>
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
                <td colspan="3"><?=$row->akun;?></td>
                <td><?=number_format($row->t_debet-$row->t_kredit,0,'','.');?></td> 
                <td></td>
            </tr>
            <?php endforeach;?>
            <tr style="color:black;">
              <th class="text-center" colspan="3">Total Aset Lancar</th>
              <td></td>
              <td><?=number_format($t_lancar->saldo,0,'','.');?></td>
            </tr>

            <!-- Aset Tidak Lancar -->
            <tr class="text-center" style="color:black;">
                <td colspan="5">Aset Tidak Lancar:</td>
            </tr>
            <?php foreach ($tdklancar as $row):?>
            <tr>
                <td colspan="3"><?=$row->akun;?></td>
                <td><?=number_format($row->t_debet-$row->t_kredit,0,'','.');?></td> 
                <td></td>
            </tr>
            <?php endforeach;?>
            <tr style="color:black;">
              <th class="text-center" colspan="3">Total Aset Tidak Lancar</th>
              <td></td>
              <td><?=number_format($t_tdklancar->saldo,0,'','.');?></td>
            </tr>

            <!-- Total Aset--> 
            <tr class="text-center" style="color:black;">
              <th colspan="3" class="text-success">Total Aset</th>
              <td></td>
              <td class="text-success"><?=number_format($t_aset->saldo,0,'','.');?></td>
            </tr>

            <td colspan="5" style="color:white;">.</td>

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
                <td colspan="3"><?=$row->akun;?></td>
                <td><?=number_format($row->t_debet-$row->t_kredit,0,'','.');?></td>
                <td></td>
            </tr>
            <?php endforeach;?>
            <tr style="color:black;">
              <th class="text-center" colspan="3">Total Liabilitas Jangka Pendek</th>
              <td></td>
              <td><?=number_format($t_ljpendek->saldo,0,'','.');?></td>
            </tr>

            <!-- Liabilitas Jangka Panjang -->
             <tr class="text-center" style="color:black;">
                <td colspan="5">Liabilitas Jangka Panjang:</td>
            </tr>
            <?php foreach ($ljpanjang as $row):?>
            <tr>
                <td colspan="3"><?=$row->akun;?></td>
                <td><?=number_format($row->t_debet-$row->t_kredit,0,'','.');?></td>
                <td></td>
            </tr>
            <?php endforeach;?>
            <tr style="color:black;">
              <th class="text-center" colspan="3">Total Liabilitas Jangka Panjang</th>
              <td></td>
              <td><?=number_format($t_ljpanjang->saldo,0,'','.');?></td>
            </tr>

            <!-- Total Liabilitas--> 
            <tr style="color:black;">
              <th class="text-center" colspan="3" class="">Total Liabilitas</th>
              <td></td>
              <td class=""><?=number_format($t_liabilitas->saldo,0,'','.');?></td>
            </tr>


            <!-- Saldo Dana -->
            <tr class="text-center" style="color:black;">
                <td colspan="5">Saldo Dana:</td>
            </tr>

            <!-- Saldo Dana Zakat -->
            <tr style="color:black;">
              <th colspan="3" class="">Dana Zakat</th>
              <td><?=number_format($t_Szakat->saldo,0,'','.');?></td>
              <td></td>
            </tr>

            <!-- Saldo Dana Infak -->
            <tr style="color:black;">
              <th colspan="3" class="">Dana Infak</th>
              <td><?=number_format($t_Sinfak->saldo,0,'','.');?></td>
              <td></td>
            </tr>

            <!-- Saldo Dana wakaf -->
            <tr style="color:black;">
              <th colspan="3" class="">Dana Wakaf</th>
              <td><?=number_format($t_Swakaf->saldo,0,'','.');?></td>
              <td></td>
            </tr>

            <!-- Saldo Dana Amil -->
             <tr style="color:black;">
              <th colspan="3" class="">Dana Amil</th>
              <td><?=number_format($t_Samil->saldo,0,'','.');?></td>
              <td></td>
            </tr>

            <!-- Saldo Dana Nonhalal -->
            <tr style="color:black;">
              <th colspan="3" class="">Dana Nonhalal</th>
              <td><?=number_format($t_Snonhalal->saldo,0,'','.');?></td>
              <td></td>
            </tr>

            <!-- Total Liabilitas Dan Saldo Dana--> 
            <tr class="text-center" style="color:black;">
              <th colspan="3" class="text-success">Total Liabilitas Dan Saldo Dana </th>
              <td></td>
              <td class="text-success" ><?=number_format($t_ljdana->saldo,0,'','.');?></td>
            </tr>

</table>
<script type="text/javascript">
        window.print();
    </script>
</body>
</html>
