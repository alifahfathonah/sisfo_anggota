</aside>
<div class="content-wrapper" style="height: 580px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -15px; margin-top: -9px;">
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Update Data</h4>
                </div>
            </div>
        </div>
    </div>

    <section class="content ">

        <div class="card ml-1" style="width:98%;">
            <div class="card-body">
                <?php foreach ($admin2 as $ad) { ?>
                <form method="POST" action="<?php echo base_url() . 'super_admin/update_aksi'; ?>"
                    enctype="multipart/form-data">
                    <div class="row" style="height:480px;">

                        <div class="col-md-4 mx-auto">
                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">NIK</label>
                                <input type="hidden" id="id_anggota" name="id_anggota" class="form-control"
                                    value="<?php echo $ad->id_anggota ?>">
                                <input type="text" id="nik" name="nik" class="form-control"
                                    value="<?php echo $ad->nik ?> " readonly>
                                <?php echo form_error('nik', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control"
                                    value="<?php echo $ad->nama ?>">
                                <?php echo form_error('nama', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Tempat Lahir</label>
                                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control"
                                    value="<?php echo $ad->tempat_lahir ?>">
                                <?php echo form_error('tempat_lahir', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Tanggal Lahir</label>
                                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control"
                                    value="<?php echo $ad->tgl_lahir ?>">
                                <?php echo form_error('tgl_lahir', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Jenis Kelamin</label>
                                <select type="text" id="jk" name="jk" class="form-control"
                                    value="<?php echo $ad->jk ?>">
                                    <option class="font-italic" value="<?= $ad->jk ?>"><?= $ad->jk ?></option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                                <?php echo form_error('jk', '<div class="text-danger small">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col-md-4 mx-auto">
                            <div class=" form-group" style="margin-top: -10px;">
                                <label class="ml-2">Status Perkawinan</label>
                                <select name="status_kawin" id="status_kawin" class="form-control"
                                    value="<?php echo $ad->status_kawin ?>">
                                    <option class="font-italic" value="<?php echo $ad->status_kawin ?>">
                                        <?php echo $ad->status_kawin ?>
                                    </option>
                                    <option>Belum Kawin</option>
                                    <option>Sudah Kawin</option>
                                </select>
                                <?php echo form_error('status_kawin', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Alamat</label>
                                <input type="text" id="alamat" name="alamat" class="form-control"
                                    value="<?php echo $ad->alamat ?>">
                                <?php echo form_error('alamat', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Nomor HP</label>
                                <input type="number" id="no_hp" name="no_hp" class="form-control"
                                    value="<?php echo $ad->no_hp ?>">
                                <?php echo form_error('no_hp', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Status</label>
                                <select id="status_aktif" name="status_aktif" class="form-control"
                                    value="<?php echo $ad->status_aktif ?>">
                                    <option class="font-italic" value="<?php echo $ad->status_aktif ?>">
                                        <?php echo $ad->status_aktif ?>
                                    </option>
                                    <option>Aktif</option>
                                    <option>Non-Aktif</option>
                                    <?php echo form_error('status_aktif', '<div class="text-danger small">', '</div>') ?>
                                </select>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Email</label>
                                <input type="text" id="email" name="email" class="form-control"
                                    value="<?php echo $ad->email ?>">
                                <?php echo form_error('email', '<div class="text-danger small">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col-md-4 mx-auto">
                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Jabatan</label>
                                <select name="pangkat" id="pangkat" class="form-control"
                                    value="<?php echo $ad->pangkat ?>">
                                    <option class="font-italic" value="<?php echo $ad->pangkat ?>">
                                        <?php echo $ad->pangkat ?>
                                    </option>
                                    <option>Hidden User</option>
                                    <option>Admin Koperasi Tijarah</option>
                                    <option>Admin Koperasi Tabarru</option>
                                    <option>Admin Komunitas Koperasi</option>
                                </select>
                                <?php echo form_error('jabatan', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Saldo Titipan Uang</label>
                                <input type="text" id="saldo_uang" name="saldo_uang" class="form-control"
                                    value="<?php echo $ad->saldo_uang ?>">
                                <?php echo form_error('saldo_uang', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Saldo Titipan Emas</label>
                                <input type="text" id="saldo_emas" name="saldo_emas" class="form-control"
                                    value="<?php echo $ad->saldo_emas ?>">
                                <?php echo form_error('saldo_emas', '<div class="text-danger small">', '</div>') ?>
                            </div>
                            <!-- <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Hak Akses</label>
                                <select type="text" id="hak_akses" name="hak_akses" class="form-control"
                                    value="<?php echo $ad->hak_akses ?>">
                                    <option value="<?php echo $ad->hak_akses ?>"><?php if ($ad->hak_akses == '0') { ?>
                                        <td>Anggota</td>
                                        <?php } else if ($ad->hak_akses == '2') { ?>
                                        <td>Admin Koperasi Tijarah</td>
                                        <?php } else if ($ad->hak_akses == '3') { ?>
                                        <td>Admin Koperasi Tabarru</td>
                                        <?php } else if ($ad->hak_akses == '4') { ?>
                                        <td>Admin Komunitas</td>
                                        <?php } ?>
                                    </option>
                                    <option value="2">Admin Koperasi Tijarah</option>
                                    <option value="3">Admin Koperasi Tabarru</option>
                                    <option value="4">Admin Komunitas</option>
                                    <option value="0">Anggota</option>
                                </select>
                                <?php echo form_error('hak_akses', '<div class="text-danger small">', '</div>') ?>
                            </div> -->
                        </div>
                        <div class="card-footer float-right" style="width: 100%; margin-bottom: -15px;">
                            <button type="reset" class="btn btn-warning ml-1 float-right">Bersihkan</button>
                            <button type="submit" class="btn btn-success ml-1 float-right">Simpan</button>
                            <a class="btn btn-danger float-right ml-1"
                                href="<?php echo base_url('super_admin/list_admin') ?>">Kembali</a>
                        </div>

                </form>
                <?php } ?>
            </div>
        </div>

    </section>
</div>