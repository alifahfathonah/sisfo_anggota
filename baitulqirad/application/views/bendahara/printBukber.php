<!DOCTYPE html>
<html>
<head>
  <title>Print Buku Besar</title>

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
    <h3>BUKU BESAR KOPERASI TIJARAH</h3>
    <hr style="width: 50%; border-width:5px; color:black;">
  </center>

 <table class="tabel1" align="center">
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
            foreach ($laporan as $row): ?>

            <tr>
              <td><?php echo $row->tgl; ?></td>
              <td><?php echo $row->keterangan; ?></td>
              <td><?php echo number_format($row->debet,0,',','.'); ?></td>
              <td><?php echo number_format($row->kredit,0,',','.'); ?></td>
              <td>(<?php echo number_format($row->debet-$row->kredit,0,',','.'); ?>)</td>
               <?php  $JDebet+=$row->debet;?>
               <?php $JKredit+=$row->kredit; ?>
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
</table>
<script type="text/javascript">
        window.print();
    </script>
</body>
</html>
