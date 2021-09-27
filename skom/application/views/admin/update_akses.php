</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: -14px; margin-top: -10px;">
                <div class="col-sm-6">
                    <h4 class="text-lightgray text-bold">Update Akses</h4>
                </div>
            </div>
        </div>
    </div>

    <section class="content ">

        <div class="card ml-1" style="width:40%;">
            <div class="card-body">
                <?php foreach ($akses2 as $ak2) { ?>
                <form method="POST" action="<?php echo base_url() . 'admin/updateAkses_aksi'; ?>"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id_user" id="id_user" class="form-control"
                            value="<?php echo $ak2->id_user ?>">
                        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $ak2->nama ?>"
                            readonly>
                        <?php echo form_error('nama', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Hak Akses</label>
                        <select name="hak_akses" id="hak_akses" class="form-control"
                            value="<?php echo $ak2->hak_akses ?>">
                            <option class="font-italic" value="<?php echo $ak2->hak_akses ?>">
                                <?php if ($ak2->hak_akses == '1') { ?>
                                <td>Ketua Dewan Pimpinan</td>
                                <?php } else if ($ak2->hak_akses == '2') { ?>
                                <td>Sekretaris Dewan Pimpinan</td>
                                <?php } else if ($ak2->hak_akses == '3') { ?>
                                <td>Bendahara Dewan Pimpinan</td>
                                <?php } else if ($ak2->hak_akses == '4') { ?>
                                <td>Staf Bidang Pendidikan</td>
                                <?php } else if ($ak2->hak_akses == '5') { ?>
                                <td>Staf Bidang Pelatihan</td>
                                <?php } else if ($ak2->hak_akses == '6') { ?>
                                <td>Staf Bidang Keanggotaan</td>
                                <?php } else if ($ak2->hak_akses == '7') { ?>
                                <td>Staf Bidang Riset & Pengembangan</td>
                                <?php } else if ($ak2->hak_akses == '8') { ?>
                                <td>Ketua Dewan Ulama</td>
                                <?php } else if ($ak2->hak_akses == '9') { ?>
                                <td>Sekretaris Dewan Ulama</td>
                                <?php } else if ($ak2->hak_akses == '10') { ?>
                                <td>Bendahara Dewan Ulama</td>
                                <?php } else if ($ak2->hak_akses == '11') { ?>
                                <td>Anggota Dewan Ulama</td>
                                <?php } else if ($ak2->hak_akses == '12') { ?>
                                <td>Ketua Dewan Cendekiawan</td>
                                <?php } else if ($ak2->hak_akses == '13') { ?>
                                <td>Sekretaris Dewan Cendekiawan</td>
                                <?php } else if ($ak2->hak_akses == '14') { ?>
                                <td>Bendahara Dewan Cendekiawan</td>
                                <?php } else if ($ak2->hak_akses == '15') { ?>
                                <td>Anggota Dewan Cendekiawan</td>
                                <?php } else if ($ak2->hak_akses == '0') { ?>
                                <td>Anggota</td>
                                <?php } ?>
                            </option>
                            <option value="1">Ketua Dewan Pimpinan</option>
                            <option value="2">Sekretaris Dewan Pimpinan</option>
                            <option value="3">Bendahara Dewan Pimpinan</option>
                            <option value="4">Staf Bidang Pendidikan</option>
                            <option value="5">Staf Bidang Pelatihan</option>
                            <option value="6">Staf Bidang Keanggotaan</option>
                            <option value="7">Staf Bidang Riset & Pengembangan</option>
                            <option value="0">Anggota</option>
                            <option value="8">Ketua Dewan Ulama</option>
                            <option value="9">Sekretaris Dewan Ulama</option>
                            <option value="10">Bendahara Dewan Ulama</option>
                            <option value="11">Anggota Dewan Ulama</option>
                            <option value="12">Ketua Dewan Cendekiawan</option>
                            <option value="13">Sekretaris Dewan Cendekiawan</option>
                            <option value="14">Bendahara Dewan Cendekiawan</option>
                            <option value="15">Anggota Dewan Cendekiawan</option>
                        </select>
                        <?php echo form_error('hak_akses', '<div class="text-danger small">', '</div>') ?>
                    </div>
                    <div class="form-group" style="margin-top: -10px;">
                        <label class="ml-2">Kode List Menurut Hak Akses</label>
                        <select id="kode_list" name="kode_list" class="form-control"
                            value="<?php echo $ak2->kode_list ?>">
                            <option class="font-italic" value="<?php echo $ak2->kode_list ?>">
                                <?php if ($ak2->kode_list == '3') { ?>
                                <td>Dewan Pimpinan</td>
                                <?php } else if ($ak2->kode_list == '4') { ?>
                                <td>Dewan Ulama</td>
                                <?php } else if ($ak2->kode_list == '5') { ?>
                                <td>Dewan Cendekiawan</td>
                                <?php } else if ($ak2->kode_list == '0') { ?>
                                <td>Anggota</td>
                                <?php } ?>
                            </option>
                            <option value="3">Dewan Pimpinan</option>
                            <option value="4">Dewan Ulama</option>
                            <option value="5">Dewan Cendekiawan</option>
                            <option value="0">Anggota</option>
                        </select>
                        <?php echo form_error('kode_list', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <button type="reset" class="btn btn-warning">Bersihkan</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a class="btn btn-danger" href="<?php echo base_url('admin/data_hakakses') ?>">Kembali</a>
                </form>
                <?php } ?>
            </div>
        </div>

    </section>
</div>