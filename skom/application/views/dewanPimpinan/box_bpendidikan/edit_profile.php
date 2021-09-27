</aside>
<div class="content-wrapper">
    <div class="content-header" style="margin-top: -5px;">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="m-0 text-lightgray text-bold ml-2">Edit Data</h4>
            </div>
        </div>
    </div>

    <section class="content " style="height: 530px;">

        <div class="card ml-1" style="width:98%; height: 450px; margin-bottom: -20px;">
            <div class="card-body">
                <?php echo form_open_multipart('DewanPimpinan_StafBPendidikan/update_aksiBPendidikan'); ?>
                <div class="row" style="height:290px;">

                    <div class="col-md-4 mx-auto">
                        <div class="form-group" style="margin-top: -10px;">
                            <label class="ml-2">NIK</label>
                            <input type="hidden" id="id_user" name="id_user" class="form-control"
                                value="<?= $user['id_user']; ?>">
                            <input type="number" id="nik" name="nik" class="form-control" value="<?= $user['nik']; ?>"
                                readonly>
                            <?php echo form_error('nik', '<div class="text-danger small">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label class="ml-2">Nama Anggota</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="<?= $user['nama']; ?>">
                            <?php echo form_error('nama', '<div class="text-danger small">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label class="ml-2">Tempat Lahir</label>
                            <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control"
                                value="<?= $user['tempat_lahir']; ?>">
                            <?php echo form_error('tempat_lahir', '<div class="text-danger small">', '</div>') ?>
                        </div>


                        <div class="form-group">
                            <label class="ml-2">Tanggal Lahir</label>
                            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control"
                                value="<?= $user['tgl_lahir']; ?>">
                            <?php echo form_error('tgl_lahir', '<div class="text-danger small">', '</div>') ?>
                        </div>
                    </div>
                    <div class="col-md-4 mx-auto">
                        <div class="form-group" style="margin-top: -10px;">
                            <label class="ml-2">Jenis Kelamin</label>
                            <select type="text" name="jk" id="jk" class="form-control" value="<?= $user['jk']; ?>">
                                <option class="font-italic" value="<?= $user['jk']; ?>"><?= $user['jk']; ?></option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                                <?php echo form_error('jk', '<div class="text-danger small">', '</div>') ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="ml-2">Status Perkawinan</label>
                            <select type="text" id="status_kawin" name="status_kawin" class="form-control"
                                value="<?= $user['status_kawin']; ?>">
                                <option class="font-italic" value="<?= $user['status_kawin']; ?>">
                                    <?= $user['status_kawin']; ?></option>
                                <option>Belum Kawin</option>
                                <option>Kawin</option>
                                <?php echo form_error('status_kawin', '<div class="text-danger small">', '</div>') ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="ml-2">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="form-control"
                                value="<?= $user['alamat']; ?>">
                            <?php echo form_error('alamat', '<div class="text-danger small">', '</div>') ?>
                        </div>
                    </div>
                    <div class="col-md-4 mx-auto">
                        <div class="form-group" style="margin-top: -10px;">
                            <label class="ml-2">Nomor HP</label>
                            <input type="number" id="no_hp" name="no_hp" class="form-control"
                                value="<?= $user['no_hp']; ?>">
                            <?php echo form_error('no_hp', '<div class="text-danger small">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label class="ml-2">Email</label>
                            <input type="text" id="email" name="email" class="form-control"
                                value="<?= $user['email']; ?>">
                            <?php echo form_error('email', '<div class="text-danger small">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label class="ml-2">Hak Akses</label>
                            <input type="text" id="hak_akses" name="hak_akses" class="form-control" value="<?php if ($user['hak_akses'] == '1') { ?> Ketua Dewan Pimpinan
                                                            <?php } else if ($user['hak_akses'] == '2') { ?> Sekretaris Dewan Pimpinan
                                                            <?php } else if ($user['hak_akses'] == '3') { ?> Bendahara Dewan Pimpinan
                                                            <?php } else if ($user['hak_akses'] == '4') { ?> Staf Bidang Pendidikan
                                                            <?php } else if ($user['hak_akses'] == '5') { ?> Staf Bidang Pelatihan
                                                            <?php } else if ($user['hak_akses'] == '6') { ?> Staf Bidang Keanggotaan
                                                            <?php } else if ($user['hak_akses'] == '7') { ?> Staf Bidang Riset & Pengembangan
                                                            <?php } else if ($user['hak_akses'] == '8') { ?> Ketua Dewan Ulama
                                                            <?php } else if ($user['hak_akses'] == '9') { ?> Sekretaris Dewan Ulama
                                                            <?php } else if ($user['hak_akses'] == '10') { ?> Bendahara Dewan Ulama
                                                            <?php } else if ($user['hak_akses'] == '11') { ?> Anggota Dewan Ulama
                                                            <?php } else if ($user['hak_akses'] == '12') { ?> Ketua Dewan Cendekiawan
                                                            <?php } else if ($user['hak_akses'] == '13') { ?> Sekretaris Dewan Cendekiawan
                                                            <?php } else if ($user['hak_akses'] == '14') { ?> Bendahara Dewan Cendekiawan
                                                            <?php } else if ($user['hak_akses'] == '15') { ?> Anggota Dewan Cendekiawan
                                                            <?php } ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="card-footer mt-5" style="width: 100%; margin-bottom: -15px;">
                    <button type="reset" class="btn btn-warning ml-1 float-right">Bersihkan</button>
                    <button type="submit" class="btn btn-success ml-1 float-right">Simpan</button>
                    <a class="btn btn-danger ml-1 float-right"
                        href="<?php echo base_url('DewanPimpinan_StafBPendidikan/profile_bpendidikan') ?>">Kembali</a>
                </div>
                <!-- </form> -->
                <?php echo form_close(); ?>
            </div>
        </div>

        <br><br><br>
    </section>
</div>