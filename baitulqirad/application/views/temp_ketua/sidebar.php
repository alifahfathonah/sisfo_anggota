<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url() ?>assets/img/logo.png" width='50'>
        </div>
        <div class="sidebar-brand-text mx-1">Baitul Qirad</div>
      </a>


      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('ketua/dashboard') ?>">
          <i class="fas fa-home"></i>
          <span>Home</span></a>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('ketua/profil') ?>">
          <i class="far fa-id-card"></i>
          <span>Profil Ketua</span></a>
      </li>


      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-info-circle"></i>
          <span>Informasi Akuntansi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('ketua/labaRugi') ?>">Laporan Laba Rugi</a>
            <a class="collapse-item" href="<?php echo base_url('ketua/PerubahanModal') ?>">Laporan Perubahan Modal</a>
            <a class="collapse-item" href="<?php echo base_url('ketua/neraca') ?>">Neraca</a>
            <a class="collapse-item" href="<?php echo base_url('ketua/piutang') ?>">Daftar Piutang</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('ketua/agendaUmum') ?>">
          <i class="fas fa-calendar-alt"></i>
          <span>Agenda Umum</span></a>
      </li>


      <!-- Nav Item - Posisi Pengurus -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('ketua/agendaKhusus') ?>">
          <i class="fas fa-calendar-week"></i>
          <span>Agenda Khusus</span></a>
      </li>

      <!-- Nav Item - Logout -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('ketua/ubahpassword') ?>">
          <i class="fas fa-lock"></i>
          <span>Ubah Password</span></a>
      </li>


      <!-- Nav Item - Logout -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('login/logout') ?>">
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
    <div id="content-wrapper" class="d-flex flex-column" >

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


         <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto" >
             <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-0 d-none d-lg-inline text-white medium" ><?php echo $this->session->userdata('jabatan') ?></span>
              </a>
            </li>         
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white medium"><?php echo $this->session->userdata('nama_anggota') ?></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url('assets/photo/').$this->session->userdata('foto') ?>">
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->