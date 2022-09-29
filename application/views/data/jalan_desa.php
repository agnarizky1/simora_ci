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

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newDesaModal">Add Desa</a>

            <a href="<?= base_url('provider/print_provider'); ?>" class="btn btn-danger mb-3"> <i class="fa fa-print"></i> Print</a>

            <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Desa</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($desa as $ds) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $ds['desa']; ?></td>
                            <td><?= $ds['kecamatan']; ?></td>
                            <td>
                                <a href="<?= base_url('Jalan_desa/ubah/'); ?><?= $ds['id']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('Jalan_desa/hapus/'); ?><?= $ds['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ?');">Delete</a>
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
<div class="modal fade" id="newDesaModal" tabindex="-1" role="dialog" aria-labelledby="newDesaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newDesaModalLabel">Add New Jalan Kecamatan</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Jalan_desa/tambah'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="kecamatan_id" id="kecamatan_id" class="form-control">
                            <option value="">Select Kecamatan</option>
                            <?php foreach ($kecamatan as $kc) : ?>
                                <option value="<?= $kc['id']; ?> "><?= $kc['kecamatan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="desa" name="desa" placeholder="Jalan Desa">
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