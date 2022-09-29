<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $submenu['id']; ?>">

                <div class="form-group row">
                    <label for="menu_id" class="col-sm-2 col-form-label">Select Menu</label>
                    <div class="col-sm-10">
                        <select name="menu_id" id="menu_id" class="form-control col-sm-3">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?> "><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="url" class="col-sm-2 col-form-label">Url</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="is_active" class="col-sm-2 col-form-label">Is Active</label>
                    <div class="col-sm-10">
                        <select name="is_active" id="is_active" class="form-control col-sm-4">
                            <option value="">Select Active Menu</option>
                            <option value="0">Tidak Aktif</option>
                            <option value="1">Aktif</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="subUbah" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.containe r-fluid -->

</div>
<!-- End of Main Content -->