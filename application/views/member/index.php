<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2 bg-warning">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <a href="" data-toggle="modal" data-target="#newPerusahaanModal">
                                        <div class="h5 mb-0 font-weight-bold text-white align-center mb-1">
                                            Add New Perusahaan</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-city fa-3x text-gray-200"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2 bg-danger">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <a href="" data-toggle="modal" data-target="#newProviderModal">
                                        <div class="h5 mb-0 font-weight-bold text-white align-center mb-1">
                                            Add New Provider</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-broadcast-tower fa-3x text-gray-200"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
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
                        <p>Ini adalah Web Simora untuk Member yang berfungsi untuk menginputkan Data Perusahaan & Data Provider.
                            Yang pertama Member harus menginputkan Data Nama Perusahaan dulu pada Menu "Add New Perusahaan".
                            Lalu Yang kedua Member menginputkan Data Provider "Add New Provider".
                        </p>
                        <p class="font-weight-bold">
                            HAPPY WORKING :)
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Perusahaan Modal -->
<div class="modal fade" id="newPerusahaanModal" tabindex="-1" role="dialog" aria-labelledby="newPerusahaanModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newPerusahaanModalLabel">Add New Perusahaan</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Member/perusahaanTambah'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Provider Modal -->
<div class="modal fade" id="newProviderModal" tabindex="-1" role="dialog" aria-labelledby="newProviderModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newProviderModalLabel">Add New Provider</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Member/providerTambah'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="id_perusahaan" id="id_perusahaan" class="form-control">
                            <option value="" disabled>Select Perusahaan</option>
                            <?php foreach ($nama_perusahaan as $np) : ?>
                                <option value="<?= $np['id']; ?> "><?= $np['nama_perusahaan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="marker_color" name="marker_color" placeholder="Marker Color">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>