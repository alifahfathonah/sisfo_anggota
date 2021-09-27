<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">

 <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
          </div>
</section>

<section class="content ">

  <div class="alert alert-success font-weight-bold mb-4">
     Selamat datang, Anda login sebagai <?php echo $this->session->userdata('pangkat') ?>.
  </div>

<div class="row">

            <!-- Data Admin Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Data Admin</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $admin ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="far fa-id-card fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Data Anggota Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Anggota</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $anggota ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           <!-- Data Jabatan Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Jabatan</div>
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

         <!-- Data Hak Akses Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Data Hak Akses</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $akses ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-low-vision fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</section>
</div>
</div>