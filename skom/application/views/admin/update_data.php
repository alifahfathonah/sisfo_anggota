</aside>
<div class="content-wrapper">
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

        <div class="card ml-1" style="width:68%;">
            <div class="card-body">
                <?php foreach ($admin2 as $ad) { ?>
                <form method="POST" action="<?php echo base_url() . 'admin/update_aksi'; ?>">
                    <div class="row" style="height:500px;">

                        <div class="col-md-5 mx-auto">
                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">NIK</label>
                                <input type="hidden" id="id_user" name="id_user" class="form-control"
                                    value="<?php echo $ad->id_user ?>">
                                <input type="text" id="nik" name="nik" class="form-control"
                                    value="<?php echo $ad->nik ?> " readonly>
                                <?php echo form_error('nik', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class=" ml-2">Nama</label>
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

                            <div class=" form-group" style="margin-top: -10px;">
                                <label class="ml-2">Status Perkawinan</label>
                                <select name="status_kawin" id="status_kawin" class="form-control"
                                    value="<?php echo $ad->status_kawin ?>">
                                    <option class="font-italic" value="<?= $ad->status_kawin ?>">
                                        <?php echo $ad->status_kawin ?>
                                    </option>
                                    <option>Belum Kawin</option>
                                    <option>Sudah Kawin</option>
                                </select>
                                <?php echo form_error('status_kawin', '<div class="text-danger small">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col-md-6 mx-auto">
                            <div class="form-group" style="margin-top: -10px;">
                                <label class=" ml-2">Alamat</label>
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
                                <select id="status" name="status" class="form-control"
                                    value="<?php echo $ad->status ?>">
                                    <option class="font-italic" value="<?php echo $ad->status ?>">
                                        <?php if ($ad->status == '1') { ?>
                                        <td>Aktif</td>
                                        <?php } else { ?>
                                        <td>Non-Aktif</td>
                                        <?php } ?>
                                    </option>
                                    <option value="1">Aktif</option>
                                    <option value="2">Non-Aktif</option>
                                    <?php echo form_error('status', '<div class="text-danger small">', '</div>') ?>
                                </select>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Email</label>
                                <input type="text" id="email" name="email" class="form-control"
                                    value="<?php echo $ad->email ?>">
                                <?php echo form_error('email', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Jabatan</label>
                                <select id="jabatan" name="jabatan" class="form-control"
                                    value="<?php echo $ad->jabatan ?>">
                                    <option class="font-italic" value="<?php echo $ad->jabatan ?>">
                                        <?= $ad->jabatan ?>
                                    </option>
                                    <option value="Ketua Dewan Pimpinan">Ketua Dewan Pimpinan</option>
                                    <option value="Sekretaris Dewan Pimpinan">Sekretaris Dewan Pimpinan</option>
                                    <option value="Bendahara Dewan Pimpinan">Bendahara Dewan Pimpinan</option>
                                    <option value="Staf Bidang Pendidikan">Staf Bidang Pendidikan</option>
                                    <option value="Staf Bidang Pelatihan">Staf Bidang Pelatihan</option>
                                    <option value="Staf Bidang Keanggotaan">Staf Bidang Keanggotaan</option>
                                    <option value="Staf Bidang Riset & Pengembangan">Staf Bidang Riset & Pengembangan
                                    </option>
                                    <option value="Ketua Dewan Ulama">Ketua Dewan Ulama</option>
                                    <option value="Sekretaris Dewan Ulama">Sekretaris Dewan Ulama</option>
                                    <option value="Bendahara Dewan Ulama">Bendahara Dewan Ulama</option>
                                    <option value="Anggota Dewan Ulama">Anggota Dewan Ulama</option>
                                    <option value="Ketua Dewan Cendekiawan">Ketua Dewan Cendekiawan</option>
                                    <option value="Sekretaris Dewan Cendekiawan">Sekretaris Dewan Cendekiawan</option>
                                    <option value="Bendahara Dewan Cendekiawan">Bendahara Dewan Cendekiawan</option>
                                    <option value="Anggota Dewan Cendekiawan">Anggota Dewan Cendekiawan</option>
                                    <option value="Anggota">Anggota</option>
                                </select>
                                <?php echo form_error('jabatan', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Tanggal Daftar</label>
                                <input type="text" id="tgl_terdaftar" name="tgl_terdaftar" class="form-control"
                                    value="<?php echo $ad->tgl_terdaftar ?>" readonly>
                                <?php echo form_error('tgl_terdaftar', '<div class="text-danger small">', '</div>') ?>
                            </div>
                        </div>
                        <div class="card-footer float-right" style="width: 100%; margin-bottom: -15px;">
                            <button type="reset" class="btn btn-warning ml-1 float-right">Bersihkan</button>
                            <button type="submit" class="btn btn-success ml-1 float-right">Simpan</button>
                            <a class="btn btn-danger float-right ml-1"
                                href="<?php echo base_url('admin/list_anggota') ?>">Kembali</a>
                        </div>
                </form>
                <?php } ?>
            </div>
        </div>

    </section>
</div>