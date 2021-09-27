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
        <img src="<?php echo base_url('assets/img/logo.png'); ?>" width='100px' style="margin-top: 20px;">
        <h2 class="mt-2">KOMUNITAS-BAITUL UMMAH</h2>
        <h3>DAFTAR ADMIN</h3>
        <hr style="width: 100%; border-width:5px; color:black; margin-bottom: -40px;">
    </center>

    <table class="tabel1">
        <tr>
            <th width="25px">No.</th>
            <th width="20px">ID</th>
            <th width="200px">Nama</th>
            <th width="170px">E-Mail</th>
            <th width="170px">Jabatan</th>
            <th width="130px">Pendaftar</th>
            <th width="80px">Status</th>
        </tr>
        <?php
        $no = 1;
        foreach ($admin as $ad) :  ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $ad->id_user ?></td>
                <td style="text-align: left;"><?php echo $ad->nama ?></td>
                <td><?php echo $ad->email ?></td>
                <td><?php echo $ad->jabatan ?></td>
                <td><?php echo $ad->pendaftar ?></td>
                <td><?php echo $ad->status ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body></html>