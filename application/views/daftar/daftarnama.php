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

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newPerusahaanModal">Add New Perusahaan</a>
            <a href="<?= base_url('daftarnama/print_daftar'); ?>" class="btn btn-danger mb-3"> <i class="fa fa-print"></i> Print</a>

            <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Marker Color</th>
                        <!-- <th scope="col">Change Color</th> -->
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($nama_perusahaan as $np) : ?>
                        <tr>
                            <th scope="row"><?= ++$start; ?></th>
                            <td><?= $np['nama_perusahaan']; ?></td>
                            <td><?= $np['alamat']; ?></td>
                            <td>
                                <svg height="20" width="20">
                                    <circle cx="10" cy="10" r="5" fill="<?= $np['marker_color']; ?>"></circle>
                                </svg>
                            </td>
                            <td>
                                <a href="<?= base_url('daftarnama/ubah/'); ?><?= $np['id']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('daftarnama/hapus/'); ?><?= $np['id']; ?> " class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newPerusahaanModal" tabindex="-1" role="dialog" aria-labelledby="newPerusahaanModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newPerusahaanModalLabel">Add New Perusahaan</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('daftarnama/tambah'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Provider">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="marker_color" name="marker_color" placeholder="Warna">
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