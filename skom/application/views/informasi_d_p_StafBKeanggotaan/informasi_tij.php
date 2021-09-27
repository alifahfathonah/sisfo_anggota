<div class="container-fluid">
    <div class="content-wrapper">
        <div class="content-header" style="margin-top: -9px; margin-bottom:-6px;">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="m-0 text-lightgray text-bold ml-1">Informasi Koperasi Tijarah</h4>
                </div>
            </div>
        </div>
        <section class="content">
            <?= $this->session->flashdata('notif'); ?>
            <div class="col-sm-7" style="margin-left: -8px;">
            <a class="btn btn-warning" href="<?= base_url('informasi_tij/add_info') ?>"
                    role="button">
                    <i class="fa fa-plus"></i>
                    Tambah Informasi
                </a>
            </div>


            <div class="card" style="margin-top: 10px;">
                <div class="card bg-dark mb-0" style="height: 40px;">
                    <p class="float-left" style="margin-top: 7px; margin-left: 22px;">Daftar Informasi Koperasi Tijarah :
                    </p>
                </div>
                <div class="row">
                    <div class="col mb-2">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-2" id="user_admin" width="100%" cellspacing="0">
                                    <thead>
                                        <tr align="center">
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Informasi Koperasi Tijarah</th>
                                            <th>Created</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($info as $i) :  ?>
                                                <td width="20px" align="center"><?php echo ++$start; ?>.</td>
                                                <td style="width: 20%;" align="center"><?= $i->judul ?></td>
                                                <td style="width: 55%;"><?= $i->desc_tij ?></td>
                                                <td style="width: 7%;" align="center"><?= $i->created ?></td>
                                                <td align="center"><img src="<?= base_url() . 'assets/photo/' . $i->photo ?>" width="75px"></td>
                                                <td style="width: 8%;">
                                                    <center>
                                                        <a class="btn btn-sm btn-warning" href="<?= base_url('informasi_tij/update_info/' . $i->id_info_tij) ?>"><i class="fas fa-edit"></i></a>
                                                        <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?= base_url('informasi_tij/delete_info/' . $i->id_info_tij) ?>"><i class="fas fa-trash"></i></a>
                                                    </center>
                                                </td>
                                            </tr>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <?= $this->pagination->create_links(); ?>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>