<div class="container-fluid">
    <div class="content-wrapper">
        <section class="content-header" style="margin-top: -9px;">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="m-0 text-lightgray text-bold ml-1">Agenda Umum</h4>
                </div>

            </div>
        </section>

        <section class="content" style="margin-top: -6px;">
            <?php echo $this->session->flashdata('notif') ?>

            <a class="btn btn-warning mr-1" href="<?= base_url('AgendaUmum_Staf/tambah_AgendaU_Bpelatihan') ?>"
                role="button">
                <i class="fa fa-plus"></i> Tambah
            </a>
            <div class="dropdown d-none d-sm-inline-block form-inline mr-auto ">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-list"></i> Filter Agenda Umum
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: lightgray; ">
                    <a class="dropdown-item" href="<?php echo base_url('AgendaUmum_Staf/ketua_Bpelatihan') ?>">Ketua
                        Dewan Pimpinan</a>
                    <a class="dropdown-item"
                        href="<?php echo base_url('AgendaUmum_Staf/sekretaris_Bpelatihan') ?>">Sekretaris
                        Dewan Pimpinan</a>
                    <a class="dropdown-item"
                        href="<?php echo base_url('AgendaUmum_Staf/bendahara_Bpelatihan') ?>">Bendahara
                        Dewan Pimpinan</a>
                    <a class="dropdown-item"
                        href="<?php echo base_url('AgendaUmum_Staf/bpendidikan_Bpelatihan') ?>">Bidang
                        Pendidikan</a>
                    <a class="dropdown-item"
                        href="<?php echo base_url('AgendaUmum_Staf/bkeanggotaan_Bpelatihan') ?>">Bidang
                        Keanggotaan</a>
                    <a class="dropdown-item" href="<?php echo base_url('AgendaUmum_Staf/briset_Bpelatihan') ?>">Bidang
                        Riset
                        &
                        Pengembangan</a>
                    <a class="dropdown-item" href="<?php echo base_url('AgendaUmum_Staf/ketuaDU_Bpelatihan') ?>">Ketua
                        Dewan Ulama</a>
                    <a class="dropdown-item"
                        href="<?php echo base_url('AgendaUmum_Staf/sekretarisDU_Bpelatihan') ?>">Sekretaris
                        Dewan Ulama</a>
                    <a class="dropdown-item"
                        href="<?php echo base_url('AgendaUmum_Staf/bendaharaDU_Bpelatihan') ?>">Bendahara
                        Dewan Ulama</a>
                    <a class="dropdown-item"
                        href="<?php echo base_url('AgendaUmum_Staf/anggotaDU_Bpelatihan') ?>">Anggota
                        Dewan Ulama</a>
                    <a class="dropdown-item" href="<?php echo base_url('AgendaUmum_Staf/ketuaCE_Bpelatihan') ?>">Ketua
                        Dewan
                        Cendekiawan</a>
                    <a class="dropdown-item"
                        href="<?php echo base_url('AgendaUmum_Staf/sekretarisCE_Bpelatihan') ?>">Sekretaris
                        Dewan
                        Cendekiawan</a>
                    <a class="dropdown-item"
                        href="<?php echo base_url('AgendaUmum_Staf/bendaharaCE_Bpelatihan') ?>">Bendahara
                        Dewan Cendekiawan</a>
                    <a class="dropdown-item"
                        href="<?php echo base_url('AgendaUmum_Staf/anggotaCE_Bpelatihan') ?>">Anggota
                        Dewan Cendekiawan</a>
                </div>
            </div>

            <!-- DataTales Example -->
            <div class="card mb-4 mt-2">
                <div class="card bg-gray mb-0" style="height: 40px;">
                    <p class="float-left" style="margin-top: 7px; margin-left: 22px;">Agenda yang
                        telah anda
                        upload
                        :
                        <button class="btn btn-light float-right mr-2 mb-0" type="button" data-toggle="collapse"
                            data-target="#bendahara" aria-controls="bendahara"
                            style="width: 90px; height: 27px; margin-top:9px; "><i class="fas fa-caret-down fa-2x"
                                style="margin-top: -10px;"></i>
                        </button>
                    </p>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="bendahara">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Tanggal</th>
                                                <th>Jam</th>
                                                <th>Agenda</th>
                                                <th>Lokasi</th>
                                                <th>Keterangan</th>
                                                <th>Pembuat</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($bpelatihan as $au) :  ?>
                                            <tr align="center">
                                                <td width="20px"><?php echo $no++ ?>.</td>
                                                <td><?php echo $au->tanggal ?></td>
                                                <td><?php echo $au->jam ?></td>
                                                <td><?php echo $au->agenda ?></td>
                                                <td><?php echo $au->lokasi ?></td>
                                                <td><?php echo $au->keterangan ?></td>
                                                <td><?php echo $au->pembuat_agenda ?></td>
                                                <td><?php echo anchor(
                                                            'AgendaUmum_Staf/edit_agendaU_Bpelatihan/' . $au->id_agendau,
                                                            '<div class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></div>'
                                                        ) ?></td>
                                                <td onclick="javascript: return confirm('Anda yakin untuk dihapus?')">
                                                    <?php echo anchor(
                                                            'AgendaUmum_Staf/hapus_Bpelatihan/' . $au->id_agendau,
                                                            '<div class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></div>'
                                                        ) ?>
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


            <!-- DataTales Example -->
            <div class="card" style="margin-top: -18px;">
                <div class="card bg-success mb-0" style="height: 40px;">
                    <p class="float-left" style="margin-top: 7px; margin-left: 22px;">Menampilkan Semua Agenda Umum :
                    </p>
                </div>
                <div class="row">
                    <div class="col mb-2">
                        <div class=" card-body">
                            <div class=" table-responsive">
                                <table class="table table-bordered mb-2" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr align="center">
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Agenda</th>
                                            <th>Lokasi</th>
                                            <th>Keterangan</th>
                                            <th>Pembuat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($semua as $au) :  ?>
                                        <tr align="center">
                                            <td width="20px"><?php echo ++$start; ?>.</td>
                                            <td><?php echo $au->tanggal ?></td>
                                            <td><?php echo $au->jam ?></td>
                                            <td><?php echo $au->agenda ?></td>
                                            <td><?php echo $au->lokasi ?></td>
                                            <td><?php echo $au->keterangan ?></td>
                                            <td><?php echo $au->pembuat_agenda ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <?= $this->pagination->create_links(); ?>
                            </div>
                        </div>
                    </div>

        </section>

    </div>
</div>