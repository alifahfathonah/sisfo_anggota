</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-lightgray text-bold">Tambah Dokumen Baru</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content ">
        <div class="card" style="width:40%;">
            <div class="card-body">
                <?php echo form_open_multipart('DewanPimpinan_StafBPendidikan/add_DokumenAksi_dsekretaris'); ?>

                <div class="form-group">
                    <label>Nama Dokumen</label>
                    <input type="text" id="nm_dokumen" name="nm_dokumen" class="form-control">
                    <?php echo form_error('nm_dokumen', '<div class="text-danger small">', '</div>') ?>
                </div>

                <div class="form-group">
                    <label>Dokumen</label>
                    <input type="file" id="dokumen" name="dokumen" class="form-control">
                    <?php echo form_error('dokumen', '<div class="text-danger small">', '</div>') ?>
                </div>

                <button type="reset" class="btn btn-warning">Bersihkan</button>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a class="btn btn-danger"
                    href="<?php echo base_url('DewanPimpinan_StafBPendidikan/dokumenSekretaris') ?>">Kembali</a>

                <?php echo form_close(); ?>
            </div>
        </div>

    </section>
</div>