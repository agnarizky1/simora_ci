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
                    <?php foreach ($pendaftaran as $np) : ?>
                        <tr>
                            <th scope="row"><?= ++$start; ?></th>
                            <td><?= $np['nama_lengkap']; ?></td>
                            <td><?= $np['alamat']; ?></td>
                            <td> </td>
                            <td>
                                <a href="<?= base_url('daftarnama/ubah/'); ?><?= $np['id']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('daftarnama/hapus/'); ?><?= $np['id']; ?> " class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->