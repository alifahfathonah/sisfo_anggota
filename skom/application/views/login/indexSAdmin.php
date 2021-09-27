<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="mangga"></div>
            <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
                <div class="card-body p-0">

                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="<?php echo base_url() ?>assets/img/logo.png" width='100px'>
                                    <h1 class="h4 text-gray-900 mb-2">SISTEM MUAMALAH <br> <b>MANAJEMEN KOMUNITAS</b>
                                    </h1>
                                    <p><a class="font-italic" style="text-decoration: none; color: inherit;" href="<?php echo base_url('Auth') ?>/index">User </a>|
                                        <a class="font-italic" style="text-decoration: none; color: inherit;" href="<?php echo base_url('Auth') ?>/indexAdmin">Admin </a>|
                                        <b>Super Admin</b>
                                    </p>
                                    <hr>
                                </div>

                                <?php echo $this->session->flashdata('message') ?>

                                <form class="user" method="POST" action="<?php base_url('Auth/indexSAdmin') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="nik" aria-describedby="emailHelp" placeholder="Enter NIK..." name="nik">
                                        <?php echo form_error('nik', '<div class="text-danger small">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                        <?php echo form_error('password', '<div class="text-danger small">', '</div>') ?>
                                    </div>
                                    <hr>
                                    <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Login</button>
                                </form>
                                <br>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url("../") ?>">Back Home?</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>