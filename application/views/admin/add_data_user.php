    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>



        <div class="card" style="width: 50%; margin-bottom: 100px">
            <div class="card-body">
                <form method="POST" action="<?= base_url('admin/data_user/add_data_aksi') ?>" enctype="multipart/form-data">

                    <div class="form-group">
                        <label> NIK </label>
                        <input type="number" name="nik" class="form-control">
                        <?= form_error('nik', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Password </label>
                        <input type="password" name="password" class="form-control">
                        <?= form_error('password', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Nama User </label>
                        <input type="text" name="nama" class="form-control">
                        <?= form_error('nama', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Email </label>
                        <input type="text" name="email" class="form-control">
                        <?= form_error('email', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Tanggal Lahir </label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                        <?= form_error('tanggal_lahir', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Tempat Lahir </label>
                        <input type="text" name="tempat_lahir" class="form-control">
                        <?= form_error('tempat_lahir', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Jenis Kelamin </label>
                        <select name="jk" class="form-control">
                            <option value="">--Pilih Jenis Kelamin--</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?= form_error('jk', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Alamat </label>
                        <input type="text" name="alamat" class="form-control">
                        <?= form_error('alamat', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> RT </label>
                        <input type="number" name="rt" class="form-control">
                        <?= form_error('rt', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> RW </label>
                        <input type="number" name="rw" class="form-control">
                        <?= form_error('rw', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Kel / Desa </label>
                        <input type="text" name="kel_desa" class="form-control">
                        <?= form_error('kel_desa', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Kecamatan </label>
                        <input type="text" name="kecamatan" class="form-control">
                        <?= form_error('kecamatan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> agama </label>
                        <input type="text" name="agama" class="form-control">
                        <?= form_error('agama', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Status Kawin </label>
                        <input type="text" name="status_kawin" class="form-control">
                        <?= form_error('status_kawin', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Pekerjaan </label>
                        <input type="text" name="pekerjaan" class="form-control">
                        <?= form_error('pekerjaan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Kewarganegaraan </label>
                        <input type="text" name="kewarganegaraan" class="form-control">
                        <?= form_error('kewarganegaraan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Saldo uang </label>
                        <input type="text" name="saldo_uang" class="form-control">
                        <?= form_error('saldo_uang', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    
                    <div class="form-group">
                        <label> Saldo Emas </label>
                        <input type="text" name="saldo_emas" class="form-control">
                        <?= form_error('saldo_emas', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> No hp </label>
                        <input type="number" name="no_hp" class="form-control">
                        <?= form_error('no_hp', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Photo </label>
                        <input type="file" name="photo" class="form-control">
                        <?= form_error('photo', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <!-- <div class="form-group">
                        <label> Hak Akses </label>
                        <select name="hak_akses" class="form-control">

                            <option value="">--Pilih Hak Akses--</option>

                            <option value="1">Anggota</option>

                            <option value="2">Admin Anggota</option>

                        </select>
                        <?= form_error('photo', '<div class="text-small text-danger"></div>') ?>
                    </div> -->

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    &nbsp;
                    <button type="button" class="btn btn-secondary" onclick="window.history.back()">Back</button>
                </form>

            </div>
        </div>
    </div>
    <!-- /.container-fluid -->