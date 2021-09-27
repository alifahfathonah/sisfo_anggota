<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-6 col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row ">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                    <img src="<?= base_url()?>assets/img/user.png" style="border-radius: 99em; border: 1px solid #089975; 
                                    box-shadow: 1px 1px 1px 4px rgb(255, 255, 255); padding: 4px; width:120px; height:120px; margin-bottom:20px;" />
                                        <h1 class="h4 text-gray-900 mb-2">SISTEM MUAMALAH <br> <b>ANGGOTA</b></h1>
                                        <p>
                                        <a style="text-decoration: none; color: inherit;" href="<?php echo base_url('login') ?>">Komunitas </a>|
                                        <a style="text-decoration: none; color: inherit;" href="<?php echo base_url('login/anggota_tijarah') ?>">Tijarah </a>|
                                        <b>Tabarru</b>
                                    </p>
                                    <hr>
                                    </div>
                                    
                                    <?= $this->session->flashdata('pesan') ?>
                                    <form class="user" method="POST" action="<?php base_url('login/anggota_tabarru') ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter NIK" name="nik">
                                                <?= form_error('nik', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="sandi">
                                                <?= form_error('sandi', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                    <hr>
                                        <button type="submit" class="btn btn-success btn-user btn-block">Login</button>
                                        <!-- <hr>
                                        <a href="<?= base_url()?>" class="btn btn-info btn-user btn-block" role="button" aria-disabled="true">Login Tanpa Akun</a> -->
                                    </form>
                                    <br>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url()?>">Back Home?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>


</body>

</html>

