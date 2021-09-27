<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: forestgreen;">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"
                        style="color: lightgray;"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="nav-item ml-auto" style="height: 20px;">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel d-flex">
                <span style="margin-top: 5px; color: white;"><?= $user['nama']; ?></span>
                <div class="image">
                    <img src="<?= base_url('assets/img/') . $user['foto']; ?>" class="img-profile rounded-circle">
                </div>
            </div>
    </nav>
    <!-- /.navbar -->