<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="card card-dark col-5 mt-2">
                <div class="card-header">
                    Ubah Password
                </div>
                <?= $this->session->flashdata('notif'); ?>
                <div class="card-body">
                    <form action="<?= base_url('DewanUlama_Anggota/change_passAnggota'); ?>" method="POST">
                        <div class="form-group">
                            <label for="Current_password">Password saat ini</label>
                            <input type="password" class="form-control" id="current_pass" name="current_pass">
                            <small class="text-danger">
                                <?= form_error('current_pass'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="new_password">Password baru</label>
                            <input type="password" class="form-control" id="new_pass" name="new_pass">
                            <small class="text-danger">
                                <?= form_error('new_pass'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="repeat_password">Ulangi Password</label>
                            <input type="password" class="form-control" id="repeat_pass" name="repeat_pass">
                            <small class="text-danger">
                                <?= form_error('repeat_pass'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>