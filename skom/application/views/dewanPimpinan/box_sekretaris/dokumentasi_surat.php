<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="ml-1"><b>Dokumentasi Surat</b></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row col-12">

                <div class="col-md-12 mt-2">
                    <!-- Tabel Cetak File Dokumen I -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">File Dokumentasi Surat</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <form action="<?= base_url('DewanPimpinan_Sekretaris'); ?>/downloadPDF_Sekretaris"
                                method="POST">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="table-success">
                                            <th width="10px">No.</th>
                                            <th>Judul Surat</th>
                                            <th>Nama File</th>
                                            <th>Waktu</th>
                                            <th>Pengupload</th>
                                            <th class="text-center">CheckList</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $directory = 'assets/file/';
                                        ?>
                                        <?php foreach ($pdfs as $pdf) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $pdf->judul_surat ?></td>
                                            <td><a href="<?= base_url('assets/file'); ?>/<?= $pdf->file_surat ?>"
                                                    target="_blank" class="btn btn-sm btn-danger">
                                                    <?= $pdf->file_surat ?>
                                                </a>
                                            </td>
                                            <td><?= $pdf->waktu_diupload ?></td>
                                            <td><?= $pdf->pengupload ?></td>
                                            <td class="text-center"><input type="checkbox" name="pdf[]" class="select"
                                                    value="<?= $directory . $pdf->file_surat ?>">
                                            </td>

                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <button type="submit" name="download" class="btn btn-primary mb-3 mr-3 float-right">
                                    <i class="fas fa-cloud-download-alt"></i>
                                    Download
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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