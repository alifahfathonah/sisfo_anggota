</aside>
<div class="content-wrapper">
    <div class="content-header" style="margin-top: -5px;">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="m-0 text-lightgray text-bold ml-2">Tambah RAB Baru</h4>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content ">
        <div class="card ml-2" style="width:40%;">
            <div class="card-body">
                <?php echo form_open_multipart('DewanPimpinan_Bendahara/add_Aksi_RAB'); ?>
                <div class="card-header bg-gray mb-2"
                    style="margin-left: -17px; margin-right: -17px; margin-top: -20px; height: 47px;">
                    <h5 class="font-italic">Laporan RAB</h5>
                </div>
                <div class="form-group">
                    <label>File RAB</label>
                    <input type="file" id="file_rab" name="file_rab" class="form-control">
                    <?php echo form_error('file_rab', '<div class="text-danger small">', '</div>') ?>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control">
                    <?php echo form_error('keterangan', '<div class="text-danger small">', '</div>') ?>
                </div>

                <button type="reset" class="btn btn-warning">Bersihkan</button>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a class="btn btn-danger"
                    href="<?php echo base_url('DewanPimpinan_Bendahara/riwayatAnggaran') ?>">Kembali</a>

                <?php echo form_close(); ?>
            </div>
        </div>

    </section>
</div>