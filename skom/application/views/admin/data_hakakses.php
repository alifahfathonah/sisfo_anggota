</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -15px; margin-top: -10px;">
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Daftar Hak Akses</h4>
                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <div class="container-fluid">
            <?php echo $this->session->flashdata('notif') ?>
            <section class="content ">

                <div class="card">
                    <div class="card bg-success mb-0" style="height: 40px;">
                        <p class="float-left" style="margin-top: 7px; margin-left: 22px;">Menampilkan Hak Akses Anggota
                            :
                        </p>
                    </div>
                    <div class="row">
                        <div class="col mb-2">
                            <div class=" card-body">
                                <div class=" table-responsive">
                                    <table class="table table-bordered mb-2" id="dataTable" width="100%"
                                        cellspacing="0">
                                        <thead>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Nama Admin</th>
                                                <th colspan="2">Hak Akses</th>
                                                <th>Pendaftar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($semua as $aks) :  ?>
                                            <tr align="center">
                                                <td width="20px"><?php echo ++$start; ?>.</td>
                                                <td><?php echo $aks->nama ?></td>
                                                <?php if ($aks->hak_akses == '0') { ?>
                                                <td>Anggota</td>
                                                <?php } else if ($aks->hak_akses == '1') { ?>
                                                <td>Ketua Dewan Pimpinan</td>
                                                <?php } else if ($aks->hak_akses == '2') { ?>
                                                <td>Sekretaris Dewan Pimpinan</td>
                                                <?php } else if ($aks->hak_akses == '3') { ?>
                                                <td>Bendahara Dewan Pimpinan</td>
                                                <?php } else if ($aks->hak_akses == '4') { ?>
                                                <td>Staf Bidang Pendidikan</td>
                                                <?php } else if ($aks->hak_akses == '5') { ?>
                                                <td>Staf Bidang Pelatihan</td>
                                                <?php } else if ($aks->hak_akses == '6') { ?>
                                                <td>Staf Bidang Keanggotaan</td>
                                                <?php } else if ($aks->hak_akses == '7') { ?>
                                                <td>Staf Bidang Riset & Pengembangan</td>
                                                <?php } else if ($aks->hak_akses == '8') { ?>
                                                <td>Ketua Dewan Ulama</td>
                                                <?php } else if ($aks->hak_akses == '9') { ?>
                                                <td>Sekretaris Dewan Ulama</td>
                                                <?php } else if ($aks->hak_akses == '10') { ?>
                                                <td>Bendahara Dewan Ulama</td>
                                                <?php } else if ($aks->hak_akses == '11') { ?>
                                                <td>Anggota Dewan Ulama</td>
                                                <?php } else if ($aks->hak_akses == '12') { ?>
                                                <td>Ketua Dewan Cendekiawan</td>
                                                <?php } else if ($aks->hak_akses == '13') { ?>
                                                <td>Sekretaris Dewan Cendekiawan</td>
                                                <?php } else if ($aks->hak_akses == '14') { ?>
                                                <td>Bendahara Dewan Cendekiawan</td>
                                                <?php } else if ($aks->hak_akses == '15') { ?>
                                                <td>Anggota Dewan Cendekiawan</td>
                                                <?php } ?>
                                                <td width="20px"><?php echo anchor(
                                                                            'admin/updateAkses/' . $aks->id_user,
                                                                            '<div class="btn btn-sm btn-success"><i class="fa fa-edit"></i></div>'
                                                                        ) ?></td>
                                                <td><?php echo $aks->pendaftar ?></td>
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
            </section>
        </div>
    </section>
</div>