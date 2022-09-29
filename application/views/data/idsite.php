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

            <a href="<?= base_url('idsite/print_idsite'); ?>" class="btn btn-danger mb-3"> <i class="fa fa-print"></i> Print</a>

            <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Site</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                        <!-- <th scope="col">Change Color</th> -->
                        <th scope="col">Action</th>
                        <th scope="col">Print Barcode</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($idsite as $row) : ?>
                        <tr>
                            <th scope="row"><?= ++$start; ?></th>
                            <td><?= $row['id_site']; ?></td>
                            <td><?= $row['lokasi'] ?></td>
                            <td><?= $row['latitude'] ?></td>
                            <td><?= $row['longitude'] ?></td>
                            <td>
                                <a href="<?= base_url('Idsite/ubah/'); ?><?= $row['id']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('Idsite/hapus/'); ?><?= $row['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ?');">Delete</a>
                                <a href="<?= base_url('Idsite/barcode/') ?><?= $row['id']; ?>" class="badge badge-primary">Barcode</a>
                                <a href="<?= base_url('Idsite/details/'); ?><?= $row['id']; ?>" class="badge badge-warning">Details</a>
                            </td>
                            <td>
                                <a href="<?= base_url('idsite/print_barcode/'); ?><?= $row['id']; ?>" class="badge badge-secondary"> <i class="fa fa-print"></i> Print</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Filter Provider</th>
                <th scope="col">Filter Kecamatan</th>
                <th scope="col">Filter Desa</th>
                <!-- <th scope="col">Change Color</th> -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <form id="formfilter" action="<?= base_url(); ?>idsite/filter_perusahaan/" method="get">
                        <div id="filter_kecamatan">
                            <select name="provider_id" id="provider_id">
                                <option value="" disabled="" selected="">Nama Perusahaan</option>
                                <?php foreach ($nama_perusahaan as $np) : ?>
                                    <option value="<?= $np['id']; ?>"><?= $np['nama_perusahaan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-danger" value="Cari Perusahaan">
                    </form>
                </td>
                <td>
                    <form id="formfilter" action="<?= base_url(); ?>idsite/filter_kecamatan/" method="get">
                        <div id="filter_kecamatan">
                            <select name="kecamatan_id" id="kecamatan_id">
                                <option value="" disabled="" selected="">Kecamatan</option>
                                <?php foreach ($kecamatan as $kc) : ?>
                                    <option value="<?= $kc['id']; ?>"><?= $kc['kecamatan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-warning" value="Cari Kecamatan">
                    </form>
                </td>
                <td>
                    <form id="formfilter" action="<?= base_url(); ?>idsite/filter_desa/" method="get">
                        <div id="filter_desa">
                            <select name="desa_id" id="desa_id">
                                <option value="" disabled="" selected="">Desa</option>
                                <?php foreach ($desa as $ds) : ?>
                                    <option value="<?= $ds['id']; ?>"><?= $ds['desa'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-success" value="Cari Desa">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
    <hr>

    <!-- Illustrations -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">MENU PRINT FILTER</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url('assets/'); ?>img/undraw_posting_photo.svg" alt="...">
            </div>
            <p>Di bawah menu ini terdapat menu untuk mengeprint sesuai dengan filter yang di inginkan user dapat memilih filter mulai dari filter perusahaan / provider, filter kecamatan,
                dan filter desa. User harus memasukkan terlebih dahulu filter yang di inginkan lalu pencet tombol PRINT sesuai dengan Menu Filter. Jika user memilih Filter Perusahaan maka button yang harus dipencet
                yaitu Button Print Filter Perusahaan, dan seterusnya
            </p>
            <p class="font-weight-bold">HAPPY WORKING :)</p>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Print Filter Nama Perusahan</th>
                <th scope="col">Print Filter Kecamatan</th>
                <th scope="col">Print Filter Desa</th>
                <!-- <th scope="col">Change Color</th> -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <form id="formfilter" action="<?= base_url(); ?>idsite/print_filterPerusahaan/" method="get">
                        <div class="row">
                            <div class="col-md-3" id="filter_kecamatan">
                                <select name="provider_id" id="provider_id">
                                    <option value="" disabled="" selected="">Nama Perusahaan</option>
                                    <?php foreach ($nama_perusahaan as $np) : ?>
                                        <option value="<?= $np['id']; ?>"><?= $np['nama_perusahaan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-danger" value="Print Perusahaan">
                    </form>
                </td>
                <td>
                    <form id="formfilter" action="<?= base_url(); ?>idsite/print_filterKecamatan/" method="get">
                        <div class="row">
                            <div class="col-md-3" id="filter_kecamatan">
                                <select name="kecamatan_id" id="kecamatan_id">
                                    <option value="" disabled="" selected="">Kecamatan</option>
                                    <?php foreach ($kecamatan as $kc) : ?>
                                        <option value="<?= $kc['id']; ?>"><?= $kc['kecamatan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-warning" value="Print Kecamatan">
                    </form>
                </td>
                <td>
                    <form id="formfilter" action="<?= base_url(); ?>idsite/print_filterDesa/" method="get">
                        <div class="row">
                            <div class="col-md-3" id="filter_desa">
                                <select name="desa_id" id="desa_id">
                                    <option value="" disabled="" selected="">Desa</option>
                                    <?php foreach ($desa as $ds) : ?>
                                        <option value="<?= $ds['id']; ?>"><?= $ds['desa'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-success" value="Print Desa">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Modal -->
<div class="modal fade" id="newProviderModal" tabindex="-1" role="dialog" aria-labelledby="newProviderModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newProviderModalLabel">QR CODE</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <img src="<?php echo site_url('Idsite/qrcode/' . $cp['nama_perusahaan']) ?>" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>