<div class="container-fluid">
    <div class="content-wrapper">
        <section class="content-header" style="margin-top: -9px;">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="m-0 text-lightgray text-bold ml-1">Riwayat Anggaran Dewan Pimpinan</h4>
                </div>

            </div>
        </section>

        <section class="content" style="margin-top: -6px;">

            <?php echo $this->session->flashdata('notif') ?>

            <a class="btn btn-warning mr-1" href="<?= base_url('DewanPimpinan_Bendahara/tambah_RAB') ?>" role="button">
                <i class="fa fa-plus"></i> Tambah
            </a>

            <!-- DataTales Example -->
            <div class="card" style="margin-top: 5px;">
                <div class="card bg-success mb-0" style="height: 40px;">
                    <p class="float-left" style="margin-top: 7px; margin-left: 22px;">Menampilkan Semua Laporan Anggaran
                        Dewan
                        Pimpinan :
                    </p>
                </div>
                <div class="row">
                    <div class="col mb-2" style="height: 420px;">
                        <div class=" card-body">
                            <div class=" table-responsive">
                                <form action="<?= base_url('DewanPimpinan_Bendahara'); ?>/downloadPDF_mBen"
                                    method="POST">
                                    <table class="table table-bordered mb-2" id="dataTable" width="100%"
                                        cellspacing="0">
                                        <thead>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Tahun Anggaran</th>
                                                <th>File RAB</th>
                                                <th>Keterangan</th>
                                                <th class="text-center">CheckList</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $directory = 'assets/file/';
                                            ?>
                                            <?php foreach ($rab as $au) :  ?>
                                            <tr align="center">
                                                <td width="20px"><?php echo ++$start; ?>.</td>
                                                <td width="140px"><?php echo $au->tahun_anggaran ?></td>
                                                <td><a href="<?= base_url('assets/file'); ?>/<?= $au->file_rab ?>"
                                                        target="_blank" class="btn btn-sm btn-danger">
                                                        Cetak (.pdf)
                                                    </a></td>
                                                <td><?php echo $au->keterangan ?></td>
                                                <td width="20px" class="text-center"><input type="checkbox" name="pdf[]"
                                                        class="select" value="<?= $directory . $au->file_rab ?>">
                                                </td>
                                                <td width="20px"><?php echo anchor(
                                                                            'DewanPimpinan_Bendahara/edit_rab/' . $au->id_ra,
                                                                            '<div class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></div>'
                                                                        ) ?></td>
                                                <td width="20px"
                                                    onclick="javascript: return confirm('Anda yakin untuk dihapus?')">
                                                    <?php echo anchor(
                                                            'DewanPimpinan_Bendahara/hapus_rab/' . $au->id_ra,
                                                            '<div class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></div>'
                                                        ) ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <button type="submit" name="download" class="btn btn-primary mb-3 float-right">
                                        <i class="fas fa-cloud-download-alt"></i>
                                        Download
                                    </button>
                                    <?= $this->pagination->create_links(); ?>

                            </div>
                        </div>
                    </div>
        </section>
    </div>
</div>
<script>
$(document).ready(function() {
    $('.select').click(function() {
        if (this.checked) {
            $(this).parent().css('border', '5px solid #ff0000');
        } else {
            $(this).parent().css('border', 'none');
        }
    });
});
</script>