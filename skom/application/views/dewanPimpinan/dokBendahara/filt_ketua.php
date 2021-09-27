<div class="container-fluid">
    <div class="content-wrapper">
        <section class="content-header" style="margin-top: -9px;">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="m-0 text-lightgray text-bold ml-1">Dokumen Dewan Pimpinan</h4>
                </div>

            </div>
        </section>

        <section class="content" style="margin-top: -6px;">

            <?php echo $this->session->flashdata('pesan') ?>

            <a class="btn btn-warning mr-1"
                href="<?php echo base_url('DewanPimpinan_Bendahara/tambah_Dokumen_dbendahara') ?>" role="button">
                <i class="fa fa-plus"></i> Tambah
            </a>
            <div class="dropdown d-none d-sm-inline-block form-inline mr-auto ">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-list"></i> Filter Dokumen Dewan Pimpinan
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: lightgray; ">
                    <a class="dropdown-item"
                        href=" <?php echo base_url('DewanPimpinan_Bendahara/dokumenBendahara') ?>">Semua</a>
                    <a class="dropdown-item"
                        href="<?php echo base_url('DewanPimpinan_Bendahara/filterSekretaris_mBen') ?>">Sekretaris</a>
                </div>
            </div>

            <!-- DataTales Example -->
            <div class="card mb-4 mt-2">
                <div class="card bg-gray mb-0" style="height: 40px;">
                    <p class="float-left" style="margin-top: 7px; margin-left: 22px;">Dokumen yang
                        telah anda
                        upload
                        :
                        <button class="btn btn-light float-right mr-2 mb-0" type="button" data-toggle="collapse"
                            data-target="#ketua" aria-controls="ketua"
                            style="width: 90px; height: 27px; margin-top:9px; "><i class="fas fa-caret-down fa-2x"
                                style="margin-top: -10px;"></i>
                        </button>
                    </p>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="ketua">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Nama Dokumen</th>
                                                <th>File Dokumen</th>
                                                <th>Waktu Unggah</th>
                                                <th>Pengunggah</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $directory = 'assets/file/';
                                            ?>
                                            <?php
                                            $no = 1;
                                            foreach ($dbendahara as $au) :  ?>
                                            <tr align="center">
                                                <td width="20px"><?php echo $no++ ?>.</td>
                                                <td align="left" width="430px"><?php echo $au->nm_dokumen ?></td>
                                                <td><a href="<?= base_url('assets/file'); ?>/<?= $au->dokumen ?>"
                                                        target="_blank" class="btn btn-sm btn-danger">
                                                        Cetak Dokumen (.pdf)
                                                    </a>
                                                <td><?php echo $au->waktu_unggah ?></td>
                                                <td><?php echo $au->pengunggah ?></td>
                                                <td><?php echo anchor(
                                                            'DewanPimpinan_Bendahara/edit_dbendahara/' . $au->id_dokumen,
                                                            '<div class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></div>'
                                                        ) ?></td>
                                                <td onclick="javascript: return confirm('Anda yakin untuk dihapus?')">
                                                    <?php echo anchor(
                                                            'DewanPimpinan_Bendahara/hapus_dbendahara/' . $au->id_dokumen,
                                                            '<div class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></div>'
                                                        ) ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- DataTales Example -->
            <div class="card" style="margin-top: -18px;">
                <div class="card bg-success mb-0" style="height: 40px;">
                    <p class="float-left" style="margin-top: 7px; margin-left: 22px;">Menampilkan Semua Dokumen Dewan
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
                                                <th>Nama Dokumen</th>
                                                <th>File Dokumen</th>
                                                <th>Waktu Unggah</th>
                                                <th>Pengunggah</th>
                                                <th class="text-center">CheckList</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $directory = 'assets/file/';
                                            ?>
                                            <?php $no = 1;
                                            foreach ($dketua as $pdf) : ?>
                                            <tr align="center">
                                                <td width="20px"><?php echo $no++; ?>.</td>
                                                <td align="left" width="430px">
                                                    <?php echo $pdf->nm_dokumen ?></td>
                                                <td><a href="<?= base_url('assets/file'); ?>/<?= $pdf->dokumen ?>"
                                                        target="_blank" class="btn btn-sm btn-danger">
                                                        Cetak Dokumen (.pdf)
                                                    </a>
                                                </td>
                                                <td><?php echo $pdf->waktu_unggah ?></td>
                                                <td><?php echo $pdf->pengunggah ?></td>
                                                <td class="text-center"><input type="checkbox" name="pdf[]"
                                                        class="select" value="<?= $directory . $pdf->dokumen ?>">
                                                </td>

                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <button type="submit" name="download" class="btn btn-primary mb-3 float-right">
                                        <i class="fas fa-cloud-download-alt"></i>
                                        Download
                                    </button>
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