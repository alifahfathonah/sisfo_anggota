</aside>
<div class="content-wrapper">
    <div class="content-header" style="margin-top: -5px;">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="m-0 text-lightgray text-bold ml-2">Edit Informasi</h4>
            </div>
        </div>
    </div>

    <section class="content " style="height: 530px;">

        <div class="card ml-2" style="width:56%;">
            <div class="card-body">
                <?php foreach ($edit as $ag) : ?>
                <form method="POST" action="<?php echo base_url() . 'DewanPimpinan_StafBRiset/update_Aksi_infoPRiset'; ?>">
                    <div class="card-header bg-warning mb-2" style="margin-top: -15px; height: 47px;">
                        <h5 class="font-italic">Informasi Pengembangan Riset</h5>
                    </div>
                    <div class="form-group">
                        <label class="ml-1">Waktu Informasi diposting</label>
                        <input type="hidden" id="id_infoPRiset" name="id_infoPRiset" class="form-control"
                            value="<?php echo $ag->id_infoPRiset ?>">
                        <input type="text" id="waktu_post" name="waktu_post" class="form-control"
                            value="<?php echo $ag->waktu_post ?>" readonly></input>
                        <?php echo form_error('waktu_post', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label class="ml-1">Informasi</label>
                        <input type="text" id="informasi" name="informasi" class="form-control"
                            value="<?php echo $ag->informasi ?>"></input>
                        <?php echo form_error('informasi', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label class="ml-1">Keterangan</label>
                        <input type="text" id="keterangan" name="keterangan" class="form-control"
                            value="<?php echo $ag->keterangan ?>"></input>
                        <?php echo form_error('keterangan', '<div class="text-danger small">', '</div>') ?>
                    </div>
                    <div class="card-footer mt-4" style="width: 100%; margin-bottom: -15px;">
                        <button type="reset" class="btn btn-warning">Bersihkan</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a class="btn btn-danger"
                            href="<?php echo base_url('DewanPimpinan_StafBRiset/indexInfoRiset') ?>">Kembali</a>
                    </div>
                </form>
                <?php endforeach; ?>
            </div>
        </div>

        <br><br><br>
    </section>
</div>