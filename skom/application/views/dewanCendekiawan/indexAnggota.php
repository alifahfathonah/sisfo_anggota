</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-lightgray text-bold">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content ">

        <div class="alert alert-success mb-4">
            Selamat datang, Anda login sebagai <a
                class="font-italic font-weight-bold"><?php if ($user['hak_akses'] == '15') { ?>
                <td>Anggota Dewan Cendekiawan</td>
                <?php } ?>
            </a>
            Baitul Ummah.
        </div>

        <div class="row">

            <!-- Data Admin Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Data Super Admin
                                </div>
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
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Admin
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $anggota ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
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
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Anggota
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $anggota2 ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
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
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Data Hak Akses
                                </div>
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