<div class="container-fluid">
    <div class="content-wrapper">
        <section class="content-header" style="margin-top: -9px;">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="m-0 text-lightgray text-bold ml-1">Agenda Pelatihan Usaha</h4>
                </div>

            </div>
        </section>

        <section class="content" style="margin-top: -6px;">

            <?php echo $this->session->flashdata('pesan') ?>

            <a class="btn btn-danger mr-1" href="<?php echo base_url('DewanPimpinan_StafBPelatihan/portalPelatihan') ?>"
                role="button">
                <i class="fa fa-undo"></i> Kembali
            </a>
            <a class="btn btn-warning mr-1" href="<?php echo base_url('DewanPimpinan_StafBPelatihan/tambah_agendaP') ?>"
                role="button">
                <i class="fa fa-plus"></i> Tambah
            </a>

            <!-- DataTales Example -->
            <div class="card mb-4 mt-2">
                <div class="card bg-gray mb-0" style="height: 40px;">
                    <p class="float-left" style="margin-top: 7px; margin-left: 22px;">Agenda Kuttab yang
                        telah anda Tambahkan
                        :
                    </p>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr align="center">
                                            <th style="line-height: 45px;">No.</th>
                                            <th>Waktu yang ditetapkan</th>
                                            <th style="line-height: 45px;">Lokasi</th>
                                            <th style="line-height: 45px;">Agenda</th>
                                            <th style="line-height: 45px;">Keterangan</th>
                                            <th style="line-height: 45px;" colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($agendaP as $au) :  ?>
                                        <tr align="center">
                                            <td width="20px"><?php echo $no++ ?>.</td>
                                            <td width="110px"><?php echo $au->waktu_agenda ?></td>
                                            <td width="150px"><?php echo $au->lokasi ?></td>
                                            <td width="300px" style="text-align: left;"><?php echo $au->agenda ?></td>
                                            <td><?php echo $au->keterangan ?></td>
                                            <td width="20px"><?php echo anchor(
                                                                        'DewanPimpinan_StafBPelatihan/edit_agendaP/' . $au->id_agendaP,
                                                                        '<div class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></div>'
                                                                    ) ?></td>
                                            <td width="20px"
                                                onclick="javascript: return confirm('Anda yakin untuk dihapus?')">
                                                <?php echo anchor(
                                                        'DewanPimpinan_StafBPelatihan/hapus_agendaP/' . $au->id_agendaP,
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