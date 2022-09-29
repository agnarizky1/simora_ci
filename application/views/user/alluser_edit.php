<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $alluser['id']; ?>">

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama User</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $alluser['name']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="role_id" class="col-sm-2 col-form-label">Role User</label>
                    <div class="col-sm-10">
                        <select name="role_id" id="role_id" class="form-control col-sm-6">
                            <option value="">Select Role User</option>
                            <?php foreach ($user_role as $ur) : ?>
                                <option value="<?= $ur['id']; ?> "><?= $ur['role']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="is_active" class="col-sm-2 col-form-label">User Active</label>
                    <div class="col-sm-10">
                        <select name="is_active" id="is_active" class="form-control col-sm-6">
                            <option value="">Is Active ?</option>
                            <option value="1"> Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="ubah" class="btn btn-primary">Edit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>
<!-- /.containe r-fluid -->

</div>
<!-- End of Main Content -->