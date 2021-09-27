</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -14px; margin-top: -10px;">
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Update Akses</h4>
                </div>
            </div>
        </div>
    </div>

    <section class="content ">

        <div class="card ml-1" style="width:40%;">
            <div class="card-body">
                <?php foreach ($akses2 as $ak2) { ?>
                <form method="POST" action="<?php echo base_url() . 'super_admin/updateAkses_aksi'; ?>"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama Anggota</label>
                        <input type="hidden" name="id_anggota" id="id_anggota" class="form-control"
                            value="<?php echo $ak2->id_anggota ?>">
                        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $ak2->nama ?>"
                            readonly>
                        <?php echo form_error('nama', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Hak Akses</label>
                        <select name="hak_akses" id="hak_akses" class="form-control"
                            value="<?php echo $ak2->hak_akses ?>">
                            <option class="font-italic" value="<?php echo $ak2->hak_akses ?>">
                                <?php if ($ak2->hak_akses == '1') { ?>
                                <td>Admin Komunitas Koperasi</td>
                                <?php } else if ($ak2->hak_akses == '2') { ?>
                                <td>Admin Koperasi Tijarah</td>
                                <?php } else if ($ak2->hak_akses == '3') { ?>
                                <td>Admin Koperasi Tabarru</td>
                                <?php } else if ($ak2->hak_akses == '17') { ?>
                                <td>Hidden User</td>
                                <?php } ?>
                            </option>
                            <option value="1">Admin Komunitas Koperasi</option>
                            <option value="2">Admin Koperasi Tijarah</option>
                            <option value="3">Admin Koperasi Tabarru</option>
                            <option value="17">Hidden User</option>
                        </select>
                        <?php echo form_error('hak_akses', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <button type="reset" class="btn btn-warning">Bersihkan</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a class="btn btn-danger" href="<?php echo base_url('super_admin/data_hakakses') ?>">Kembali</a>
                </form>
                <?php } ?>
            </div>
        </div>

    </section>
</div>