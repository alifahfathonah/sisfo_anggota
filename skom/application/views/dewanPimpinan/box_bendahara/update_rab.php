</aside>
<div class="content-wrapper">
    <div class="content-header" style="margin-top: -5px;">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="m-0 text-lightgray text-bold ml-2">Edit RAB</h4>
            </div>
        </div>
    </div>

    <section class="content ">

        <div class="card ml-2" style="width:40%;">
            <div class="card-body">
                <?php foreach ($edit as $ag) : ?>
                <?php echo form_open_multipart('DewanPimpinan_Bendahara/update_Aksi_RAB'); ?>
                <div class="card-header bg-gray mb-2"
                    style="margin-left: -17px; margin-right: -17px; margin-top: -20px; height: 47px;">
                    <h5 class="font-italic">Update Laporan RAB</h5>
                </div>
                <div class="form-group">
                    <label>File RAB</label>
                    <input type="hidden" id="id_ra" name="id_ra" class="form-control" value="<?php echo $ag->id_ra ?>">
                    <input type="file" id="file_rab" name="file_rab" class="form-control"
                        value="<?php echo $ag->file_rab ?>">
                    <?php echo form_error('file_rab', '<div class="text-danger small">', '</div>') ?>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control"
                        value="<?php echo $ag->keterangan ?>">
                    <?php echo form_error('keterangan', '<div class="text-danger small">', '</div>') ?>
                </div>

                <button type="reset" class="btn btn-warning">Bersihkan</button>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a class="btn btn-danger"
                    href="<?php echo base_url('DewanPimpinan_Bendahara/riwayatAnggaran') ?>">Kembali</a>
                </form>
                <?php endforeach; ?>
            </div>
        </div>

        <br><br><br>
    </section>
</div>