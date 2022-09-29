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
                    <?php foreach ($filter as $f) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $f['nama_perusahaan']; ?></td>
                            <td><?= $f['alamat'] ?></td>
                            <td>
                                <svg height="20" width="20">
                                    <circle cx="10" cy="10" r="5" fill="<?= $f['marker_color']; ?>"></circle>
                                </svg>
                            </td>
                            <td>
                                <a href="<?= base_url('provider/ubah/'); ?><?= $f['id']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('provider/ubah/'); ?><?= $f['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ?');">Delete</a>
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