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
                      <a href="<?= base_url('DewanPimpinan_StafBKeanggotaan'); ?>" class="nav-link">
                          <i class=" fas fa-home nav-icon"></i>
                          <p>Home</p>
                      </a>
                  </li>
                  <li class="nav-header"><a style="color: white;">Data</a></li>
                  <li class="nav-item">
                      <a href="<?= base_url('DewanPimpinan_StafBKeanggotaan'); ?>/profile_bkeanggotaan"
                          class="nav-link">
                          <i class="fas fa-user nav-icon"></i>
                          <p>Profil</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('DewanPimpinan_StafBKeanggotaan'); ?>/list_anggota" class="nav-link">
                          <i class="fas fa-users nav-icon"></i>
                          <p>Pendaftaran Anggota</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('AgendaUmum_Staf'); ?>/all_Bkeanggotaan" class="nav-link">
                          <i class="fas fa-calendar-alt nav-icon"></i>
                          <p>Agenda Umum</p>
                      </a>
                  </li>

                  <li class="nav-header"><a style="color: white;">Informasi Koperasi</a></li>

                  <li class="nav-item">
                      <a href="" class="nav-link">
                          <i class="fas fa-fw fa-info-circle"></i>
                          <p>
                              Informasi Koperasi
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?= base_url('informasi_kom') ?>" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Komunitas Koperasi</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= base_url('informasi_tij') ?>"
                                  class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Koperasi Tijarah</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= base_url('informasi_tab') ?>"
                                  class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Koperasi Tabarru</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <!-- <li class="nav-header"><a style="color: white;">Informasi Konten</a></li>

                  <li class="nav-item">
                      <a href="" class="nav-link">
                          <i class="fas fa-fw fa-info"></i>
                          <p>
                              Informasi Konten
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?= base_url('simpanan') ?>" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Simpanan</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= base_url('tokoemas') ?>" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Toko Emas</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= base_url('pembiayaan') ?>" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Pembiayaan</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= base_url('pinjamanemas') ?>" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Pinjaman Emas</p>
                              </a>
                          </li>
                      </ul>
                  </li> -->

                  <li class="nav-header"><a style="color: white;">Pengaturan</a></li>
                  <li class="nav-item">
                      <a href="<?= base_url('DewanPimpinan_StafBKeanggotaan/change_passwordBKeanggotaan'); ?>"
                          class="nav-link">
                          <i class="fas fa-key nav-icon"></i>
                          <p>
                              Ubah Password
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('user_komunitas/staf_b_keanggotaan'); ?>" class="nav-link">
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