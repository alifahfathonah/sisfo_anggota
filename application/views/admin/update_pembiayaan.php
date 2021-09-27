    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>

        <div class="card" style="width: 50%; margin-bottom: 100px">
            <div class="card-body">

                <?php foreach ($konten_pembiayaan as $p) : ?>
                    <form method="POST" action="<?= base_url('admin/pembiayaan/update_pembiayaan_aksi') ?>" enctype="multipart/form-data">

                        <div class="form-group">
                            <label> Konten Pembiayaan </label>
                            <input type="hidden" name="id_pembiayaan" class="form-control" value="<?= $p->id_pembiayaan ?>">
                            <textarea name="desc_pembiayaan" class="form-control" value="<?= $p->desc_pembiayaan ?>" required></textarea>
                            <?= form_error('desc_pembiayaan', '<div class="text-small text-danger"></div>') ?>
                        </div>

                        <div class="form-group">
                            <label> Photo </label>
                            <input type="file" name="photo" class="form-control" value="<?= $p->photo ?>">
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