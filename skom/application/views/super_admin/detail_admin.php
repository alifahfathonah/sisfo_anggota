</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -9px;">
                <a class="btn btn-warning ml-2" href="<?= base_url('super_admin/list_admin') ?>" role="button">
                    <i class="fa fa-fast-backward"></i>
                    Kembali
                </a>
                <div class="col-sm-3 mt-1">
                    <h4 class="text-lightgray text-bold">Detail Admin</h4>
                </div>

            </div>

        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <?php foreach ($detail as $dt) : ?>
                    <!-- Profile Image -->
                    <div class="card card-dark card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid"
                                    src="<?= base_url('assets/'); ?>img/<?= $dt->foto ?>" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center"><?= $dt->nama ?></h3>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Jabatan</b> <a class="float-right"><?= $dt->pangkat ?>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>Status</b> <a class="btn btn-success float-right" style="color: #ffff;">
                                        <?php echo $dt->status_aktif ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <a class="btn btn-dark text-white">Data Pribadi</a>
                        </div><!-- /.card-header1 -->

                        <div class="card-body" style="margin-top: -10px;">
                            <div class="tab-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card card-success">
                                            <div class="card-header">
                                                <h3 class="card-title font-italic">Biodata</h3>
                                            </div>
                                            <!-- /.card-header2 -->
                                            <div class="card-body">
                                                <table class="table table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <th class="col-5 p-2">NIK</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $dt->nik ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class=" col-5 p-2">Nama Lengkap</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $dt->nama ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="col-5 p-2">Tempat, Tanggal Lahir</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2">
                                                                <?= $dt->tempat_lahir . (',') . $dt->tgl_lahir; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="col-5 p-2">Jenis Kelamin</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $dt->jk ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="col-5 p-2">Status Kawin</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $dt->status_kawin ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="col-5 p-2">Alamat</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $dt->alamat ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="col-5 p-2">Nomor HP</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $dt->no_hp ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class=" col-5 p-2">Email</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $dt->email ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class=" col-5 p-2">Hak Akses</th>
                                                            <td class="p-2">:</td>
                                                            <?php if ($dt->hak_akses == '0') { ?>
                                                            <td>Hidden User</td>
                                                            <?php } else if ($dt->hak_akses == '2') { ?>
                                                            <td>Admin Koperasi Tijarah</td>
                                                            <?php } else if ($dt->hak_akses == '3') { ?>
                                                            <td>Admin Koperasi Tabarru</td>
                                                            <?php } else if ($dt->hak_akses == '1') { ?>
                                                            <td>Admin Komunitas Koperasi</td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <th class="col-5 p-2">Tanggal Terdaftar</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $dt->tgl_terdaftar ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title font-italic">Informasi Saldo Titipan Anggota</h3>
                                            </div>
                                            <!-- /.card-header2 -->
                                            <div class="card-body">
                                                <table class="table table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <th class="col-5 p-2">Saldo Titipan Uang</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $dt->saldo_uang ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="col-5 p-2">Saldo Titipan Emas</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $dt->saldo_emas ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>