<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">

<section class="content ">

<div class="alert alert-success font-weight-bold mb-4">
Selamat datang <?php echo $this->session->userdata('nama_anggota') ?> anda login sebagai <?php echo $this->session->userdata('jabatan') ?> di Koperasi Tabarru.
</div>

<div class="row">

            <!-- Data Admin  -->
            <div class="col-xl-2 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-60 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Data Admin</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $admin ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="far fa-id-card fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Data Anggota  -->
            <div class="col-xl-2 col-md-6 mb-4">
              <div class="card border-left-success shadow h-60 py-0">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Anggota</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $anggota ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           <!-- Data Jabatan -->
            <div class="col-xl-2 col-md-6 mb-4">
              <div class="card border-left-info shadow h-60 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Jabatan</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $jabatan ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


         <!-- Data Hak Akses  -->
            <div class="col-xl-2 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-60 py-0">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Data Hak Akses</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $akses ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-fw fa-key fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

         <!-- Data Agenda Umum  -->
            <div class="col-xl-2 col-md-6 mb-4">
              <div class="card border-left-secondary shadow h-60 py-0">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Data Agenda Umum</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $umum ?></div>
                    </div>
                    <div class="col-auto">
                       <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>

</section>
</div>
</div>