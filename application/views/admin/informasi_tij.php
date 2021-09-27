    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>

        <?= $this->session->flashdata('pesan') ?>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Informasi Tentang Koperasi Tijarah</h5>
            </div>
            <div class="card-body">
                <a class="btn btn-sm btn-primary mb-4" href="<?= base_url('admin/informasi_tij/add_info') ?>"><i class="fas fa-fw fa-plus"></i>Tambah Informasi</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="table1" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Informasi Koperasi Tijarah</th>
                                <th class="text-center">Created</th>
                                <th class="text-center">Photo</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($info as $i) : ?>
                                <tr>
                                    <td style="width: 3%;"><?= $no++ ?></td>
                                    <td style="width: 20%;"><?= $i->judul ?></td>
                                    <td style="width: 55%;"><?= $i->desc_tij ?></td>
                                    <td style="width: 7%;"><?= $i->created ?></td>
                                    <td style="width: 7%;"><?= $i->photo ?></td>
                                    <td style="width: 8%;">
                                        <center>
                                            <a class="btn btn-sm btn-warning" href="<?= base_url('admin/informasi_tij/update_info/' . $i->id_info_tij) ?>"><i class="fas fa-edit"></i></a>
                                            <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/informasi_tij/delete_info/' . $i->id_info_tij) ?>"><i class="fas fa-trash"></i></a>
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