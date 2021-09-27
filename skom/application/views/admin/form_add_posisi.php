</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -15px; margin-top: -8px;">
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Tambah Posisi</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content ">
        <div class="card" style="width:40%;">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/addPosisiAgt') ?>" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama Posisi</label>
                        <input type="text" id="jabatan" name="jabatan" class="form-control">
                        <?php echo form_error('jabatan', '<div class="text-danger small">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Cabang Posisi</label>
                        <select id="kode_list" name="kode_list" class="form-control">
                            <option class="font-italic">--Pilih--</option>
                            <option value="3">Dewan Pimpinan</option>
                            <option value="4">Dewan Ulama</option>
                            <option value="5">Dewan Cendekiawan</option>
                            <option value="0">Anggota Tanpa Jabatan</option>
                        </select>
                        <?php echo form_error('kode_list', '<div class="text-danger small">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select id="status" name="status" class="form-control">
                            <option class="font-italic">--Pilih--</option>
                            <option>Aktif</option>
                            <option>Non-Aktif</option>
                        </select>
                        <?php echo form_error('status', '<div class="text-danger small">', '</div>') ?>
                    </div>


                    <button type="reset" class="btn btn-warning">Bersihkan</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a class="btn btn-danger" href="<?php echo base_url('admin/posisiAgt') ?>">Kembali</a>

                </form>
            </div>
        </div>

    </section>
</div>