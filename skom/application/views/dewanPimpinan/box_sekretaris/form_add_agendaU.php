</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-lightgray text-bold">Tambah Agenda Umum</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content ">
        <div class="card" style="width:40%;">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('AgendaUmum/tambah_AgendaU_Asekretaris') ?>"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Tanggal Penetapan Agenda</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control">
                        <?php echo form_error('tanggal', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Waktu</label>
                        <input type="time" id="jam" name="jam" class="form-control">
                        <?php echo form_error('jam', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Judul Agenda Umum</label>
                        <input type="text" id="agenda" name="agenda" class="form-control">
                        <?php echo form_error('agenda', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Lokasi</label>
                        <input type="text" id="lokasi" name="lokasi" class="form-control">
                        <?php echo form_error('lokasi', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" id="keterangan" name="keterangan" class="form-control">
                        <?php echo form_error('keterangan', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <button type="reset" class="btn btn-warning">Bersihkan</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a class="btn btn-danger" href="<?php echo base_url('AgendaUmum/all_Asekretaris') ?>">Kembali</a>

                </form>
            </div>
        </div>

    </section>
</div>