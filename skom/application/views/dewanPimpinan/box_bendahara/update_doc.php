</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-lightgray text-bold">Update Dokumen</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content ">

        <div class="card" style="width:40%;">
            <div class="card-body">
                <?php foreach ($edit as $ag) : ?>
                <?php echo form_open_multipart('DewanPimpinan_Bendahara/updateDokumen_dbendahara_aksi'); ?>

                <div class="form-group">
                    <label>Nama Dokumen</label>
                    <input type="hidden" id="id_dokumen" name="id_dokumen" class="form-control"
                        value="<?php echo $ag->id_dokumen ?>">
                    <input type="text" id="nm_dokumen" name="nm_dokumen" class="form-control"
                        value="<?php echo $ag->nm_dokumen ?>">
                    <?php echo form_error('nm_dokumen', '<div class="text-danger small">', '</div>') ?>
                </div>

                <div class="form-group">
                    <label>Dokumen</label>
                    <input type="file" id="dokumen" name="dokumen" class="form-control"
                        value="<?php echo $ag->dokumen ?>">
                    <?php echo form_error('dokumen', '<div class="text-danger small">', '</div>') ?>
                </div>

                <button type="reset" class="btn btn-warning">Bersihkan</button>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a class="btn btn-danger"
                    href="<?php echo base_url('DewanPimpinan_Bendahara/dokumenBendahara') ?>">Kembali</a>
                </form>
                <?php endforeach; ?>
            </div>
        </div>

        <br><br><br>
    </section>
</div>