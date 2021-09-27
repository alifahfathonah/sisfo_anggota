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
                      <a href="<?= base_url('DewanUlama_Ketua'); ?>" class="nav-link">
                          <i class=" fas fa-home nav-icon"></i>
                          <p>Home</p>
                      </a>
                  </li>
                  <li class="nav-header"><a style="color: white;">Data</a></li>
                  <li class="nav-item">
                      <a href="<?= base_url('DewanUlama_Ketua'); ?>/profile_ketua" class="nav-link">
                          <i class="fas fa-user nav-icon"></i>
                          <p>Profil</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('AgendaUmum_DU'); ?>/all" class="nav-link">
                          <i class="fas fa-book nav-icon"></i>
                          <p>Daftar Agenda Umum</p>
                      </a>
                  </li>
                  <li class="nav-header"><a style="color: white;">Pengaturan</a></li>
                  <li class="nav-item">
                      <a href="<?= base_url('DewanUlama_Ketua/change_password'); ?>" class="nav-link">
                          <i class="fas fa-key nav-icon"></i>
                          <p>
                              Ubah Password
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('user_komunitas/ketua_d_u'); ?>" class="nav-link">
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