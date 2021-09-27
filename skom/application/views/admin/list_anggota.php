</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -10px; margin-top: -10px;">
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Pendaftaran Anggota</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <?= $this->session->flashdata('message'); ?>
        <div class="col-sm-7 ml-1 mb-2">

            <a class="btn btn-warning" href="<?= base_url('admin/tambahData_Agt') ?>" role="button">
                <i class="fa fa-plus"></i>
                Tambah
            </a>

            <a class="btn btn-secondary" target="_blank" href="<?= base_url('admin/print_Agt') ?>" role="button">
                <i class="fas fa-print"></i>
                Print
            </a>

            <a class="btn btn-success" target="_blank" href="<?= base_url('admin/excel_Agt') ?>" role="button">
                <i class="fas fa-print"></i>
                Export to Excel
            </a>

            <div class="dropdown d-none d-sm-inline-block form-inline mr-auto ">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-credit-card"></i> Saldo
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: lightgray;">
                    <a class="dropdown-item" href="<?php echo base_url('admin/saldoUang_Agt') ?>"><b>Saldo
                            Uang</b></a>
                    <a class="dropdown-item" href="<?php echo base_url('admin/saldoEmas_Agt') ?>"><b>Saldo
                            Emas</b></a>
                </div>
            </div>

        </div>
        <div class="container-fluid">

            <div class="row ml-1" style="width: 98%;">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card bg-gradient-success mb-0" style="height: 40px;">
                        <p class="float-left font-italic" style="margin-top: 7px; margin-left: 22px;">Daftar Anggota
                            Dewan Pimpinan
                            :
                            <button class="btn btn-light float-right mr-2 mb-0" type="button" data-toggle="collapse"
                                data-target="#dewanpmpinan" aria-controls="dewanpmpinan"
                                style="width: 90px; height: 27px; margin-top:9px; "><i class="fas fa-caret-down fa-2x"
                                    style="margin-top: -10px;"></i>
                            </button>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="dewanpmpinan">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr align="center">
                                                    <th colspan="2">ID</th>
                                                    <th>Nama</th>
                                                    <th>Jabatan</th>
                                                    <th colspan="2">Status</th>
                                                    <th>Pendaftar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($dewanp as $ad) :  ?>
                                                <tr align="center">
                                                    <td style="text-align: center;"><?php echo $ad->id_user ?></td>
                                                    <td width="20px"><?php echo anchor(
                                                                                'admin/detail/' . $ad->id_user,
                                                                                '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'
                                                                            ) ?></td>
                                                    <td width="200px"><?php echo $ad->nama ?></td>

                                                    <td width="200px"><?php echo $ad->jabatan ?></td>
                                                    <?php if ($ad->status == '1') { ?>
                                                    <td>Aktif</td>
                                                    <?php } else { ?>
                                                    <td>Non-Aktif</td>
                                                    <?php } ?>
                                                    <td width="-10px"><?php echo anchor(
                                                                                'admin/updateData/' . $ad->id_user,
                                                                                '<div class="btn btn-sm btn-success"><i class="fa fa-edit"></i></div>'
                                                                            ) ?></td>
                                                    <td style="text-align: center;"><?php echo $ad->pendaftar ?>
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
                </div>
                <div class="card mb-2" style="width: 100%;">
                    <div class="card bg-gradient-info mb-0" style="height: 40px;">
                        <p class="float-left font-italic" style="margin-top: 7px; margin-left: 22px;">Daftar Anggota
                            Dewan Ulama
                            :
                            <button class="btn btn-light float-right mr-2 mb-0" type="button" data-toggle="collapse"
                                data-target="#dewanulama" aria-controls="dewanulama"
                                style="width: 90px; height: 27px; margin-top:9px; "><i class="fas fa-caret-down fa-2x"
                                    style="margin-top: -10px;"></i>
                            </button>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="dewanulama">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr align="center">
                                                    <th colspan="2">ID</th>
                                                    <th>Nama</th>
                                                    <th>Jabatan</th>
                                                    <th colspan="2">Status</th>
                                                    <th>Pendaftar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($dewanu as $ad) :  ?>
                                                <tr align="center">
                                                    <td style="text-align: center;"><?php echo $ad->id_user ?></td>
                                                    <td width="20px"><?php echo anchor(
                                                                                'admin/detail/' . $ad->id_user,
                                                                                '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'
                                                                            ) ?></td>
                                                    <td width="200px"><?php echo $ad->nama ?></td>

                                                    <td width="200px"><?php echo $ad->jabatan ?></td>
                                                    <?php if ($ad->status == '1') { ?>
                                                    <td>Aktif</td>
                                                    <?php } else { ?>
                                                    <td>Non-Aktif</td>
                                                    <?php } ?>
                                                    <td width="-10px"><?php echo anchor(
                                                                                'admin/updateData/' . $ad->id_user,
                                                                                '<div class="btn btn-sm btn-success"><i class="fa fa-edit"></i></div>'
                                                                            ) ?></td>
                                                    <td style="text-align: center;"><?php echo $ad->pendaftar ?>
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
                </div>
                <div class="card mb-2" style="width: 100%;">
                    <div class="card bg-gradient-warning mb-0" style="height: 40px;">
                        <p class="float-left font-italic" style="margin-top: 7px; margin-left: 22px;">Daftar Anggota
                            Dewan
                            Cendekiawan
                            :
                            <button class="btn btn-light float-right mr-2 mb-0" type="button" data-toggle="collapse"
                                data-target="#dewancendekiawan" aria-controls="dewancendekiawan"
                                style="width: 90px; height: 27px; margin-top:9px; "><i class="fas fa-caret-down fa-2x"
                                    style="margin-top: -10px;"></i>
                            </button>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="dewancendekiawan">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr align="center">
                                                    <th colspan="2">ID</th>
                                                    <th>Nama</th>
                                                    <th>Jabatan</th>
                                                    <th colspan="2">Status</th>
                                                    <th>Pendaftar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($dewanc as $ad) :  ?>
                                                <tr align="center">
                                                    <td style="text-align: center;"><?php echo $ad->id_user ?></td>
                                                    <td width="20px"><?php echo anchor(
                                                                                'admin/detail/' . $ad->id_user,
                                                                                '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'
                                                                            ) ?></td>
                                                    <td width="200px"><?php echo $ad->nama ?></td>
                                                    <td width="200px"><?php echo $ad->jabatan ?></td>

                                                    <?php if ($ad->status == '1') { ?>
                                                    <td>Aktif</td>
                                                    <?php } else { ?>
                                                    <td>Non-Aktif</td>
                                                    <?php } ?>
                                                    <td width="-10px"><?php echo anchor(
                                                                                'admin/updateData/' . $ad->id_user,
                                                                                '<div class="btn btn-sm btn-success"><i class="fa fa-edit"></i></div>'
                                                                            ) ?></td>
                                                    <td style="text-align: center;"><?php echo $ad->pendaftar ?>
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
                </div>

                <div class="card mb-2" style="width: 100%;">
                    <div class="card bg-gradient-gray mb-0" style="height: 40px;">
                        <p class="float-left font-italic" style="margin-top: 7px; margin-left: 22px;">Daftar Anggota
                            Tanpa Jabatan
                            :
                            <button class="btn btn-light float-right mr-2 mb-0" type="button" data-toggle="collapse"
                                data-target="#anggotatj" aria-controls="anggotatj"
                                style="width: 90px; height: 27px; margin-top:9px; "><i class="fas fa-caret-down fa-2x"
                                    style="margin-top: -10px;"></i>
                            </button>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="anggotatj">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr align="center">
                                                    <th colspan="2">ID</th>
                                                    <th>Nama</th>
                                                    <th>Jabatan</th>
                                                    <th colspan="2">Status</th>
                                                    <th>Pendaftar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($anggota as $ad) :  ?>
                                                <tr align="center">
                                                    <td style="text-align: center;"><?php echo $ad->id_user ?></td>
                                                    <td width="20px"><?php echo anchor(
                                                                                'admin/detail/' . $ad->id_user,
                                                                                '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'
                                                                            ) ?></td>
                                                    <td width="200px"><?php echo $ad->nama ?></td>
                                                    <td style="text-align: center;"><?php echo $ad->jabatan ?></td>

                                                    <?php if ($ad->status == '1') { ?>
                                                    <td>Aktif</td>
                                                    <?php } else { ?>
                                                    <td>Non-Aktif</td>
                                                    <?php } ?>
                                                    <td width="-10px"><?php echo anchor(
                                                                                'admin/updateData/' . $ad->id_user,
                                                                                '<div class="btn btn-sm btn-success"><i class="fa fa-edit"></i></div>'
                                                                            ) ?></td>
                                                    <td style="text-align: center;"><?php echo $ad->pendaftar ?>
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
                </div>
            </div>
        </div>
    </section>
</div>