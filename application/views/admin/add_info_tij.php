    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>



        <div class="card" style="width: 50%; margin-bottom: 100px">
            <div class="card-body">
                <form method="POST" action="<?= base_url('admin/informasi_tij/add_info_aksi') ?>" enctype="multipart/form-data">

                <div class="form-group">
                        <label> Judul </label>
                        <input type="text" name="judul" class="form-control">
                        <?= form_error('judul', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Informasi Tentang Koperasi Tijarah </label>
                        <textarea name="desc_tij" class="form-control"></textarea>
                        <?= form_error('desc_tij', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label> Photo </label>
                        <input type="file" name="photo" class="form-control">
                        <?= form_error('photo', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    &nbsp;
                    <button type="button" class="btn btn-secondary" onclick="window.history.back()">Back</button>
                </form>

            </div>
        </div>
    </div>
    </div>
    <!-- /.container-fluid --> 