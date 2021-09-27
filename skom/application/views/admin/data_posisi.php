</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -15px; margin-top: -8px;">
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Daftar Posisi</h4>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            <?php echo $this->session->flashdata('pesan') ?>

            <section class="content ">
                <a class="btn btn-success" href="<?php echo base_url('admin/addPosisiAgt') ?>">
                    <i class="fas fa-plus"></i> Tambah Data</a>
                <div class="dropdown d-none d-sm-inline-block form-inline mr-auto ">

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: #f1f1f1;">
                        <a class="dropdown-item" href="<?php echo base_url('admin/posisiAgt2') ?>"><b>Data
                                2</b></a>
                        <a class="dropdown-item" href="<?php echo base_url('admin/posisiAgt3') ?>"><b>Data
                                3</b></a>
                    </div>
                </div>
                <!-- DataTales Example -->
                <div class="container-fluid">
                    <div class="row mt-2" style="width: 100%;">
                        <div class="card mb-2" style="width: 100%;">
                            <div class="card bg-gradient-success mb-0" style="height: 40px;">
                                <p class="float-left font-italic" style="margin-top: 7px; margin-left: 22px;">
                                    Dewan Pimpinan
                                    :
                                    <button class="btn btn-light float-right mr-2 mb-0" type="button"
                                        data-toggle="collapse" data-target="#dewanpmpinan" aria-controls="dewanpmpinan"
                                        style="width: 90px; height: 27px; margin-top:9px; "><i
                                            class="fas fa-caret-down fa-2x" style="margin-top: -10px;"></i>
                                    </button>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="collapse multi-collapse" id="dewanpmpinan">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%"
                                                    cellspacing="0">
                                                    <thead>
                                                        <tr align="center">
                                                            <th colspan="2">No.</th>
                                                            <th>Posisi</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        foreach ($role3 as $ad) :  ?>
                                                        <tr align="center">
                                                            <td width="20px" style="text-align: center;">
                                                                <?php echo $no++; ?>.
                                                            </td>
                                                            <td width="20px"><?php echo anchor(
                                                                                        'admin/update_posisiAgt/' . $ad->id_jabatan,
                                                                                        '<div class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></div>'
                                                                                    ) ?></td>
                                                            <td width="500px"><?php echo $ad->jabatan ?></td>
                                                            <td width="500px"><?php echo $ad->status ?></td>
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
                                <p class="float-left font-italic" style="margin-top: 7px; margin-left: 22px;">
                                    Dewan Ulama
                                    :
                                    <button class="btn btn-light float-right mr-2 mb-0" type="button"
                                        data-toggle="collapse" data-target="#dewanulama" aria-controls="dewanulama"
                                        style="width: 90px; height: 27px; margin-top:9px; "><i
                                            class="fas fa-caret-down fa-2x" style="margin-top: -10px;"></i>
                                    </button>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="collapse multi-collapse" id="dewanulama">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%"
                                                    cellspacing="0">
                                                    <thead>
                                                        <tr align="center">
                                                            <th colspan="2">No.</th>
                                                            <th>Posisi</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        foreach ($role4 as $ad) :  ?>
                                                        <tr align="center">
                                                            <td width="20px" style="text-align: center;">
                                                                <?php echo $no++; ?>.
                                                            </td>
                                                            <td width="20px"><?php echo anchor(
                                                                                        'admin/update_posisiAgt/' . $ad->id_jabatan,
                                                                                        '<div class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></div>'
                                                                                    ) ?></td>
                                                            <td width="500px"><?php echo $ad->jabatan ?></td>
                                                            <td width="500px"><?php echo $ad->status ?></td>
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
                                <p class="float-left font-italic" style="margin-top: 7px; margin-left: 22px;">
                                    Dewan
                                    Cendekiawan
                                    :
                                    <button class="btn btn-light float-right mr-2 mb-0" type="button"
                                        data-toggle="collapse" data-target="#dewancendekiawan"
                                        aria-controls="dewancendekiawan"
                                        style="width: 90px; height: 27px; margin-top:9px; "><i
                                            class="fas fa-caret-down fa-2x" style="margin-top: -10px;"></i>
                                    </button>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="collapse multi-collapse" id="dewancendekiawan">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%"
                                                    cellspacing="0">
                                                    <thead>
                                                        <tr align="center">
                                                            <th colspan="2">No.</th>
                                                            <th>Posisi</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        foreach ($role5 as $ad) :  ?>
                                                        <tr align="center">
                                                            <td width="20px" style="text-align: center;">
                                                                <?php echo $no++; ?>.
                                                            </td>
                                                            <td width="20px"><?php echo anchor(
                                                                                        'admin/update_posisiAgt/' . $ad->id_jabatan,
                                                                                        '<div class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></div>'
                                                                                    ) ?></td>
                                                            <td width="500px"><?php echo $ad->jabatan ?></td>
                                                            <td width="500px"><?php echo $ad->status ?></td>
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
                                <p class="float-left font-italic" style="margin-top: 7px; margin-left: 22px;">Posisi
                                    lainnya
                                    :
                                    <button class="btn btn-light float-right mr-2 mb-0" type="button"
                                        data-toggle="collapse" data-target="#anggotatj" aria-controls="anggotatj"
                                        style="width: 90px; height: 27px; margin-top:9px; "><i
                                            class="fas fa-caret-down fa-2x" style="margin-top: -10px;"></i>
                                    </button>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="collapse multi-collapse" id="anggotatj">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%"
                                                    cellspacing="0">
                                                    <thead>
                                                        <tr align="center">
                                                            <th colspan="2">No.</th>
                                                            <th>Posisi</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        foreach ($role6 as $ad) :  ?>
                                                        <tr align="center">
                                                            <td width="20px" style="text-align: center;">
                                                                <?php echo $no++; ?>.
                                                            </td>
                                                            <td width="20px"><?php echo anchor(
                                                                                        'admin/update_posisiAgt/' . $ad->id_jabatan,
                                                                                        '<div class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></div>'
                                                                                    ) ?></td>
                                                            <td width="500px"><?php echo $ad->jabatan ?></td>
                                                            <td width="500px"><?php echo $ad->status ?></td>
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
    </section>
</div>