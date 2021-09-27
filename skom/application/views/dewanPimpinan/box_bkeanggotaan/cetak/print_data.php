<!DOCTYPE html>
<html>

<head>
    <title>Print Lembar Tanda Terdaftar Anggota</title>

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
</head>

<body>
    <center>
        <img src="<?php echo base_url() ?>assets/img/logo.png" width='100px' class="mt-3">
        <h2 class="mt-2">KOMUNITAS-BAITUL UMMAH</h2>
        <h3>DAFTAR ANGGOTA DEWAN PIMPINAN</h3>
        <hr style="width: 50%; border-width:5px; color:black;">
    </center>

    <table class="tabel1">
        <tr>
            <th width="25px">No.</th>
            <th width="20px">ID</th>
            <th>Nama Lengkap</th>
            <th width="200px">Saldo Titipan Uang</th>
            <th width="130px">Saldo Titipan Emas</th>
            <th>Pendaftar</th>
            <th width="80px">Status</th>
            <th width="120px">Waktu Terdaftar</th>
        </tr>
        <?php
        $no = 1;
        foreach ($semua as $ad) :  ?>
            <tr>
                <td width="25px"><?php echo $no++ ?></td>
                <td><?php echo $ad->id_user ?></td>
                <td><?php echo $ad->nama ?></td>
                <td>Rp. <?php echo $ad->saldo_uang ?></td>
                <td><?php echo $ad->saldo_emas ?></td>
                <td><?php echo $ad->pendaftar ?></td>
                <td><?php echo $ad->status ?></td>
                <td><?php echo $ad->tgl_terdaftar ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>