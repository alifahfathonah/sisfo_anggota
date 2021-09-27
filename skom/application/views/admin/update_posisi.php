</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -15px; margin-top: -8px;">
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Update Posisi</h4>
                </div>
            </div>
        </div>
    </div>

    <section class="content ">

        <div class="card" style="width:40%;">
            <div class="card-body">
                <?php foreach ($jabatan2 as $jb2) { ?>
                <form method="POST" action="<?php echo base_url() . 'admin/updatePosisi_Aksi'; ?>"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Posisi</label>
                        <input type="hidden" id="id_jabatan" name="id_jabatan" class="form-control"
                            value="<?php echo $jb2->id_jabatan ?>">
                        <input type="text" id="jabatan" name="jabatan" class="form-control"
                            value="<?php echo $jb2->jabatan ?>">
                        <?php echo form_error('jabatan', '<div class="text-danger small" ml-3>') ?>
                    </div>
                    <div class="form-group">
                        <select id="kode_list" name="kode_list" class="form-control">
                            <option class="font-italic"><?php if ($jb2->kode_list == '3') { ?>
                                <td>Dewan Pimpinan</td>
                                <?php } else if ($jb2->kode_list == '4') { ?>
                                <td>Dewan Ulama</td>
                                <?php } else if ($jb2->kode_list == '5') { ?>
                                <td>Dewan Cendekiawan</td>
                                <?php } else if ($jb2->kode_list == '0') { ?>
                                <td>Anggota</td>
                                <?php } ?>
                            </option>
                            <option value="3">Dewan Pimpinan</option>
                            <option value="4">Dewan Ulama</option>
                            <option value="5">Dewan Cendekiawan</option>
                            <option value="0">Anggota</option>
                        </select>
                        <?php echo form_error('kode_list', '<div class="text-danger small">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" id="status" name="status" value="<?php echo $jb2->status ?>">
                            <option class="font-italic" value="<?php echo $jb2->status ?>"><?php echo $jb2->status ?>
                            </option>
                            <option>Aktif</option>
                            <option>Non Aktif</option>
                            <?php echo form_error('status', '<div class="text-danger small" ml-3>') ?>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a class="btn btn-danger" href="<?php echo base_url('admin/posisiAgt') ?>">Kembali</a>
                </form>
                <?php } ?>
            </div>
        </div>

        <br><br><br>
    </section>
</div>