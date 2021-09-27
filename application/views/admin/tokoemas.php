    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>

        <?= $this->session->flashdata('pesan') ?>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Konten Toko Emas</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Konten Toko Emas</th>
                                <th class="text-center">Photo</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($konten_tokoemas as $t) : ?>
                                <tr>
                                    <td style="width: 3%;"><?= $no++ ?></td>
                                    <td style="width: 50%;"><?= $t->desc_tokoemas ?></td>
                                    <td style="width: 6%;"><img src="<?= base_url() . 'assets/photo/' . $t->photo ?>" width="75px"></td>
                                    <td style="width: 5%;">
                                        <center>
                                            <a class="btn btn-sm btn-warning" href="<?= base_url('admin/tokoemas/update_tokoemas/' . $t->id_tokoemas) ?>"><i class="fas fa-edit"></i></a>
                                        </center>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>