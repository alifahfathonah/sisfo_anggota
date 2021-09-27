<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url() ?>assets/img/logo.png" width='50px'>
        </div>
        <div class="sidebar-brand-text mx-1">Baitul Qirad</div>
      </a>


      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
          <i class="fas fa-home"></i>
          <span>Home</span></a>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/dataProfil') ?>">
          <i class="far fa-id-card"></i>
          <span>Profil Admin</span></a>
      </li>


      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/dataAnggota') ?>">
          <i class="far fa-address-book"></i>
          <span>Daftarkan Anggota</span></a>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/dataAkses') ?>">
          <i class="fas fa-low-vision"></i>
          <span>Hak Akses</span></a>
      </li>


      <!-- Nav Item - Posisi Pengurus -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/dataJabatan') ?>">
          <i class="fas fa-sitemap"></i>
          <span>Posisi Pengurus</span></a>
      </li>


      <!-- Nav Item - Logout -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('gantiPassword') ?>">
          <i class="fas fa-lock"></i>
          <span>Ubah Password</span></a>
      </li>


      <!-- Nav Item - Logout -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('welcome/logout') ?>">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

<!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto" >
             <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-0 d-none d-lg-inline text-white medium" ><?php echo $this->session->userdata('pangkat') ?></span>
              </a>
            </li>         
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white medium"><?php echo $this->session->userdata('nama') ?></span>
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        