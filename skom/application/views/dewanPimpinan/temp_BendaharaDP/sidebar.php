  <!-- Main Sidebar Container -->
  <aside class="main-sidebar bg-dark-blue sidebar-dark-warning elevation-4" style="background-color: forestgreen;">
      <!-- Brand Logo -->
      <a class="brand-link text-white">
          <img src="<?= base_url('assets/'); ?>img/logo.png" alt="Logo Perhubungan" class="brand-image img"
              style="width: 35px;">
          <span class="brand-text font-weight-light">Sistem KOMUNITAS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-header"><a style="color: white;">Beranda</a></li>
                  <hr class="my-0 bg-light">
                  <li class="nav-item">
                      <a href="<?= base_url('DewanPimpinan_Bendahara'); ?>" class="nav-link">
                          <i class=" fas fa-home nav-icon"></i>
                          <p>Home</p>
                      </a>
                  </li>
                  <li class="nav-header"><a style="color: white;">Data</a></li>
                  <li class="nav-item">
                      <a href="<?= base_url('DewanPimpinan_Bendahara'); ?>/profile_bendahara" class="nav-link">
                          <i class="fas fa-user nav-icon"></i>
                          <p>Profil Bendahara</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('AgendaUmum'); ?>/all_Abendahara" class="nav-link">
                          <i class="fas fa-calendar-alt nav-icon"></i>
                          <p>Agenda Umum</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('DewanPimpinan_Bendahara'); ?>/riwayatAnggaran" class="nav-link">
                          <i class="fas fa-file-invoice-dollar nav-icon"></i>
                          <p>Riwayat Anggaran</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('DewanPimpinan_Bendahara/dokumenBendahara'); ?>" class="nav-link">
                          <i class="fas fa-book nav-icon float-left mt-1"></i>
                          <div class="float-left">
                              <p>Dokumen</p>
                          </div>
                      </a>
                  </li>
                  <li class="nav-header"><a style="color: white;">Pengaturan</a></li>

                  <li class="nav-item">
                      <a href="<?= base_url('DewanPimpinan_Bendahara/change_passwordBendahara'); ?>" class="nav-link">
                          <i class="fas fa-key nav-icon"></i>
                          <p>
                              Ubah Password
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('user_komunitas/bendahara_d_p'); ?>" class="nav-link">
                          <i class="fas fa-door-open nav-icon"></i>
                          <p>
                              Halaman Komunitas
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('Auth/logout'); ?>" class="nav-link">
                          <i class="fas fa-sign-out-alt nav-icon"></i>
                          <p>
                              Logout
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>