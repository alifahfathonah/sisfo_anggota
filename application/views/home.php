<link href="<?= base_url()?>assets1/css/home.css" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />
  <title><?= $title ?></title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500&amp;subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<style>
  html {
    font-size: 14px;
  }
  
  .container1 {
    font-size: 14px;
    color: #666666;
    font-family: "Open Sans";
    width: 80%;
    margin: auto;
  }

  body{
    background: #dbffc3;
  }
</style>

<body>
  <div class="container1">

  <section id="home" class="about">

        <div class="section-title" data-aos="fade-up">
          <h5>SELAMAT DATANG</h5>
        </div>
      

    <div class="row pt-3 m-auto">

      <div class="col-md-6 col-lg-3 pb-3">

        <!-- Copy the content below until next comment -->
        <div class="card card-custom bg-white border-white border-0">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="<?= base_url() ?>assets1/img/komunitas.png" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">KOMUNITAS</h4>
            <p class="card-text">KOMUNITAS Adalah Bla Bla Bla .....</p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
          <a href="<?= base_url('skom/Auth') ?>" class="btn-get-started scrollto">Login</a>
          </div>
        </div>
        <!-- Copy until here -->

      </div>
      
      <div class="col-md-6 col-lg-3 pb-3">

        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
        <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="<?= base_url() ?>assets1/img/tijarah.jpg" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">KOPERASI TIJARAH</h4>
            <p class="card-text">KOPERASI TIJARAH Adalah Bla Bla Bla .....</p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
           <a href="<?= base_url('baitulqirad/Login') ?>" class="btn-get-started scrollto">Login</a>
          </div>
        </div>

      </div>

      <div class="col-md-6 col-lg-3 pb-3">
      <div class="card card-custom bg-white border-white border-0" style="height: 450px">
        <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="<?php echo base_url() ?>assets1/img/BM.png" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">KOPERASI TABARRU</h4>
            <p class="card-text">KOPERASI TABARRU Adalah Bla Bla Bla .....</p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
           <a href="<?= base_url('baitulmaal/Login') ?>" class="btn-get-started scrollto">Login</a>
          </div>
        </div>

          </div>
          
      <div class="col-md-6 col-lg-3 pb-3">
      <div class="card card-custom bg-white border-white border-0" style="height: 450px">
        <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="<?= base_url() ?>assets1/img/user.png" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">ANGGOTA</h4>
            <p class="card-text">ANGGOTA Adalah Bla Bla Bla .....</p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
           <a href="<?= base_url('login') ?>" class="btn-get-started scrollto">Login</a>
          </div>
        </div>

          </div>

        </div>

      </div>
      </section>

    </div>
  </div>

</body>

</html>
