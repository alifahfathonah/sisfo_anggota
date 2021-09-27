</aside>
<div class="content-wrapper">
    <div class="content-header" style="margin-top: -5px;">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="m-0 text-lightgray text-bold ml-2">Tambah Agenda</h4>
            </div>
        </div>
    </div>

    <section class="content " style="height: 530px;">

        <div class="card ml-2" style="width:86%;">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('AgendaUmum_Staf/tambah_AgendaU_Briset') ?>"
                    enctype="multipart/form-data">

                    <div class="card-header bg-gray mb-2" style="margin-top: -15px; height: 47px;">
                        <h5 class="font-italic">Agenda Umum</h5>
                    </div>
                    <div class="row" style="height:280px;">

                        <div class="col-md-4 mx-auto">
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
                        </div>
                        <div class="col-md-7 mx-auto">
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
                        </div>
                    </div>
                    <div class="card-footer mt-4" style="width: 100%; margin-bottom: -15px;">
                        <button type="reset" class="btn btn-warning">Bersihkan</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a class="btn btn-danger"
                            href="<?php echo base_url('AgendaUmum_Staf/all_Briset') ?>">Kembali</a>
                    </div>
                </form>
            </div>
        </div>

    </section>
</div>