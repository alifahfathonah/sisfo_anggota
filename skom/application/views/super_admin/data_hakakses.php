</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -15px; margin-top: -10px;">
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Pengaturan Hak Akses</h4>
                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <div class="container-fluid">
            <?php echo $this->session->flashdata('notif') ?>
            <section class="content ">
                <!-- <a class="btn btn-success" href="<?php echo base_url('super_admin/tambahAkses') ?>">
                    <i class="fas fa-plus"></i> Tambah Data</a> -->
                <!-- DataTales Example -->
                <div class="card mb-4 mt-2">
                    <div class="card bg-success mb-0" style="height: 40px;">
                        <p class="float-left" style="margin-top: 7px; margin-left: 22px;">Menampilkan Hak Akses Admin
                            :
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr align="center">
                                        <th>No.</th>
                                        <th>ID Anggota</th>
                                        <th style="line-height: 50px;">Nama Admin</th>
                                        <th style="line-height: 50px;" colspan="2">Hak Akses</th>
                                        <th style="line-height: 50px;">Pendaftar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($semua as $aks) :  ?>
                                    <tr align="center">
                                        <td width="20px"><?php echo ++$start; ?>.</td>
                                        <td width="20px"><?php echo $aks->id_anggota ?></td>
                                        <td><?php echo $aks->nama ?></td>
                                        <?php if ($aks->hak_akses == '0') { ?>
                                        <td>Hidden User</td>
                                        <?php } else if ($aks->hak_akses == '2') { ?>
                                        <td width="320px">Admin Koperasi Tijarah</td>
                                        <?php } else if ($aks->hak_akses == '3') { ?>
                                        <td width="320px">Admin Koperasi Tabarru</td>
                                        <?php } else if ($aks->hak_akses == '1') { ?>
                                        <td width="320px">Admin Komunitas Koperasi</td>
                                        <?php } ?>
                                        <td><?php echo anchor(
                                                    'super_admin/updateAkses/' . $aks->id_anggota,
                                                    '<div class="btn btn-sm btn-success"><i class="fa fa-edit"></i></div>'
                                                ) ?></td>
                                        <?php if ($aks->id_sa == '1') { ?>
                                        <td width="130px">Super Admin</td>
                                        <?php } ?>
                                        </td>
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
    </section>
</div>