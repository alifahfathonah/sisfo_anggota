</aside>
<div class="content-wrapper">
    <div class="content-header" style="margin-top: -5px;">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="m-0 text-lightgray text-bold ml-2">Edit Agenda</h4>
            </div>
        </div>
    </div>

    <section class="content " style="height: 530px;">

        <div class="card ml-2" style="width:86%;">
            <div class="card-body">
                <?php foreach ($edit as $ag) : ?>
                <form method="POST"
                    action="<?php echo base_url() . 'DewanPimpinan_StafBPelatihan/update_Aksi_agendaP'; ?>">
                    <div class="card-header bg-gray mb-2" style="margin-top: -15px; height: 47px;">
                        <h5 class="font-italic">Agenda Kuttab</h5>
                    </div>
                    <div class="row" style="height:345px;">

                        <div class="col-md-4 mx-auto">
                            <div class="form-group">
                                <label>Tanggal yang ditetapkan :</label>
                                <input type="hidden" id="id_agendaP" name="id_agendaP" class="form-control"
                                    value="<?php echo $ag->id_agendaP ?>">
                                <input type="date" id="tgl_agenda" name="tgl_agenda" class="form-control"
                                    value="<?php echo $ag->tgl_agenda ?>">
                                <?php echo form_error('tgl_agenda', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Waktu yang ditetapkan :</label>
                                <input type="time" id="waktu_agenda" name="waktu_agenda" class="form-control"
                                    value="<?php echo $ag->waktu_agenda ?>">
                                <?php echo form_error('waktu_agenda', '<div class="text-danger small">', '</div>') ?>
                            </div>
                        </div>

                        <div class="col-md-7 mx-auto">
                            <div class="form-group">
                                <label>Agenda</label>
                                <input type="text" id="agenda" name="agenda" class="form-control"
                                    value="<?php echo $ag->agenda ?>">
                                <?php echo form_error('agenda', '<div class="text-danger small">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Lokasi</label>
                                <input type="text" id="lokasi" name="lokasi" class="form-control"
                                    value="<?php echo $ag->lokasi ?>">
                                <?php echo form_error('lokasi', '<div class="text-danger small">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" id="keterangan" name="keterangan" class="form-control"
                                    value="<?php echo $ag->keterangan ?>">
                                <?php echo form_error('keterangan', '<div class="text-danger small">', '</div>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-4" style="width: 100%; margin-bottom: -15px;">
                        <button type="reset" class="btn btn-warning">Bersihkan</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a class="btn btn-danger"
                            href="<?php echo base_url('DewanPimpinan_StafBPelatihan/indexAgendaP') ?>">Kembali</a>
                    </div>
                </form>
                <?php endforeach; ?>
            </div>
        </div>

        <br><br><br>
    </section>
</div>