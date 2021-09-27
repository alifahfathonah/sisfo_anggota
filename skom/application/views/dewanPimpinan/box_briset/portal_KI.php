<div class="container-fluid">
    <div class="content-wrapper">
        <section class="content-header" style="margin-top: -9px;">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="m-0 text-lightgray text-bold ml-1">Portal Kelola Informasi</h4>
                </div>

            </div>
        </section>
        <section class="content" style="margin-top: -6px;">

            <?php echo $this->session->flashdata('notif') ?>

            <a class="btn btn-warning" style="margin-left: 3px;"
                href="<?= base_url('DewanPimpinan_StafBRiset/indexInfoRiset') ?>" role="button">
                <i class="fa fa-plus"></i> Input Informasi Pengembangan Riset
            </a>
            <a class="btn btn-info" style="margin-left: 317px;"
                href="<?= base_url('DewanPimpinan_StafBRiset/indexInfoPKTijarah') ?>" role="button">
                <i class="fa fa-plus"></i> Input Informasi Pengembangan Koperasi Tijarah
            </a>
            <section class="content" style="margin-left: -4px;">
                <div class="container-fluid">
                    <div class="row">
                        <section class="col-lg-6 mt-2">
                            <div class="card">
                                <div class="card-header bg-gradient-warning border-0">
                                    <h3 class="card-title p-2 text-bold">
                                        <i class="far fa-bell mr-1"></i>
                                        Informasi Pengembangan Riset
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-dark btn-sm" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Tabel Informasi -->
                                <div class="card-body p-2">
                                    <table class="table table-hover">
                                        <tbody>
                                            <?php foreach ($infoRiset as $ak) : ?>
                                            <tr>
                                                <th><span class="handle">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </span>
                                                </th>
                                                <td><?php echo $ak->waktu_post ?></td>
                                                <td><?php echo $ak->informasi ?></td>
                                                <td><?php echo $ak->keterangan ?></td>
                                                <td>
                                                    <div class="jump">
                                                        <a class="btn btn-warning btn-sm"
                                                            href="<?= base_url('DewanPimpinan_StafBRiset/detailInfoPRiset') ?>/<?php echo $ak->id_infoPRiset ?>">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                        </section>

                        <section class="col-lg-6 mt-2">
                            <div class="card">
                                <div class="card-header bg-gradient-info border-0">
                                    <h3 class="card-title p-2 text-bold">
                                        <i class="far fa-bell mr-1"></i>
                                        Informasi Pengembangan Koperasi Tijarah
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-dark btn-sm" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Tabel Informasi -->
                                <div class="card-body p-2">
                                    <table class="table table-hover">
                                        <tbody>
                                            <?php foreach ($infoPKTijarah as $ak) : ?>
                                            <tr>
                                                <th><span class="handle">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </span>
                                                </th>
                                                <td><?php echo $ak->waktu_post ?></td>
                                                <td><?php echo $ak->informasi ?></td>
                                                <td><?php echo $ak->keterangan ?></td>
                                                <td>
                                                    <div class="jump">
                                                        <a class="btn btn-warning btn-sm"
                                                            href="<?= base_url('DewanPimpinan_StafBRiset/detailInfoPKTijarah') ?>/<?php echo $ak->id_infoPKTijarah ?>">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                        </section>
                    </div>
                </div>
            </section>

        </section>

        <section class="content">

            <?php echo $this->session->flashdata('pesan') ?>
            <a class="btn btn-danger" style="margin-left: 3px;"
                href="<?= base_url('DewanPimpinan_StafBRiset/indexInfoPKTabarru') ?>" role="button">
                <i class="fa fa-plus"></i> Input Informasi Pengembangan Koperasi Tabarru
            </a>
            <a class="btn btn-success" style="margin-left: 236px;"
                href="<?= base_url('DewanPimpinan_StafBRiset/indexInfoPKomunitas') ?>" role="button">
                <i class="fa fa-plus"></i> Input Informasi Pengembangan Komunitas
            </a>
            <section class="content" style="margin-left: -4px;">
                <div class="container-fluid">
                    <div class="row">
                        <section class="col-lg-6 mt-2">
                            <div class="card">
                                <div class="card-header bg-gradient-danger border-0">
                                    <h3 class="card-title p-2 text-bold">
                                        <i class="far fa-bell mr-1"></i>
                                        Informasi Pengembangan Koperasi Tabarru
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-dark btn-sm" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Tabel Informasi -->
                                <div class="card-body p-2">
                                    <table class="table table-hover">
                                        <tbody>
                                            <?php foreach ($infoPKTabarru as $ak) : ?>
                                            <tr>
                                                <th><span class="handle">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </span>
                                                </th>
                                                <td><?php echo $ak->waktu_post ?></td>
                                                <td><?php echo $ak->informasi ?></td>
                                                <td><?php echo $ak->keterangan ?></td>
                                                <td>
                                                    <div class="jump">
                                                        <a class="btn btn-warning btn-sm"
                                                            href="<?= base_url('DewanPimpinan_StafBRiset/detailInfoPKTabarru') ?>/<?php echo $ak->id_infoPKTabarru ?>">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                        </section>

                        <section class="col-lg-6 mt-2">
                            <div class="card">
                                <div class="card-header bg-gradient-success border-0">
                                    <h3 class="card-title p-2 text-bold">
                                        <i class="far fa-bell mr-1"></i>
                                        Informasi Pengembangan Komunitas
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-dark btn-sm" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Tabel Informasi -->
                                <div class="card-body p-2">
                                    <table class="table table-hover">
                                        <tbody>
                                            <?php foreach ($infoPKomunitas as $ak) : ?>
                                            <tr>
                                                <th><span class="handle">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </span>
                                                </th>
                                                <td><?php echo $ak->waktu_post ?></td>
                                                <td><?php echo $ak->informasi ?></td>
                                                <td><?php echo $ak->keterangan ?></td>
                                                <td>
                                                    <div class="jump">
                                                        <a class="btn btn-warning btn-sm"
                                                            href="<?= base_url('DewanPimpinan_StafBRiset/detailInfoPKomunitas') ?>/<?php echo $ak->id_infoPK ?>">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                        </section>
                    </div>
                </div>
            </section>

        </section>
    </div>
</div>