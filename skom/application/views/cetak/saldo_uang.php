</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-lightgray text-bold">Informasi Saldo Titipan Uang</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content ">
        <!-- DataTales Example -->
        <div class="card mb-4">
            <div class="card-header py-3">
                <?php echo anchor('super_admin/list_admin', '<div class="btn btn-sm btn-success">Kembali</div>') ?>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>No.</th>
                                <th>Nama Admin</th>
                                <th>Saldo Titipan Uang</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($admin as $ad) :  ?>
                            <tr align="center">
                                <td width="50px"><?php echo $no++; ?>.</td>
                                <td><?php echo $ad->nama ?></td>
                                <td>Rp. <?php echo $ad->saldo_uang ?></td>
                                <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </section>
</div>