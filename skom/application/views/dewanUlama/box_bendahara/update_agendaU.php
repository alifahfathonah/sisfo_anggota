</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-lightgray text-bold">Update Agenda</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content ">

        <div class="card" style="width:80%;">
            <div class="card-body">
                <?php foreach ($agenda2 as $ag) : ?>
                <form method="POST" action="<?php echo base_url() . 'AgendaUmum_DU/updateAgendaU_aksi_Abendahara'; ?>">

                    <div class="form-group">
                        <label>Tanggal Penetapan Agenda</label>
                        <input type="hidden" id="id_agendau" name="id_agendau" class="form-control"
                            value="<?php echo $ag->id_agendau ?>">
                        <input type="date" id="tanggal" name="tanggal" class="form-control"
                            value="<?php echo $ag->tanggal ?>">
                        <?php echo form_error('tanggal', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Waktu</label>
                        <input type="time" id="jam" name="jam" class="form-control" value="<?php echo $ag->jam ?>">
                        <?php echo form_error('jam', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Judul Agenda Umum</label>
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

                    <button type="reset" class="btn btn-warning">Bersihkan</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a class="btn btn-danger" href="<?php echo base_url('AgendaUmum_DU/all_Abendahara') ?>">Kembali</a>
                </form>
                <?php endforeach; ?>
            </div>
        </div>

        <br><br><br>
    </section>
</div>