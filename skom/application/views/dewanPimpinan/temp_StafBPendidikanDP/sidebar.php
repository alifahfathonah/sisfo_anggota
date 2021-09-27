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
                      <a href="<?= base_url('DewanPimpinan_StafBPendidikan'); ?>" class="nav-link">
                          <i class=" fas fa-home nav-icon"></i>
                          <p>Home</p>
                      </a>
                  </li>
                  <li class="nav-header"><a style="color: white;">Data</a></li>
                  <li class="nav-item">
                      <a href="<?= base_url('DewanPimpinan_StafBPendidikan'); ?>/profile_bpendidikan" class="nav-link">
                          <i class="fas fa-user nav-icon"></i>
                          <p>Profil</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('DewanPimpinan_StafBPendidikan'); ?>/portalKuttab" class="nav-link">
                          <i class="fas fa-code-branch nav-icon"></i>
                          <p>Portal Kuttab</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('AgendaUmum_Staf'); ?>/all" class="nav-link">
                          <i class="fas fa-calendar-alt nav-icon"></i>
                          <p>Agenda Umum</p>
                      </a>
                  </li>
                  <li class="nav-header"><a style="color: white;">Pengaturan</a></li>

                  <li class="nav-item">
                      <a href="<?= base_url('DewanPimpinan_StafBPendidikan/change_passwordBPendidikan'); ?>"
                          class="nav-link">
                          <i class="fas fa-key nav-icon"></i>
                          <p>
                              Ubah Password
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('user_komunitas/staf_b_pendidikan'); ?>" class="nav-link">
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