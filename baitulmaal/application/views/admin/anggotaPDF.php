<!DOCTYPE html>
<html>
<head>
  <title>Daftar Anggota</title>

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
    <h2 class="mt-2">KOPERASI TABARRU-BAITUL MAAL</h2>
    <h3>DAFTAR ANGGOTA KOPERASI TABARRU</h3>
    <hr style="width: 50%; border-width:5px; color:black;">
  </center>

 <table class="tabel1" align="center">
          <tr>
             <th width="25px">No.</th>
             <th >ID Anggota</th>
             <th >Nama Anggota</th>
             <th >Saldo Titipan Uang</th>
             <th >ID Admin Pendaftar</th>
             <th >Nama Admin Pendaftar</th>
             <th >Status</th>
             <th >ID Admin Pengubah</th>
             <th >Nama Admin Pengubah</th>
          </tr>
          <?php 
             $no = 1;
             foreach ($anggota as $dftr) :  ?>
             <tr>
                <td width="25px"><?php echo $no++ ?></td>
                <td ><?php echo $dftr->id_anggota ?></td>
                <td ><?php echo $dftr->nama_anggota ?></td>
                <td ><?php echo $dftr->saldo_uang ?></td>
                <td ><?php echo $dftr->id_admin ?></td>
                <td ><?php echo $dftr->nama_admin ?></td>
                <td><?php 
                  if($dftr->status == "0"){

                    echo "<span class='badge badge-danger'> Non Aktif </span>";
                  }else{
                    echo "<span class='badge badge-success'> Aktif </span>";
                  }
                    ?>
                </td>
                <td ><?php echo $dftr->id_admin ?></td>
                <td ><?php echo $dftr->nama_admin ?></td>
             </tr>
         <?php endforeach; ?>
</table>

</body>
</html>
