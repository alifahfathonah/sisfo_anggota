</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -15px; margin-top: -8px;">
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Pengaturan Posisi Pengurus</h4>
                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <div class="container-fluid">
            <?php echo $this->session->flashdata('notif') ?>
            <section class="content ">
                <a class="btn btn-success" href="<?php echo base_url('super_admin/addPosisiAdmin') ?>">
                    <i class="fas fa-plus"></i> Tambah Data</a>
                <!-- DataTales Example -->
                <div class="card mb-4 mt-2">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr align="center">
                                        <th>No.</th>
                                        <th>Posisi Admin</th>
                                        <th>Status Aktif</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($jabatan as $jbtn) :  ?>
                                    <tr align="center">
                                        <td width="20px"><?php echo $no++ ?>.</td>
                                        <td><?php echo $jbtn->jabatan ?></td>
                                        <td><?php echo $jbtn->status ?></td>
                                        <td width="20px"><?php echo anchor(
                                                                    'super_admin/update_posisiAdmin/' . $jbtn->id_jabatan,
                                                                    '<div class="btn btn-sm btn-success"><i class="fa fa-edit"></i></div>'
                                                                ) ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </section>
</div>