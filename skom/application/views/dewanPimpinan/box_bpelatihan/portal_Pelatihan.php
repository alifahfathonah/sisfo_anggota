<div class="container-fluid">
    <div class="content-wrapper">
        <section class="content-header" style="margin-top: -9px;">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="m-0 text-lightgray text-bold ml-1">Portal Pelatihan Usaha</h4>
                </div>

            </div>
        </section>

        <section class="content" style="margin-top: -6px;">

            <?php echo $this->session->flashdata('pesan') ?>

            <a class="btn btn-success" style="margin-left: 3px;"
                href="<?= base_url('DewanPimpinan_StafBPelatihan/indexAgendaP') ?>" role="button">
                <i class="fa fa-plus"></i> Input Agenda Kegiatan Pelatihan Usaha
            </a>
            <a class="btn btn-info" style="margin-left: 310px;"
                href="<?= base_url('DewanPimpinan_StafBPelatihan/indexInfoP') ?>" role="button">
                <i class="fa fa-plus"></i> Input Informasi Pelatihan Usaha
            </a>
            <section class="content" style="margin-left: -4px;">
                <div class="container-fluid">
                    <div class="row">
                        <section class="col-lg-6 mt-2">
                            <div class="card">
                                <div class="card-header bg-gradient-success border-0">
                                    <h3 class="card-title p-2 text-bold">
                                        <i class="far fa-bell mr-1"></i>
                                        Agenda Kegiatan Pelatihan Usaha
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
                                            <?php foreach ($agendaP as $ak) : ?>
                                            <tr>
                                                <th><span class="handle">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </span>
                                                </th>
                                                <td><?php echo $ak->agenda ?></td>
                                                <td><?php echo $ak->tgl_agenda ?><br> <?php echo $ak->waktu_agenda ?>
                                                </td>
                                                <td><?php echo $ak->lokasi ?></td>
                                                <td>
                                                    <div class="jump">
                                                        <a class="btn btn-warning btn-sm"
                                                            href="<?= base_url('DewanPimpinan_StafBPelatihan/detailAgenda_Pelatihan') ?>/<?php echo $ak->id_agendaP ?>">
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
                                        Informasi Pelatihan Usaha
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
                                            <?php foreach ($infoP as $ak) : ?>
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
                                                            href="<?= base_url('DewanPimpinan_StafBPelatihan/detailInfo_Pelatihan') ?>/<?php echo $ak->id_infoP ?>">
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