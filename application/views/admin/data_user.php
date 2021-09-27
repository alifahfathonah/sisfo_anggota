
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <?= $this->session->flashdata('pesan') ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Data Users</h5>
        </div>
        <div class="card-body">
        <a class="btn btn-sm btn-primary mb-4" href="<?= base_url('admin/data_user/add_data') ?>"><i class="fas fa-fw fa-plus"></i>Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="table1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nik</th>
                            <th class="text-center">Nama User</th>
                            <th class="text-center">Jenis Kelamin</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">RT</th>
                            <th class="text-center">RW</th>
                            <th class="text-center">Kel/Desa</th>
                            <th class="text-center">Kecamatan</th>
                            <th class="text-center">Agama</th>
                            <th class="text-center">Status Kawin</th>
                            <th class="text-center">Pekerjaan</th>
                            <th class="text-center">Kewarganegaraan</th>
                            <th class="text-center">Jabatan</th>
                            <th class="text-center">Tanggal Lahir</th>
                            <th class="text-center">Saldo Uang</th>
                            <th class="text-center">Saldo Emas</th>
                            <th class="text-center">No HP</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Pendaftar</th>
                            <th class="text-center">Photo</th>
                            <th class="text-center">Hak_Akses</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($user as $u) : ?>
                            <tr>
                                <td style="width: 3%;"><?= $no++ ?></td>
                                <td><?= $u->nik ?></td>
                                <td><?= $u->nama ?></td>
                                <td><?= $u->jk ?></td>
                                <td><?= $u->alamat ?></td>
                                <td><?= $u->rt ?></td>
                                <td><?= $u->rw ?></td>
                                <td><?= $u->kel_desa ?></td>
                                <td><?= $u->kecamatan ?></td>
                                <td><?= $u->agama ?></td>
                                <td><?= $u->status_kawin ?></td>
                                <td><?= $u->pekerjaan ?></td>
                                <td><?= $u->kewarganegaraan ?></td>
                                <td><?= $u->jabatan ?></td>
                                <td><?= $u->tanggal_lahir ?></td>
                                <td><?= $u->saldo_uang ?></td>
                                <td><?= $u->saldo_emas ?></td>
                                <td><?= $u->no_hp ?></td>
                                <td><?= $u->email ?></td>
                                <td><?= $u->pendaftar ?></td>

                                <td><img src="<?= base_url() . 'assets/photo/' . $u->photo ?>" width="75px"></td>
                                
                                <?php if ($u->hak_akses == '0') { ?>
                                    <td> <font color="red">Non - Aktif</font> </td>

                                <?php } else if ($u->hak_akses == '1') { ?>
                                    <td> Anggota Tanpa Jabatan </td>

                                <?php } else if ($u->hak_akses == '2') { ?>
                                    <td>* Admin Anggota * </td>


                                <?php } else ?>
                                <td style="width: 8%;">
                                    <center>
                                        <a class="btn btn-sm btn-warning" href="<?= base_url('admin/data_user/update_data/' . $u->id_user) ?>"><i class="fas fa-edit"></i></a>
                                        <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/data_user/delete_user/' . $u->id_user) ?>">
                                            <i class="fas fa-trash"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</div>

<!-- data tables -->


<!-- /.container-fluid -->