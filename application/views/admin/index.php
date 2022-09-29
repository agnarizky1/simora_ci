<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 bg-warning">
                <a href="<?= base_url('user/alluser') ?>">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                    User Yang Terdaftar</div>
                                <div class="h5 mb-0 font-weight-bold text-white"><?= $totaluser; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-address-book fa-3x text-gray-200"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 bg-success">
                <a href="<?= base_url('daftarnama') ?>">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Provider</div>
                                <div class="h5 mb-0 font-weight-bold text-white"><?= $totalprovider; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-broadcast-tower fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2 bg-danger">
                <a href="<?= base_url('idsite') ?>">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Cellplan
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-white"><?= $totalcellplan; ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-marked fa-3x text-gray-200"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Illustrations -->
        <div class="card shadow mb-4 col-xl-8">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Portofolio</h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url('assets/'); ?>img/undraw_posting_photo.svg" alt="...">
                </div>
                <p>Ini adalah Web Simora untuk SUPER ADMIN yang berfungsi untuk memonitor PT Perusahaan, Provider, serta Cellplan.
                    Selain itu, SUPER ADMIN dapat menginputkan data yang dibutuhkan. SUPER ADMIN dapat mengubah hak akses menu pada setiap user yang terdaftar.
                </p>
                <p class="font-weight-bold">HAPPY WORKING :)</p>
            </div>
        </div>

    </div>
    <!-- /.container-row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->