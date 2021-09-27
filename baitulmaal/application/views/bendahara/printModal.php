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
    <h3>LAPORAN PERUBAHAN DANA KOPERASI TABARRU</h3>
    <img src="<?php echo base_url() ?>assets/img/BM.png" width='140px'>
    <hr style="width: 100%; border-width:5px; color:black;">
  </center>

 <table class="tabel1" align="center">
<tr class="text-center">
              <th colspan="5">Dari tanggal <?=$date['awal'];?> sampai <?=$date['akhir'];?></th>
            </tr>

            
             <!-- Dana zakat -->
              <tr class="text-center" style="color:black;">
                  <td colspan="5">Dana Zakat</td>
              </tr>
              <?php foreach ($P1zakat as $row):?>
              <tr>
                  <td colspan="2"><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>
              <?php endforeach;?>
              <tr style="color:black;">
                <th class="text-center" colspan="2">Total Penerimaan Zakat:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P1zakat->saldo,0,'','.');?></td>
              </tr>

              <?php foreach ($P2zakat as $row):?>
              <tr>
                  <td td colspan="2"><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>

              <?php endforeach;?>
              <tr style="color:black;">
                <th class="text-center" colspan="2">Total Penyaluran Zakat:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P2zakat->saldo,0,'','.');?></td>
              </tr>

            <tr class="text-center" style="color:black;">
              <th colspan="2" class="text-success">Surplus (Devisit) Dana Zakat:</th>
              <td></td>
              <td></td>
              <td class="text-success"><?=number_format($t_Szakat->saldo,0,'','.');?></td>
            </tr>


            <!-- Dana Infak -->
              <tr class="text-center" style="color:black;">
                  <td colspan="5">Dana Infak</td>
              </tr>
              <?php foreach ($P1infak as $row):?>
              <tr>
                  <td colspan="2"><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>
              <?php endforeach;?>
              <tr style="color:black;">
                <th class="text-center" colspan="2">Total Penerimaan Infak:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P1infak->saldo,0,'','.');?></td>
              </tr>

              <?php foreach ($P2infak as $row):?>
              <tr>
                  <td colspan="2"><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>

              <?php endforeach;?>
              <tr style="color:black;">
                <th class="text-center" colspan="2">Total Penyaluran Infak:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P2infak->saldo,0,'','.');?></td>
              </tr>

            <tr class="text-center" style="color:black;">
              <th colspan="2" class="text-success">Surplus (Devisit) Dana Infak:</th>
              <td></td>
              <td></td>
              <td class="text-success"><?=number_format($t_Sinfak->saldo,0,'','.');?></td>
            </tr>


            <!-- Dana wakaf -->
              <tr class="text-center" style="color:black;">
                <td colspan="5">Dana Wakaf</td>
              </tr>
              <?php foreach ($P1wakaf as $row):?>
              <tr>
                  <td colspan="2"><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>
              <?php endforeach;?>
              <tr style="color:black;">
                <th class="text-center" colspan="2">Total Penerimaan Wakaf:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P1wakaf->saldo,0,'','.');?></td>
              </tr>

              <?php foreach ($P2amil as $row):?>
              <tr>
                  <td colspan="2"><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>

              <?php endforeach;?>
              <tr style="color:black;">
                <th class="text-center" colspan="2">Total Penyaluran Wakaf:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P2wakaf->saldo,0,'','.');?></td>
              </tr>

            <tr class="text-center" style="color:black;">
              <th colspan="2" class="text-success">Surplus (Devisit) Dana Wakaf:</th>
              <td></td>
              <td></td>
              <td class="text-success"><?=number_format($t_Swakaf->saldo,0,'','.');?></td>
            </tr>



            <!-- Dana Amil -->
              <tr class="text-center" style="color:black;">
                <td colspan="5">Dana Amil</td>
              </tr>
              <?php foreach ($P1amil as $row):?>
              <tr>
                  <td colspan="2"><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>
              <?php endforeach;?>
              <tr style="color:black;">
                <th class="text-center" colspan="2">Total Penerimaan Amil:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P1amil->saldo,0,'','.');?></td>
              </tr>

              <?php foreach ($P2amil as $row):?>
              <tr>
                  <td colspan="2"><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>

              <?php endforeach;?>
              <tr style="color:black;">
                <th class="text-center" colspan="2">Total Penyaluran Amil:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P2amil->saldo,0,'','.');?></td>
              </tr>

            <tr class="text-center" style="color:black;">
              <th colspan="2" class="text-success">Surplus (Devisit) Dana Amil:</th>
              <td></td>
              <td></td>
              <td class="text-success"><?=number_format($t_Samil->saldo,0,'','.');?></td>
            </tr>

            <!-- Dana Nonhalal -->
              <tr class="text-center"style="color:black;">
                <td colspan="5">Dana Nonhalal</td>
              </tr>
              <?php foreach ($P1nonhalal as $row):?>
              <tr>
                  <td colspan="2"><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>
              <?php endforeach;?>
              <tr style="color:black;">
                <th class="text-center" colspan="2">Total Penerimaan Nonhalal:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P1nonhalal->saldo,0,'','.');?></td>
              </tr>

              <?php foreach ($P2nonhalal as $row):?>
              <tr>
                  <td colspan="2"><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>

              <?php endforeach;?>
              <tr style="color:black;">
                <th class="text-center" colspan="2">Total Penyaluran Nonhalal:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P2nonhalal->saldo,0,'','.');?></td>
              </tr>

            <tr class="text-center" style="color:black;">
              <th colspan="2" class="text-success">Surplus (Devisit) Dana Nonhalal:</th>
              <td></td>
              <td></td>
              <td class="text-success"><?=number_format($t_Snonhalal->saldo,0,'','.');?></td>
            </tr>

</table>
<script type="text/javascript">
        window.print();
    </script>
</body>
</html>
