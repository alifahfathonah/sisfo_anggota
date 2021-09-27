</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -15px; margin-top: -8px;">
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Update Jabatan</h4>
                </div>
            </div>
        </div>
    </div>

    <section class="content" style="margin-left: 10px;">
        <div class="card" style="width:40%;">
            <div class="card-body">
                <?php foreach ($jabatan2 as $jb2) { ?>
                <form method="POST" action="<?php echo base_url() . 'super_admin/updatePosisi_Aksi'; ?>"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Jabatan di Koperasi Tijarah</label>
                        <input type="hidden" name="id_jabatan" class="form-control"
                            value="<?php echo $jb2->id_jabatan ?>">
                        <input type="text" name="jabatan" placeholder="Masukan Nama Jabatan" class="form-control"
                            value="<?php echo $jb2->jabatan ?>">
                        <?php echo form_error('jabatan', '<div class="text-danger small" ml-3>') ?>
                    </div>

                    <div class="form-group">
                        <label>Status Aktif</label>
                        <select class="form-control" name="status" value="<?php echo $jb2->status ?>">
                            <option class="font-italic" value="<?php echo $jb2->status ?>"><?php echo $jb2->status ?>
                            </option>
                            <option>Aktif</option>
                            <option>Non Aktif</option>
                            <?php echo form_error('status', '<div class="text-danger small" ml-3>') ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a class="btn btn-danger" href="<?php echo base_url('super_admin/posisiAdmin') ?>">Kembali</a>
                </form>
                <?php } ?>
            </div>
        </div>

        <br><br><br>
    </section>
</div>