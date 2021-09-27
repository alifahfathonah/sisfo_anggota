</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -15px; margin-top: -10px;">
                <div class="col-sm-6">
                    <h4 class="ml-1 text-lightgray text-bold">Pendaftaran Anggota</h4>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            <?php echo $this->session->flashdata('notif') ?>

            <div class="card">

                <div class="col-sm-7 mt-2">
                    <a class="btn btn-warning" href="<?= base_url('super_admin/tambahData') ?>" role="button">
                        <i class="fa fa-plus"></i>
                        Tambah
                    </a>

                    <a class="btn btn-secondary" target="_blank" href="<?= base_url('cetak/print') ?>" role="button">
                        <i class="fas fa-print"></i>
                        Print
                    </a>

                    <a class="btn btn-success" target="_blank" href="<?= base_url('cetak/excel') ?>" role="button">
                        <i class="fas fa-print"></i>
                        Export to Excel
                    </a>

                    <div class="dropdown d-none d-sm-inline-block form-inline mr-auto ">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-credit-card"></i> Saldo
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                            style="background-color: lightgray;">
                            <a class="dropdown-item" href="<?php echo base_url('cetak/saldoUang') ?>"><b>Saldo
                                    Uang</b></a>
                            <a class="dropdown-item" href="<?php echo base_url('cetak/saldoEmas') ?>"><b>Saldo
                                    Emas</b></a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="row">
                    <div class="col mb-2">
                        <div class=" card-body">
                            <div class=" table-responsive">
                                <form action="<?= base_url('DewanPimpinan_Ketua'); ?>/downloadPDF" method="POST">
                                    <table class="table table-bordered mb-2" id="dataTable" width="100%"
                                        cellspacing="0">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>No.</th>
                                                <th colspan="2">Nama</th>
                                                <th>Jabatan</th>
                                                <th colspan="2">Status Aktif</th>
                                                <th>Pendaftar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($semua as $ad) :  ?>
                                            <tr align="center">
                                                <td width="20px"><?php echo ++$start; ?>.</td>
                                                <td width="300px"><?php echo $ad->nama ?></td>
                                                <td width="20px"><?php echo anchor(
                                                                            'super_admin/detail/' . $ad->id_anggota,
                                                                            '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'
                                                                        ) ?></td>
                                                <td width="300px"><?= $ad->pangkat ?></td>
                                                <td><?php echo $ad->status_aktif ?></td>
                                                <td width="20px"><?php echo anchor(
                                                                            'super_admin/updateData/' . $ad->id_anggota,
                                                                            '<div class="btn btn-sm btn-success"><i class="fa fa-edit"></i></div>'
                                                                        ) ?></td>
                                                <td width="200px" style="text-align: center;">
                                                    <?php echo $ad->nama_sa ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <?= $this->pagination->create_links(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>







        </div>
    </section>
</div>