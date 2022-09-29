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

            <a href="<?= base_url('idsite/print_filter'); ?>" class="btn btn-danger mb-3"> <i class="fa fa-print"></i> Print</a>

            <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Site</th>
                        <th scope="col">Provider ID</th>
                        <th scope="col">Kecamatan ID</th>
                        <th scope="col">Desa ID</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                        <!-- <th scope="col">Change Color</th> -->
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($hasil as $cp) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $cp['id_site']; ?></td>
                            <td><?= $cp['nama_perusahaan']; ?></td>
                            <td><?= $cp['kecamatan']; ?></td>
                            <td><?= $cp['desa']; ?></td>
                            <td><?= $cp['lokasi'] ?></td>
                            <td><?= $cp['latitude'] ?></td>
                            <td><?= $cp['longitude'] ?></td>
                            <td>
                                <a href="<?= base_url('cellplan/ubah/' . $cp['id']); ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('cellplan/hapus/'); ?><?= $cp['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ?');">Delete</a>
                                <a href="<?= base_url('cellplan/barcode/' . $cp['id']); ?>" class="badge badge-primary">Barcode</a>
                                <a href="<?= base_url('cellplan/details/' . $cp['id']); ?>" class="badge badge-warning">Details</a>
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