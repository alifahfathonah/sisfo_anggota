
    <div class="container-fluid">
    <div class="content-wrapper">
        <div class="content-header" style="margin-top: -9px; margin-bottom:-6px;">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="m-0 text-lightgray text-bold ml-1">Konten Toko Emas</h4>
                </div>
            </div>
        </div>
        <section class="content">
            <?= $this->session->flashdata('notif'); ?>
            <div class="col-sm-7" style="margin-left: -8px;">
            </div>


            <div class="card" style="margin-top: 10px;">
                <div class="card bg-dark mb-0" style="height: 40px;">
                    <p class="float-left" style="margin-top: 7px; margin-left: 22px;">Daftar Konten Toko Emas :
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
                                            <th>Konten Toko Emas</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach ($konten_tokoemas as $t) :  ?>
                                                <td style="width: 75%;"><?= $t->desc_tokoemas ?></td>
                                                <td align="center"><img src="<?= base_url() . 'assets/photo/' . $t->photo ?>" width="75px"></td>
                                                <td style="width: 8%;">
                                                    <center>
                                                        <a class="btn btn-sm btn-warning" href="<?= base_url('informasi_d_p_StafBKeanggotaan/tokoemas/update_tokoemas/' . $t->id_tokoemas) ?>"><i class="fas fa-edit"></i></a>
                                                    </center>
                                                </td>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>