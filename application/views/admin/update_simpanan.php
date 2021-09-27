    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>

        <div class="card" style="width: 50%; margin-bottom: 100px">
            <div class="card-body">

                <?php foreach ($konten_simpanan as $s) : ?>
                    <form method="POST" action="<?= base_url('admin/simpanan/update_simpanan_aksi') ?>" enctype="multipart/form-data">

                        <div class="form-group">
                            <label> Konten Simpanan </label>
                            <input type="hidden" name="id_simpanan" class="form-control" value="<?= $s->id_simpanan ?>">
                            <textarea name="desc_simpanan" class="form-control" value="<?= $s->desc_simpanan ?>" required></textarea>
                            <?= form_error('desc_simpanan', '<div class="text-small text-danger"></div>') ?>
                        </div>

                        <div class="form-group">
                            <label> Photo </label>
                            <input type="file" name="photo" class="form-control" value="<?= $s->photo ?>">
                            <?= form_error('photo', '<div class="text-small text-danger"></div>') ?>
                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                        &nbsp;
                        <button type="button" class="btn btn-secondary" onclick="window.history.back()">Back</button>
                    </form>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->