</aside>
<div class="content-wrapper">
    <div class="content-header" style="margin-top: -9px; margin-bottom:-7px;">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="m-0 text-lightgray text-bold ml-1">Informasi Saldo Titipan Uang</h4>
            </div>
        </div>
    </div>

    <section class="content ">
        <!-- DataTales Example -->
        <div class="card mb-4">
            <div class="card-header">
                <?php echo anchor('DewanPimpinan_StafBKeanggotaan/list_anggota', '<div class="btn btn-warning">Kembali</div>') ?>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered mb-2" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>No.</th>
                                <th>ID</th>
                                <th>Nama Anggota</th>
                                <th>Jabatan</th>
                                <th>Saldo Titipan Uang</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($saldoU as $ad) :  ?>
                            <tr align="center">
                                <td width="50px"><?php echo ++$start; ?>.</td>
                                <td width="50px"><?php echo $ad->id_user ?></td>
                                <td align="left"><?php echo $ad->nama ?></td>
                                <td align="left"><?php echo $ad->jabatan ?></td>
                                <td>Rp. <?php echo $ad->saldo_uang ?></td>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>

    </section>
</div>