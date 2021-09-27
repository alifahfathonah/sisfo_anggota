</aside>
<div class="content-wrapper">
    <div class="content-header" style="margin-top: -9px;">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="m-0 text-lightgray text-bold ml-2">Detail Profile</h4>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content" style="margin-top: -6px;">
        <div class="container-fluid">
            <?= $this->session->flashdata('notif'); ?>
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-dark card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid" style="margin-top: -8px;"
                                    src="<?= base_url('assets/img/') . $user['foto']; ?>" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center"><?= $user['nama']; ?></h3>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Jabatan</b><a class="float-right"><?= $user['jabatan']; ?>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>Status</b> <a class="btn btn-success float-right" style="color: #ffff;">
                                        <?php if ($user['status'] == '1') { ?>
                                        <td>Aktif</td>
                                        <?php } else { ?>
                                        <td>Non-Aktif</td>
                                        <?php } ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title text-bold">Settings</h3>
                        </div>
                        <div class="card-body p-2">
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="font-italic p-3 bg-gray">Edit Profile</th>
                                        <td class="table-dark">
                                            <a href="<?= base_url('DewanPimpinan_StafBKeanggotaan'); ?>/edit_profileBKeanggotaan"
                                                class="nav-link p-1">
                                                <button class="btn btn-warning float-right">
                                                    <i class="nav-icon far fa-edit"></i>
                                                    </li>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="font-italic p-3 bg-gray">Ganti Foto Profil</th>
                                        <td class="table-dark">
                                            <a href="<?= base_url('DewanPimpinan_StafBKeanggotaan'); ?>/edit_fotoBKeanggotaan"
                                                class="nav-link p-1">
                                                <button class="btn btn-warning float-right">
                                                    <i class="nav-icon far fa-edit"></i>
                                                    </li>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card" style="height: 650px;">
                        <div class="card-header p-2">
                            <a class="btn btn-dark text-white">Data Pribadi</a>
                        </div><!-- /.card-header1 -->

                        <div class="card-body">
                            <div class="tab-content" style="margin-top: -10px;">
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
                                                            <td class="p-2"><?= $user['nik']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class=" col-5 p-2">Nama Lengkap</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $user['nama']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="col-5 p-2">Tempat, Tanggal Lahir</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2">
                                                                <?= $user['tempat_lahir'] . (',') . $user['tgl_lahir']; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="col-5 p-2">Jenis Kelamin</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $user['jk']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="col-5 p-2">Status Kawin</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $user['status_kawin']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="col-5 p-2">Alamat</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $user['alamat']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="col-5 p-2">Nomor HP</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $user['no_hp']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class=" col-5 p-2">Email</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $user['email']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="col-5 p-2">Tanggal Terdaftar</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $user['tgl_terdaftar']; ?></td>
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
                                                            <td class="p-2"><?= $user['saldo_uang']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="col-5 p-2">Saldo Titipan Emas</th>
                                                            <td class="p-2">:</td>
                                                            <td class="p-2"><?= $user['saldo_emas']; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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