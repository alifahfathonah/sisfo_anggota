</aside>
<div class="content-wrapper">
    <div class="content-header" style="margin-top: -5px;">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="m-0 text-lightgray text-bold ml-2">Tambah Informasi Pelatihan Usaha</h4>
            </div>
        </div>
    </div>

    <section class="content " style="height: 530px;">

        <div class="card ml-2" style="width:56%;">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url() . 'DewanPimpinan_StafBPelatihan/add_Aksi_infoP'; ?>">
                    <div class="card-header bg-gray mb-2" style="margin-top: -15px; height: 47px;">
                        <h5 class="font-italic">Informasi Pelatihan Usaha</h5>
                    </div>

                    <div class="form-group">
                        <label class="ml-1">Informasi</label>
                        <textarea type="text" id="informasi" name="informasi" class="form-control"></textarea>
                        <?php echo form_error('informasi', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label class="ml-1">Keterangan</label>
                        <textarea type="text" id="keterangan" name="keterangan" class="form-control"></textarea>
                        <?php echo form_error('keterangan', '<div class="text-danger small">', '</div>') ?>
                    </div>
                    <div class="card-footer mt-4" style="width: 100%; margin-bottom: -15px;">
                        <button type="reset" class="btn btn-warning">Bersihkan</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a class="btn btn-danger"
                            href="<?php echo base_url('DewanPimpinan_StafBPelatihan/indexInfoP') ?>">Kembali</a>
                    </div>
                </form>
            </div>
        </div>

        <br><br><br>
    </section>
</div>