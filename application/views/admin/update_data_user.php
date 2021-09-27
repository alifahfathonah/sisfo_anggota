    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>

        <div class="card" style="width: 50%; margin-bottom: 100px">
            <div class="card-body">

            <?php foreach ($user as $u) : ?>
                <form method="POST" action="<?= base_url('admin/data_user/update_data_aksi') ?>" enctype="multipart/form-data">

                    <div class="form-group">
                        <label> NIK </label>
                        <input type="hidden" name="id_user" class="form-control" value="<?= $u->id_user ?>">
                        <input type="number" name="nik" class="form-control" value="<?= $u->nik ?>">
                        <?= form_error('nik', '<div class="text-small text-danger"></div>') ?>
                    </div>


                    <div class="form-group">
                        <label> Nama User </label>
                        <input type="text" name="nama" class="form-control" value="<?= $u->nama ?>"required>
                        <?= form_error('nama', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    
                    <div class="form-group">
                        <label> Email </label>
                        <input type="email" name="email" class="form-control "value="<?= $u->email ?>"required>
                        <?= form_error('email', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Tanggal Lahir </label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="<?= $u->tanggal_lahir ?>"required>
                        <?= form_error('tanggal_lahir', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Tempat lahir </label>
                        <input type="text" name="tempat_lahir" class="form-control" value="<?= $u->tempat_lahir ?>"required>
                        <?= form_error('tempat_lahir', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Jenis Kelamin </label>
                        <select name="jk" class="form-control">
                            <option value="<?= $u->jk ?>"><?= $u->jk ?></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?= form_error('jk', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Alamat </label>
                        <input type="text" name="alamat" class="form-control" value="<?= $u->alamat ?>"required>
                        <?= form_error('alamat', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> RT </label>
                        <input type="number" name="rt" class="form-control" value="<?= $u->rt ?>"required>
                        <?= form_error('rt', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> RW </label>
                        <input type="number" name="rw" class="form-control" value="<?= $u->rw ?>"required>
                        <?= form_error('rw', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Kel / Desa </label>
                        <input type="text" name="kel_desa" class="form-control" value="<?= $u->kel_desa ?>"required>
                        <?= form_error('kel_desa', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Kecamatan </label>
                        <input type="text" name="kecamatan" class="form-control" value="<?= $u->kecamatan ?>"required>
                        <?= form_error('kecamatan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Agama </label>
                        <input type="text" name="agama" class="form-control" value="<?= $u->agama ?>"required>
                        <?= form_error('agama', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Status Kawin </label>
                        <input type="text" name="status_kawin" class="form-control" value="<?= $u->status_kawin ?>"required>
                        <?= form_error('status_kawin', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Pekerjaan </label>
                        <input type="text" name="pekerjaan" class="form-control" value="<?= $u->pekerjaan ?>"required>
                        <?= form_error('pekerjaan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Kewarganegaraan </label>
                        <input type="text" name="kewarganegaraan" class="form-control" value="<?= $u->kewarganegaraan ?>"required>
                        <?= form_error('kewarganegaraan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Saldo Uang </label>
                        <input type="text" name="saldo_uang" class="form-control" value="<?= $u->saldo_uang ?>"required>
                        <?= form_error('saldo_uang', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Saldo Emas </label>
                        <input type="text" name="saldo_emas" class="form-control" value="<?= $u->saldo_emas ?>"required>
                        <?= form_error('saldo_emas', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> No hp </label>
                        <input type="number" name="no_hp" class="form-control" value="<?= $u->no_hp ?>"required>
                        <?= form_error('no_hp', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                    <label> Jabatan </label>
                        <select name="jabatan" class="form-control">
                            <option value="<?= $u->jabatan ?>"><?= $u->jabatan ?></option>
                            <option value="Anggota">Anggota Tanpa Jabatan</option>
                            <option value="Admin Anggota">Admin Anggota</option>
                        </select>
                        <?= form_error('jabatan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Photo </label>
                        <input type="file" name="photo" class="form-control" value="<?= $u->photo ?>">
                        <?= form_error('photo', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Hak Akses </label>
                        <select name="hak_akses" class="form-control">
                            <option value="<?= $u->hak_akses ?>">

                            <?php if ($u->hak_akses == '1') {
                                echo "Anggota";
                        
                            } else if ($u->hak_akses == '2') {
                                echo "Admin Anggota";

                            } else if ($u->hak_akses == '0') {
                                echo "Non-Aktif";

                            } else {

                            } ?>

                            </option>
                            <option value="1">Anggota</option>
                            <option value="2">Admin Anggota</option>
                            <option value="0">Non-Aktif</option>
                        </select>
                        <?= form_error('photo', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                    &nbsp;
                    <button type="button" class="btn btn-secondary" onclick="window.history.back()">Back</button>
                </form>

                <?php endforeach; ?>
                
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->