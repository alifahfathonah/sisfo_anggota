<!DOCTYPE html>
<html>
<head>
  <title>Print Daftar Anggota</title>

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
    padding: 10px 10px;
    border-collapse: collapse;
    font-size: 10px;
  }
</style>
</head>
<body>
  <center>
    <img src="<?php echo base_url() ?>assets/img/logo.png" width='100px' class="mt-3">
    <h2 class="mt-2">KOPERASI TIJARAH-BAITUL QIRAD</h2>
    <h3>DAFTAR ANGGOTA KOPERASI TIJARAH</h3>
    <hr style="width: 50%; border-width:5px; color:black;">
  </center>

 <table class="tabel1">
          <tr>
             <th width="15px">No.</th>
             <th>Nama Anggota</th>
             <th>NIK</th>
             <th>Tempat</th>
             <th>Tanggal Lahir
             <th>Jenis Kelamin</th></th>
             <th>Pernikahan</th>
             <th>Alamat</th>
             <th>Nomor HP</th>
             <th>Terdaftar</th>
             <th>Jabatan</th>
             <th>Titipan Uang</th>
             <th>Titipan Emas</th>
          </tr>
          <?php 
             $no = 1;
             foreach ($anggota as $dftr) :  ?>
             <tr>
                <td width="15px"><?php echo $no++ ?></td>
                <td><?php echo $dftr->nama_anggota ?></td>
                <td><?php echo $dftr->nik ?></td>
                <td><?php echo $dftr->tempat_lahir ?></td>
                <td><?php echo $dftr->tgl_lahir ?></td>
                <td><?php echo $dftr->jenis_kelamin ?></td>
                <td><?php echo $dftr->status_kawin ?></td>
                <td><?php echo $dftr->alamat ?></td>
                <td><?php echo $dftr->no_hp ?></td>
                <td><?php echo $dftr->tgl_daftar ?></td>
                <td><?php echo $dftr->jabatan ?></td>
                <td><?php echo $dftr->saldo_uang ?></td>
                <td><?php echo $dftr->saldo_emas ?></td>
             </tr>
         <?php endforeach; ?>
</table>
<script type="text/javascript">
        window.print();
    </script>
</body>
</html>
