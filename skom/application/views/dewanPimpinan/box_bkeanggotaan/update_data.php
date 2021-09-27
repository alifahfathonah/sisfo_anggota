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

        <div class="card ml-1" style="width:98%;">
            <div class="card bg-success mb-0" style="height: 40px;">
                <p class="float-left" style="margin-top: 7px; margin-left: 22px;">Biodata :
                </p>
            </div>
            <div class="card-body">
                <?php foreach ($admin2 as $ad) { ?>
                <form method="POST"
                    action="<?php echo base_url() . 'DewanPimpinan_StafBKeanggotaan/update_aksi_Agt'; ?>">
                    <div class="row">

                        <div class="col-md-4 mx-auto">
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
                                    <option class="font-italic" value="<?php echo $ad->status_kawin ?>">
                                        <?php echo $ad->status_kawin ?>
                                    </option>
                                    <option>Belum Kawin</option>
                                    <option>Sudah Kawin</option>
                                </select>
                                <?php echo form_error('status_kawin', '<div class="text-danger small">', '</div>') ?>
                            </div>


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
                        </div>
                        <div class="col-md-4 mx-auto">
                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Status</label>
                                <select id="status" name="status" class="form-control"
                                    value="<?php echo $ad->status ?>">
                                    <option class="font-italic" value="<?php echo $ad->status ?>">
                                        <?php if ($ad->status == '1') { ?>
                                        <td>Aktif</td>
                                        <?php } else if ($ad->status == '2') { ?>
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
                                    value="<?php echo $ad->email ?>" readonly>
                                <?php echo form_error('email', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Jabatan</label>
                                <input id="jabatan" name="jabatan" class="form-control"
                                    value="<?php echo $ad->jabatan ?>" readonly>
                                <?php echo form_error('jabatan', '<div class="text-danger small">', '</div>') ?>
                                </input>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Tanggal Daftar</label>
                                <input type="text" id="tgl_terdaftar" name="tgl_terdaftar" class="form-control"
                                    value="<?php echo $ad->tgl_terdaftar ?>" readonly>
                                <?php echo form_error('tgl_terdaftar', '<div class="text-danger small">', '</div>') ?>
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Saldo Titipan Uang</label>
                                <input type="text" id="saldo_uang" name="saldo_uang" class="form-control"
                                    value="<?php echo $ad->saldo_uang ?>" readonly>
                                <?php echo form_error('saldo_uang', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Saldo Titipan Emas</label>
                                <input type="text" id="saldo_emas" name="saldo_emas" class="form-control"
                                    value="<?php echo $ad->saldo_emas ?>" readonly>
                                <?php echo form_error('saldo_emas', '<div class="text-danger small">', '</div>') ?>
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Hak Akses</label>
                                <input type="text" id="hak_akses" name="hak_akses" class="form-control" value="<?php if ($ad->hak_akses == '1') { ?> Ketua Dewan Pimpinan
                                                            <?php } else if ($ad->hak_akses == '2') { ?> Sekretaris Dewan Pimpinan
                                                            <?php } else if ($ad->hak_akses == '3') { ?> Bendahara Dewan Pimpinan
                                                            <?php } else if ($ad->hak_akses == '4') { ?> Staf Bidang Pendidikan
                                                            <?php } else if ($ad->hak_akses == '5') { ?> Staf Bidang Pelatihan
                                                            <?php } else if ($ad->hak_akses == '6') { ?> Staf Bidang Keanggotaan
                                                            <?php } else if ($ad->hak_akses == '7') { ?> Staf Bidang Riset & Pengembangan
                                                            <?php } else if ($ad->hak_akses == '8') { ?> Ketua Dewan Ulama
                                                            <?php } else if ($ad->hak_akses == '9') { ?> Sekretaris Dewan Ulama
                                                            <?php } else if ($ad->hak_akses == '10') { ?> Bendahara Dewan Ulama
                                                            <?php } else if ($ad->hak_akses == '11') { ?> Anggota Dewan Ulama
                                                            <?php } else if ($ad->hak_akses == '12') { ?> Ketua Dewan Cendekiawan
                                                            <?php } else if ($ad->hak_akses == '13') { ?> Sekretaris Dewan Cendekiawan
                                                            <?php } else if ($ad->hak_akses == '14') { ?> Bendahara Dewan Cendekiawan
                                                            <?php } else if ($ad->hak_akses == '15') { ?> Anggota Dewan Cendekiawan
                                                            <?php } else if ($ad->hak_akses == '0') { ?> Anggota
                                                            <?php } ?>" readonly>
                                <?php echo form_error('hak_akses', '<div class="text-danger small">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col-md-4 mx-auto">
                            <div class="form-group row" style="margin-top: -10px;">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label class="ml-2">RT</label>
                                    <input type="number" class="form-control form-control-user" id="rt" name="rt"
                                        value="<?php echo $ad->rt ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label class="ml-1">RW</label>
                                    <input type="number" class="form-control form-control-user" id="rw" name="rw"
                                        value="<?php echo $ad->rw ?>">
                                    <small class="text-danger">
                                        <?= form_error('rw') ?>
                                    </small>
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Kel/Desa</label>
                                <input type="text" id="kel_desa" name="kel_desa" class="form-control"
                                    value="<?php echo $ad->kel_desa ?>">
                                <?php echo form_error('kel_desa', '<div class="text-danger small">', '</div>') ?>
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Kecamatan</label>
                                <input type="text" id="kecamatan" name="kecamatan" class="form-control"
                                    value="<?php echo $ad->kecamatan ?>">
                                <?php echo form_error('kecamatan', '<div class="text-danger small">', '</div>') ?>
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Agama</label>
                                <input type="text" id="agama" name="agama" class="form-control"
                                    value="<?php echo $ad->agama ?>">
                                <?php echo form_error('agama', '<div class="text-danger small">', '</div>') ?>
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Pekerjaan</label>
                                <input type="text" id="pekerjaan" name="pekerjaan" class="form-control"
                                    value="<?php echo $ad->pekerjaan ?>">
                                <?php echo form_error('pekerjaan', '<div class="text-danger small">', '</div>') ?>
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Kewarganegaraan</label>
                                <select id="kewarganegaraan" name="kewarganegaraan" class="form-control"
                                    value="<?php echo $ad->kewarganegaraan ?>">
                                    <option class="font-italic" value="<?php echo $ad->kewarganegaraan ?>">
                                        <?php if ($ad->kewarganegaraan == 'WNI') { ?>
                                        <td>WNI</td>
                                        <?php } else if ($ad->kewarganegaraan == 'WNA') { ?>
                                        <td>WNA</td>
                                        <?php } ?>
                                    </option>
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                    <?php echo form_error('kewarganegaraan', '<div class="text-danger small">', '</div>') ?>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer float-right" style="width: 100%; margin-bottom: -15px;">
                            <button type="reset" class="btn btn-warning ml-1 float-right">Bersihkan</button>
                            <button type="submit" class="btn btn-success ml-1 float-right">Simpan</button>
                            <a class="btn btn-danger float-right ml-1"
                                href="<?php echo base_url('DewanPimpinan_StafBKeanggotaan/list_anggota') ?>">Kembali</a>
                        </div>
                </form>
                <?php } ?>
            </div>
        </div>

    </section>
</div>