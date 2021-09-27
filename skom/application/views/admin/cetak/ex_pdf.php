<!DOCTYPE html>
<html><head>
    <title>Print Daftar Admin</title>

    <style type="text/css">
    body {
        font-family: Arial;
        color: black;
        background-color: white;
    }

    h2 {
        margin-top: 30px;
    }

    .tabel1 {
        font-family: sans-serif;
        color: #000;
        width: 100%;
        border: 10px solid #fff;
        table-layout: fixed;
        text-align: center;
        margin-top: 50px;
    }

    .tabel1 tr th {
        background: #e9e9e9;
        color: #000;
        font-weight: normal;
    }

    .tabel1,
    th,
    td {
        border: 1px solid #000;
        padding: 8px 10px;
        text-align: center;
        border-collapse: collapse;
        font-size: 20px;
    }
    </style>
</head><body>
    <center>
        <h2 class="mt-2">KOMUNITAS-BAITUL UMMAH</h2>
        <h3>DAFTAR ADMIN KOMUNITAS</h3>
        <hr style="width: 50%; border-width:5px; color:black;">
    </center>

    <table class="tabel1">
        <tr>
            <th width="25px">No.</th>
            <th>ID Admin</th>
            <th>Nama</th>
            <th>Saldo Titipan Uang</th>
            <th>ID Admin Pendaftar</th>
            <th>Status</th>
            <th>ID Admin Pengubah</th>
        </tr>
        <?php
        $no = 1;
        foreach ($admin as $ad) :  ?>
        <tr>
            <td width="25px"><?php echo $no++ ?></td>
            <td><?php echo $ad->id_user ?></td>
            <td><?php echo $ad->nama ?></td>
            <td><?php echo $ad->saldo_uang ?></td>
            <td><?php echo $ad->id_pendaftar ?></td>
            <td><?php echo $ad->status ?></td>
            <td><?php echo $ad->id_pendaftar ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body></html>