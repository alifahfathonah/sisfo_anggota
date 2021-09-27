</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -15px; margin-top: -8px;">
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Tambah Data Posisi</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content" style="margin-left: 10px;">
        <div class="card" style="width:40%;">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('super_admin/tambahDataPosisi_Admin') ?>"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Posisi</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control">
                        <?php echo form_error('jabatan', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Status Aktif</label>
                        <select name="status" id="status" class="form-control">
                            <option class="font-italic">-- Pilih Status --</option>
                            <option>Aktif</option>
                            <option>Non-Aktif</option>
                            <?php echo form_error('status', '<div class="text-danger small">', '</div>') ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a class="btn btn-danger" href="<?php echo base_url('super_admin/posisiAdmin') ?>">Kembali</a>

                </form>
            </div>
        </div>

    </section>
</div>