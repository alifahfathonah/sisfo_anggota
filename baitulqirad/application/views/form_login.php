
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center mt-2">

      <div class="col-xl-5 col-lg-6 col-md-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <img src="<?php echo base_url() ?>assets/img/logo.png" width='100px'>
                    <h1 class="h4 text-gray-900 mb-2">SISTEM MUAMALAH <br> <b>KOPERASI TIJARAH</b></h1>
                    <p>Login Admin</p>
                    <hr>
                  </div>
                      <?php echo $this->session->flashdata('pesan') ?>
                  <form class="user" method="POST" action="<?php base_url('welcome') ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username..." name="nik">
                      <?php echo form_error('nik','<div class="text-danger small">','</div>') ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" 
                      placeholder="Password" name="sandi">
                      <?php echo form_error('sandi','<div class="text-danger small">','</div>') ?>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success btn-user btn-block">Login</button>
                    <a class="btn btn-secondary btn-user btn-block" href="<?php echo base_url('login') ?>">Login Pengurus</a>
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

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
