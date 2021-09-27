</aside>
<div class="content-wrapper">
    <div class="content-header" style="margin-top: -9px;">
        <div class="row" style="margin-bottom: -10px;">
            <div class="col-sm-5">
                <h4 class="text-lightgray text-bold ml-2">Ganti Foto Profile</h4>
            </div>
        </div>
    </div>

    <section class="content ">
        <div class="container-fluid">
            <?php echo $this->session->flashdata('notif') ?>
            <div class="row ml-1">
                <div class="card text-white ml-2" style="max-width: 18rem; border: 2px solid;">
                    <div class="card-body">
                        <img src="<?php echo base_url(); ?>assets/img/<?php echo $user['foto']; ?>"
                            style="width: 100px; height:100px;">
                    </div>
                </div>
                <div class="card ml-1" style="width:31%; height: 150px;">
                    <div class="card-body">
                        <?php echo form_open_multipart('DewanCendekiawan_Ketua/update_aksi_fotoKetua'); ?>

                        <div class="form-group">
                            <input type="hidden" id="id_user" name="id_user" class="form-control"
                                value="<?= $user['id_user']; ?>">
                            <input type="file" name="foto" id="foto" class="form-control">
                        </div>
                        <div class="card-footer" style="width: 100%;">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a class="btn btn-danger"
                                href="<?php echo base_url('DewanCendekiawan_Ketua/profile_ketua') ?>">Kembali</a>
                        </div>
                    </div>
                </div>


                <!-- </form> -->
                <?php echo form_close(); ?>
            </div>
        </div>

    </section>
</div>