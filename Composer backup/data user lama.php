data user lama

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Users</h3>
                <a class="btn btn-sm btn-primary mb-4" href="<?= base_url('admin/data_user/add_data') ?>"><i class="fas fa-fw fa-plus"></i>Tambah Data</a>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped mt-2" id="table1">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nik</th>
                        <th class="text-center">Nama User</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">Jabatan</th>
                        <th class="text-center">Tanggal Lahir</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Photo</th>
                        <th class="text-center">Hak_Akses</th>
                        <th class="text-center">Action</th>
                    </tr>

                    <?php $no = 1;
                    foreach ($user as $u) : ?>
                        <tr>
                            <td style="width: 3%;"><?= $no++ ?></td>
                            <td><?= $u->nik ?></td>
                            <td><?= $u->nama_user ?></td>
                            <td><?= $u->jk ?></td>
                            <td><?= $u->jabatan ?></td>
                            <td><?= $u->tanggal_lahir ?></td>
                            <td><?= $u->status ?></td>
                            <td><img src="<?= base_url() . 'assets/photo/' . $u->photo ?>" width="75px"></td>

                            <!-- Tampilan KOMUNITAS -->

                            <?php if ($u->hak_akses == '1') { ?>
                                <td> Admin Komunitas </td>
                            <?php } else if ($u->hak_akses == '2') { ?>
                                <td> Ketua Dewan Pimpinan </td>
                            <?php } else if ($u->hak_akses == '3') { ?>
                                <td> Sekretaris Dewan Pimpinan </td>
                            <?php } else if ($u->hak_akses == '4') { ?>
                                <td> Bendahara Dewan Pimpinan </td>
                            <?php } else if ($u->hak_akses == '5') { ?>
                                <td> Staf Bidang Pendidikan </td>
                            <?php } else if ($u->hak_akses == '6') { ?>
                                <td> Staf Bidang Pelatihan </td>
                            <?php } else if ($u->hak_akses == '7') { ?>
                                <td> Staf Bidang Keanggotaan </td>
                            <?php } else if ($u->hak_akses == '8') { ?>
                                <td> Staf Bidang Riset & Pengembangan </td>
                            <?php } else if ($u->hak_akses == '9') { ?>
                                <td> Ketua Dewan Ulama </td>
                            <?php } else if ($u->hak_akses == '10') { ?>
                                <td> Sekretaris Dewan Ulama </td>
                            <?php } else if ($u->hak_akses == '11') { ?>
                                <td> Bendahara Dewan Ulama </td>
                            <?php } else if ($u->hak_akses == '12') { ?>
                                <td> Anggota Dewan Ulama </td>
                            <?php } else if ($u->hak_akses == '13') { ?>
                                <td> Ketua Dewan Cendekiawan </td>
                            <?php } else if ($u->hak_akses == '14') { ?>
                                <td> Sekretaris Dewan Cendekiawan </td>
                            <?php } else if ($u->hak_akses == '15') { ?>
                                <td> Bendahara Dewan Cendekiawan </td>
                            <?php } else if ($u->hak_akses == '16') { ?>
                                <td> Anggota Dewan Cendekiawan </td>

                                <!-- Tampilan Koperasi TABARRU -->

                            <?php } else if ($u->hak_akses == '20') { ?>
                                <td> Admin Koperasi Tijarah </td>
                            <?php } else if ($u->hak_akses == '21') { ?>
                                <td> Ketua Koperasi Tijarah </td>
                            <?php } else if ($u->hak_akses == '22') { ?>
                                <td> Sekretaris Koperasi Tijarah </td>
                            <?php } else if ($u->hak_akses == '23') { ?>
                                <td> Bendahara Koperasi Tijarah </td>
                            <?php } else if ($u->hak_akses == '24') { ?>
                                <td> Kepala Divisi Teller </td>
                            <?php } else if ($u->hak_akses == '25') { ?>
                                <td> Anggota Divisi Teller </td>
                            <?php } else if ($u->hak_akses == '26') { ?>
                                <td> Kepala Divisi Pembiayaan </td>
                            <?php } else if ($u->hak_akses == '27') { ?>
                                <td> Anggota Divisi Pembiayaan </td>
                            <?php } else if ($u->hak_akses == '28') { ?>
                                <td> Kepala Divisi Pemasaran </td>
                            <?php } else if ($u->hak_akses == '29') { ?>
                                <td> Anggota Divisi Pemasaran </td>

                                <!-- Tampilan Koperasi TIJARAH -->

                            <?php } else if ($u->hak_akses == '30') { ?>
                                <td> Admin Koperasi Tabarru </td>
                            <?php } else if ($u->hak_akses == '31') { ?>
                                <td> Ketua Koperasi Tabarru </td>
                            <?php } else if ($u->hak_akses == '32') { ?>
                                <td> Sekretaris Koperasi Tabarru </td>
                            <?php } else if ($u->hak_akses == '33') { ?>
                                <td> Bendahara Koperasi Tabarru </td>
                            <?php } else if ($u->hak_akses == '34') { ?>
                                <td> Kepala Divisi Pelayanan Teller </td>
                            <?php } else if ($u->hak_akses == '35') { ?>
                                <td> Anggota Divisi Pelayanan Teller </td>
                            <?php } else if ($u->hak_akses == '36') { ?>
                                <td> Kepala Divisi Pelayanan Pinjaman </td>
                            <?php } else if ($u->hak_akses == '37') { ?>
                                <td> Anggota Divisi Pelayanan Pinjaman </td>
                            <?php } else if ($u->hak_akses == '38') { ?>
                                <td> Kepala Divisi Pelayanan Jaminan </td>
                            <?php } else if ($u->hak_akses == '39') { ?>
                                <td> Anggota Divisi Pelayanan Jaminan </td>

                            <?php } else if ($u->hak_akses == '40') { ?>
                                <td>* Super Admin * </td>

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
                </table>
            </div>

        </div>
    </div>
</div>