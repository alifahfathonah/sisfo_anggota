</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -15px; margin-top: -9px;">
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Tambah Data</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content ">
        <?= $this->session->flashdata('message'); ?>
        <div class="card ml-2" style="width:98%;">
            <div class="card bg-success mb-0" style="height: 40px;">
                <p class="float-left" style="margin-top: 7px; margin-left: 22px;">Pengisian Data Diri Anggota Baru :
                </p>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('DewanPimpinan_StafBKeanggotaan/tambahData_Agt'); ?>"
                    enctype="multipart/form-data">

                    <div class="row" style="height:300px;">

                        <div class="col-md-4 mx-auto">
                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">NIK</label>
                                <input type="number" name="nik" class="form-control">
                                <?php echo form_error('nik', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Nama</label>
                                <input type="text" name="nama" class="form-control">
                                <?php echo form_error('nama', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Tempat Lahir</label>
                                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control">
                                <?php echo form_error('tempat_lahir', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Tanggal Lahir</label>
                                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control">
                                <?php echo form_error('tgl_lahir', '<div class="text-danger small">', '</div>') ?>
                            </div>

                        </div>
                        <div class="col-md-5 mx-auto">
                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Jenis Kelamin</label>
                                <select name="jk" class="form-control">
                                    <option class="font-italic" value="">-- Pilih Jenis Kelamin --</option>
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                    <?php echo form_error('jk', '<div class="text-danger small">', '</div>') ?>
                                </select>
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Nomor HP</label>
                                <input type="number" name="no_hp" class="form-control">
                                <?php echo form_error('no_hp', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label class="ml-2">Password</label>
                                    <input type="password" class="form-control form-control-user" id="inpass"
                                        name="inpass" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <label class="ml-1">Konfirmasi Ulang Password</label>
                                    <input type="password" class="form-control form-control-user" id="repass"
                                        name="repass" placeholder="Confirm Password">
                                    <small class="text-danger">
                                        <?= form_error('repass') ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2.5 mx-auto">
                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Saldo Titipan Uang</label>
                                <input type="text" name="saldo_uang" class="form-control">
                                <?php echo form_error('saldo_uang', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Saldo Titipan Emas</label>
                                <input type="text" name="saldo_emas" class="form-control">
                                <?php echo form_error('saldo_emas', '<div class="text-danger small">', '</div>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-5" style="width: 100%; margin-bottom: -15px;">
                        <button type="reset" class="btn btn-warning ml-2 float-right">Bersihkan</button>
                        <button type="submit" class="btn btn-success ml-1 float-right">Simpan</button>
                        <a class="btn btn-danger ml-1 float-right"
                            href="<?php echo base_url('DewanPimpinan_StafBKeanggotaan/list_anggota') ?>">Kembali</a>
                    </div>
                </form>
            </div>
        </div>

    </section>
</div>