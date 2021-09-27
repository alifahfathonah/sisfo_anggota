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
    text-align: center;
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
    text-align: center;
    border-collapse: collapse;
    font-size: 20px;
  }
</style>
</head>
<body>
  <center>
    <img src="<?php echo base_url() ?>assets/img/logo.png" width='100px' class="mt-3">
    <h2 class="mt-2">KOPERASI TIJARAH-BAITUL QIRAD</h2>
    <h3>LAPORAN NERACA KOPERASI TIJARAH</h3>
    <hr style="width: 50%; border-width:5px; color:black;">
  </center>

 <table class="tabel1" align="center">
 <tr class="text-center">
              <th colspan="5">Dari tanggal <?=$date['awal'];?> sampai <?=$date['akhir'];?></th>
            </tr>

            <tr style="color:black;">
                <td colspan="5">Aktiva Lancar:</td>
            </tr>
            <?php foreach ($lancar as $row):?>
            <tr>
              <td width="20"></td>
                <td><?=$row->akun;?></td>
                <td><?=number_format($row->t_debet,0,'','.');?></td>
                <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                <td></td>

                <!-- <td>
                  <?=getAkunNominal($row->no_reff,$row2->thn.'-'.$row2->bln.'-'.$row2->hari)->t_kredit!=0?'<span style="margin-left:0px;">'.number_format(getAkunNominal($row->no_reff,$row2->thn.'-'.$row2->bln.'-'.$row2->hari)->t_kredit,0,'','.').'</span>':0;?>

                </td> -->
            </tr>
            <?php endforeach;?>

            <tr style="color:black;">
              <th colspan="2">Total Aktiva Lancar</th>
              <td></td>
              <td></td>
              <td><?=number_format($t_lancar->saldo,0,'','.');?></td>
            </tr>

            <tr style="color:black;">
                <td colspan="5">Aktiva Tetap:</td>
            </tr>
            <?php foreach ($tetap as $row):?>
            <tr>
              <td width="20"></td>
                <td><?=$row->akun;?></td>
                <td><?=number_format($row->t_debet,0,'','.');?></td>
                <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                <td></td>

                <!-- <td>
                  <?=getAkunNominal($row->no_reff,$row2->thn.'-'.$row2->bln.'-'.$row2->hari)->t_kredit!=0?'<span style="margin-left:0px;">'.number_format(getAkunNominal($row->no_reff,$row2->thn.'-'.$row2->bln.'-'.$row2->hari)->t_kredit,0,'','.').'</span>':0;?>

                </td> -->
            </tr>
            <?php endforeach;?>

            <tr style="color:black;">
              <th colspan="2">Total Aktiva Tetap</th>
              <td></td>
              <td></td>
              <td><?=number_format($t_tetap->saldo,0,'','.');?></td>
            </tr>

            <tr style="color:black;">
              <th colspan="2" class="text-success">Total Aktiva</th>
              <td></td>
              <td></td>
              <td><?=number_format($t_aktiva->saldo,0,'','.');?></td>
            </tr>


            <tr style="color:black;">
                <td colspan="5">Kewajiban:</td>
            </tr>
            <?php foreach ($wajib as $row):?>
            <tr>
              <td width="20"></td>
                <td><?=$row->akun;?></td>
                <td><?=number_format($row->t_debet,0,'','.');?></td>
                <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                <td></td>

                <!-- <td>
                  <?=getAkunNominal($row->no_reff,$row2->thn.'-'.$row2->bln.'-'.$row2->hari)->t_kredit!=0?'<span style="margin-left:0px;">'.number_format(getAkunNominal($row->no_reff,$row2->thn.'-'.$row2->bln.'-'.$row2->hari)->t_kredit,0,'','.').'</span>':0;?>

                </td> -->
            </tr>
            <?php endforeach;?>

            <tr style="color:black;">
              <th colspan="2">Total Kewajiban</th>
              <td></td>
              <td></td>
              <td><?=number_format($t_wajib->saldo,0,'','.');?></td>
            </tr>


            <tr style="color:black;">
                <td colspan="5">Modal:</td>
            </tr>
            <?php foreach ($modal as $row):?>
            <tr>
              <td width="20"></td>
                <td><?=$row->akun;?></td>
                <td><?=number_format($row->t_debet,0,'','.');?></td>
                <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                <td></td>

                <!-- <td>
                  <?=getAkunNominal($row->no_reff,$row2->thn.'-'.$row2->bln.'-'.$row2->hari)->t_kredit!=0?'<span style="margin-left:0px;">'.number_format(getAkunNominal($row->no_reff,$row2->thn.'-'.$row2->bln.'-'.$row2->hari)->t_kredit,0,'','.').'</span>':0;?>

                </td> -->
            </tr>
            <?php endforeach;?>


            <tr style="color:black;">
              <th colspan="2" class="text-success">Total Kewajiban dan Modal</th>
              <td></td>
              <td></td>
              <td><?=number_format($t_modalwajib->saldo,0,'','.');?></td>
            </tr>

</table>
<script type="text/javascript">
        window.print();
    </script>
</body>
</html>
