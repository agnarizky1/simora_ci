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
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <!-- <th scope="col">Change Color</th> -->
                        <th scope="col">Role</th>
                        <th scope="col">Is Active</th>
                        <th scope="col">Date Created</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alluser as $au) : ?>
                        <tr>
                            <th scope="row"><?= ++$start; ?></th>
                            <td><?= $au['name']; ?></td>
                            <td><?= $au['email']; ?></td>
                            <td><?= $au['role_id']; ?></td>
                            <td><?= $au['is_active']; ?></td>
                            <td><?= date('d F Y', $au['date_created']); ?></td>

                            <td>
                                <a href="<?= base_url('user/allUserEdit/'); ?><?= $au['id']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('user/allUserHapus/'); ?><?= $au['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ?');">Delete</a>
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