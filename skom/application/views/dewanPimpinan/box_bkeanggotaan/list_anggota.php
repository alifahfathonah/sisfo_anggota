<div class="container-fluid">
    <div class="content-wrapper">
        <div class="content-header" style="margin-top: -9px; margin-bottom:-6px;">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="m-0 text-lightgray text-bold ml-1">Pendaftaran Anggota</h4>
                </div>
            </div>
        </div>
        <section class="content">
            <?= $this->session->flashdata('notif'); ?>
            <div class="col-sm-7" style="margin-left: -8px;">

                <a class="btn btn-warning" href="<?= base_url('DewanPimpinan_StafBKeanggotaan/tambahData_Agt') ?>"
                    role="button">
                    <i class="fa fa-plus"></i>
                    Tambah
                </a>
                <a class="btn btn-secondary" target="_blank" href="<?= base_url('Cetak_keanggotaan/print') ?>"
                    role="button">
                    <i class="fa fa-download"></i>
                    Print
                </a>

                <div class="dropdown d-none d-sm-inline-block form-inline mr-auto ">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-credit-card"></i> Saldo Titipan Iuran Anggota
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                        style="background-color: lightgray;">
                        <a class="dropdown-item" href="<?php echo base_url('cetak_keanggotaan/saldoUang') ?>"><b>Saldo
                                Uang</b></a>
                        <a class="dropdown-item" href="<?php echo base_url('cetak_keanggotaan/saldoEmas') ?>"><b>Saldo
                                Emas</b></a>
                    </div>
                </div>

            </div>


            <div class="card" style="margin-top: 10px;">
                <div class="card bg-dark mb-0" style="height: 40px;">
                    <p class="float-left" style="margin-top: 7px; margin-left: 22px;">Daftar Anggota Komunitas Koperasi
                        :
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
                                            <th>No.</th>
                                            <th>View</th>
                                            <th>Nama Lengkap</th>
                                            <th>Status Aktif</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($anggota as $au) :  ?>
                                        <tr align="center">
                                            <td width="20px"><?php echo ++$start; ?>.</td>
                                            <td width="20px" align="center"><?php echo anchor(
                                                                                    'DewanPimpinan_StafBKeanggotaan/detail/' . $au->id_user,
                                                                                    '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'
                                                                                ) ?></td>
                                            <td><?php echo $au->nama ?></td>
                                            <?php if ($au->status == '1') { ?>
                                            <td>Aktif</td>
                                            <?php } else { ?>
                                            <td>Non-Aktif</td>
                                            <?php } ?>
                                            <td width="20px"><?php echo anchor(
                                                                        'DewanPimpinan_StafBKeanggotaan/updateData/' . $au->id_user,
                                                                        '<div class="btn btn-sm btn-success"><i class="fa fa-edit"></i></div>'
                                                                    ) ?></td>
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