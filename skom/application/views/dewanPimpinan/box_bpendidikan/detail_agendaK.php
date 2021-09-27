<div class="container-fluid" style="height: 567px;">
    <div class="content-wrapper">
        <section class="content">
            <?php foreach ($detail as $de) : ?>
            <div class="card card-success col-sm-8 mt-2 m-3">
                <div class="card-header pr-3 py-0 pt-2">
                    <h4 class="font-italic">Agenda Kuttab</h4>
                </div>
                <div class="card-body">
                    <p class="text-justify">
                        <?= $de['agenda']; ?>
                    </p>
                    <p><b>Lokasi yang ditetapkan :</b> <?= $de['lokasi']; ?>.</p>
                    <p><b>Waktu yang ditetapkan :</b> <?= $de['tgl_agenda']; ?>, <?= $de['waktu_agenda']; ?> WIT</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-dark float-right ">
                        <a href="<?php echo base_url('DewanPimpinan_StafBPendidikan/portalKuttab'); ?>"> Kembali </a>
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        </section>
    </div>
</div>
<!-- /.content-wrapper -->