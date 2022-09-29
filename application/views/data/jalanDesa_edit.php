<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $desa['id']; ?>">

                <div class="form-group row">
                    <label for="kecamatan_id" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <select name="kecamatan_id" id="kecamatan_id" class="form-control col-sm-6">
                            <option value="">Select Kecamatan</option>
                            <?php foreach ($kecamatan as $kc) : ?>
                                <option value="<?= $kc['id']; ?> "><?= $kc['kecamatan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Desa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="desa" name="desa" value="<?= $desa['desa']; ?>">
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