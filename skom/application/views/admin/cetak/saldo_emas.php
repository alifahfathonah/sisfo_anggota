</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -5px; margin-top: -5px;">
                <a class="btn btn-warning" href="<?= base_url('admin/list_anggota') ?>" role="button" style="margin-left: 11px;">
                    <i class="fa fa-fast-backward"></i>
                    Kembali
                </a>
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Informasi Saldo Titipan Emas</h4>
                </div>
            </div>
        </div>
    </div>

    <section class="content ">
        <!-- DataTales Example -->
        <div class="container-fluid">

            <div class="row ml-1" style="width: 98%;">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card bg-gradient-success mb-0" style="height: 40px;">
                        <p class="float-left font-italic" style="margin-top: 7px; margin-left: 22px;">Anggota Dewan
                            Pimpinan
                            :
                            <button class="btn btn-light float-right mr-2 mb-0" type="button" data-toggle="collapse" data-target="#dewanpmpinan" aria-controls="dewanpmpinan" style="width: 90px; height: 27px; margin-top:9px; "><i class="fas fa-caret-down fa-2x" style="margin-top: -10px;"></i>
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
                                                    <th>No.</th>
                                                    <th>Nama Anggota</th>
                                                    <th>Jabatan</th>
                                                    <th>Saldo Titipan emas</th>
                                                    <th>Pendaftar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($dewanp as $ad) :  ?>
                                                    <tr align="center">
                                                        <td style="text-align: center;"><?php echo $no++; ?>.</td>
                                                        <td width="200px"><?php echo $ad->nama ?></td>
                                                        <td width="200px"><?php echo $ad->jabatan ?></td>
                                                        <td><?php echo $ad->saldo_emas ?></td>
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
                        <p class="float-left font-italic" style="margin-top: 7px; margin-left: 22px;">Anggota Dewan
                            Ulama
                            :
                            <button class="btn btn-light float-right mr-2 mb-0" type="button" data-toggle="collapse" data-target="#dewanulama" aria-controls="dewanulama" style="width: 90px; height: 27px; margin-top:9px; "><i class="fas fa-caret-down fa-2x" style="margin-top: -10px;"></i>
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
                                                    <th>No.</th>
                                                    <th>Nama Anggota</th>
                                                    <th>Jabatan</th>
                                                    <th>Saldo Titipan emas</th>
                                                    <th>Pendaftar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($dewanu as $ad) :  ?>
                                                    <tr align="center">
                                                        <td style="text-align: center;"><?php echo $no++; ?>.</td>
                                                        <td width="200px"><?php echo $ad->nama ?></td>
                                                        <td width="200px"><?php echo $ad->jabatan ?></td>
                                                        <td><?php echo $ad->saldo_emas ?></td>
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
                        <p class="float-left font-italic" style="margin-top: 7px; margin-left: 22px;">Anggota
                            Dewan
                            Cendekiawan
                            :
                            <button class="btn btn-light float-right mr-2 mb-0" type="button" data-toggle="collapse" data-target="#dewancendekiawan" aria-controls="dewancendekiawan" style="width: 90px; height: 27px; margin-top:9px; "><i class="fas fa-caret-down fa-2x" style="margin-top: -10px;"></i>
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
                                                    <th>No.</th>
                                                    <th>Nama Anggota</th>
                                                    <th>Jabatan</th>
                                                    <th>Saldo Titipan emas</th>
                                                    <th>Pendaftar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($dewanc as $ad) :  ?>
                                                    <tr align="center">
                                                        <td style="text-align: center;"><?php echo $no++; ?>.</td>
                                                        <td width="200px"><?php echo $ad->nama ?></td>
                                                        <td width="200px"><?php echo $ad->jabatan ?></td>
                                                        <td><?php echo $ad->saldo_emas ?></td>
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
                        <p class="float-left font-italic" style="margin-top: 7px; margin-left: 22px;">Anggota
                            Tanpa Jabatan
                            :
                            <button class="btn btn-light float-right mr-2 mb-0" type="button" data-toggle="collapse" data-target="#anggotatj" aria-controls="anggotatj" style="width: 90px; height: 27px; margin-top:9px; "><i class="fas fa-caret-down fa-2x" style="margin-top: -10px;"></i>
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
                                                    <th>No.</th>
                                                    <th>Nama Anggota</th>
                                                    <th>Jabatan</th>
                                                    <th>Saldo Titipan emas</th>
                                                    <th>Pendaftar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($anggota as $ad) :  ?>
                                                    <tr align="center">
                                                        <td style="text-align: center;"><?php echo $no++; ?>.</td>
                                                        <td width="200px"><?php echo $ad->nama ?></td>
                                                        <td width="200px"><?php echo $ad->jabatan ?></td>
                                                        <td><?php echo $ad->saldo_emas ?> gr</td>
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