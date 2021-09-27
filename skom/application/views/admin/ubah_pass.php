<div class="content-wrapper">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="row ml-2">
            <div class="card card-dark col-5 mt-2">
                <div class="card-header">
                    Ubah Password
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/change_pass'); ?>" method="POST">

                        <div class="form-group">
                            <label>Password baru</label>
                            <input type="password" class="form-control" id="passBaru" name="passBaru">
                            <small class="text-danger">
                                <?= form_error('passBaru'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label>Ulangi Password</label>
                            <input type="password" class="form-control" id="ulangPass" name="ulangPass">
                            <small class="text-danger">
                                <?= form_error('ulangPass'); ?>
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