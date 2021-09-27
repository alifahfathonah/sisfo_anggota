</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -14px; margin-top: -10px;">
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Tambah Akses</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content ">
        <div class="card ml-1" style="width:40%;">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/add_akses') ?>" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama Anggota</label>
                        <select name="nama_agt" id="nama_agt" class="form-control">
                            <option value="">--Pilih Nama Anggota--</option>
                            <?php foreach ($anggota as $ad) : ?>
                            <option value="<?php echo $ad->nama ?>"><?php echo $ad->nama ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php echo form_error('nama_agt', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Hak Akses</label>
                        <select name="hak_akses" id="hak_akses" class="form-control">
                            <option value="3">Dewan Pimpinan</option>
                            <option value="4">Dewan Ulama</option>
                            <option value="5">Dewan Cendekiawan</option>
                            <option value="0">Anggota</option>
                        </select>
                        <?php echo form_error('hak_akses', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="status" class="form-control">
                            <option>--Pilih Status--</option>
                            <option value="1">Aktif</option>
                            <option value="2">Non-Aktif</option>
                        </select>
                        <?php echo form_error('status', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <button type="reset" class="btn btn-warning">Bersihkan</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a class="btn btn-danger" href="<?php echo base_url('admin/data_hakakses') ?>">Kembali</a>

                </form>
            </div>
        </div>

    </section>
</div>