</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -15px; margin-top: -9px;">
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Update Data Konten Pinjaman Emas</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content ">
        <?= $this->session->flashdata('message'); ?>
        <div class="card ml-2" style="width:98%;">
            <div class="card bg-success mb-0" style="height: 40px;">
                <p class="float-left" style="margin-top: 7px; margin-left: 22px;">Konten Pinjaman Emas :
                </p>
            </div>
            <div class="card-body">
            <?php foreach ($konten_pinjamanemas as $p) : ?>
                <form method="POST" action="<?php echo base_url('informasi_d_p_StafBKeanggotaan/pinjamanemas/update_pinjamanemas_aksi'); ?>" enctype="multipart/form-data">

                    <div class="row" style="height:auto">

                        <div class="col-md-6 mx-auto">
                            <div class="form-group" style="margin-top: -10px;">
                            <label> Konten Pinjaman Emas </label>
                            <input type="hidden" name="id_pinjamanemas" class="form-control" value="<?= $p->id_pinjamanemas ?>">
                            <textarea name="desc_pinjamanemas" class="form-control" value="<?= $p->desc_pinjamanemas ?>" required></textarea>
                                <?php echo form_error('desc_simpana', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group" style="margin-top: -10px;">
                                <label class="ml-2">Photo</label>
                                <input type="file" name="photo" class="form-control" value="<?= $p->photo ?>">
                                <?php echo form_error('photo', '<div class="text-danger small">', '</div>') ?>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer mt-5" style="width: 100%; margin-bottom: -15px;">
                        <button type="reset" class="btn btn-warning ml-2 float-right">Bersihkan</button>
                        <button type="submit" class="btn btn-success ml-1 float-right">Simpan</button>
                        <a class="btn btn-danger ml-1 float-right" href="<?php echo base_url('informasi_d_p_StafBKeanggotaan/pinjamanemas') ?>">Kembali</a>
                    </div>
                </form>
                <?php endforeach; ?>
            </div>
        </div>

    </section>
</div>