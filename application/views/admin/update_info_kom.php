    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>

        <div class="card" style="width: 50%; margin-bottom: 100px">
            <div class="card-body">

                <?php foreach ($info as $i) : ?>
                    <form method="POST" action="<?= base_url('admin/informasi_kom/update_info_aksi') ?>" enctype="multipart/form-data">

                        <div class="form-group">
                            <label> Judul </label>
                            <input type="hidden" name="id_info_kom" class="form-control" value="<?= $i->id_info_kom ?>">
                            <input type="text" name="judul" class="form-control" value="<?= $i->judul ?>">
                            <?= form_error('judul', '<div class="text-small text-danger"></div>') ?>
                        </div>

                        <div class="form-group">
                            <label> Informasi Tentang Komunitas </label>
                            <textarea name="desc_kom" class="form-control" value="<?= $i->desc_kom ?>" required></textarea>
                            <?= form_error('desc_kom', '<div class="text-small text-danger"></div>') ?>
                        </div>

                        <div class="form-group">
                            <label> Photo </label>
                            <input type="file" name="photo" class="form-control" value="<?= $i->photo ?>">
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