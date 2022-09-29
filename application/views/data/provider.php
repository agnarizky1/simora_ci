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

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newProviderModal">Add New Provider</a>

            <a href="<?= base_url('provider/print_provider'); ?>" class="btn btn-danger mb-3"> <i class="fa fa-print"></i> Print</a>

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
                    <?php $i = 1; ?>
                    <?php foreach ($provider as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $p['nama_perusahaan']; ?></td>
                            <td><?= $p['alamat']; ?></td>
                            <td>
                                <svg height="20" width="20">
                                    <circle cx="10" cy="10" r="5" fill="<?= $p['marker_color']; ?>"></circle>
                                </svg>
                            </td>
                            <td>
                                <a href="<?= base_url('provider/ubah/'); ?><?= $p['id']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('provider/hapus/'); ?><?= $p['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ?');">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
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
                <h5 class="modal-title" id="newProviderModalLabel">Add New Provider</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('provider/tambah'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="id_perusahaan" id="id_perusahaan" class="form-control">
                            <option value="">Select Menu</option>
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